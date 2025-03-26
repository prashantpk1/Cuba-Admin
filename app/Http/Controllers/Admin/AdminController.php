<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Events\UserRegistered;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Admin\AdminProfileRequest;
use App\Models\UserLanguage;

class AdminController extends Controller
{
    //

    public function adminLogin()
    {
        if (!empty((Auth::user()))) {
            if (Auth::user()->user_type  == 1) {
                return redirect('admin/dashboard');
            } elseif (Auth::user()->user_type  == 2) {
                return redirect('admin/dashboard');
            } elseif (Auth::user()->user_type  == 3) {
                return redirect('404');
            } else {
                return redirect('/');
            }
        } else {
            return  view('Admin.login');
        }
    }

    public function storeLogin(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::AdminHome);
    }

    public function dashboard()
    {
        $customers = User::where('user_type', 4)->count();
        $drivers = User::where('user_type', 3)->count();
        $subadmin = User::where('user_type', 2)->count();


        return view('Admin.dashboard', compact('customers', 'subadmin', 'drivers'));
    }

    public function setting(Request $request)
    {

        return view('Admin.account_setting', [
            'user' => $request->user(),
        ]);
    }


    public function getChangePassword(Request $request)
    {
        return view('Admin.change_password', [
            'user' => $request->user(),
        ]);
    }

    public function storeChangePassword(Request $request)
    {

        $request->validate([
            'current_password' => 'required',
            'password' => 'required',
            'password_confirmation' => ['required', 'same:password'],
        ], [
            'current_password.required' => translate('this_field_is_required'),
            'password.required' => translate('this_field_is_required'),
            'password_confirmation.required' => translate('this_field_is_required'),
            'password_confirmation.same' => translate('The_password_confirmation_does_not_match_the_new_password'), 
        ]);

        $pass = Hash::make($request->password);

        if (!Hash::check($request->current_password, auth()->user()->password)) {
            return redirect()->route('setting')->with("error", translate('old_password_does_not_match!'));
        } else {
            $data = User::find(Auth::id())->update(array('password' => $pass));
            if (!empty($data)) {


                $user_type = Auth::user()->user_type;

                Auth::guard('web')->logout();

                $request->session()->invalidate();

                $request->session()->regenerateToken();

                if ($user_type == 1) {
                    return redirect('admin/login')->with('info', translate('password_updated_successfully.'));
                } else {
                    return redirect('/')->with('info', translate('password_updated_successfully.'));
                }
            }
        }
    }

    public function languageChange(Request $request)
    {
        $user_id = Auth::id(); // Get authenticated user's ID
        $language = $request->data; // Get language from request

        // Update if exists, otherwise create a new record
        $userLanguage = UserLanguage::updateOrCreate(
            ['user_id' => $user_id],  // Search condition
            ['language' => $language] // Fields to update or create
        );

        return response()->json([
            'status' => 'success',
            'message' => 'Language preference updated successfully',
            'data' => $userLanguage
        ]);
    }


    public function eventDispatch(Request $request)
    {
        $user = User::find(1);
        event(new UserRegistered($user));
    }


    /**
     * Update the user's profile information.
     */
    public function update(AdminProfileRequest $request)
    {
        $user = Auth::user();
        $data = User::find($user->id);

        // for Image
        if ($request->hasFile('profile_image')) {
            if ($data->profile_image) {
                File::delete(public_path('profile_image/' . $data->profile_image));
            }
            $source = $_FILES['profile_image']['tmp_name'];
            if ($source) {
                $destinationFolder = public_path('profile_image'); // Specify the destination folder
                $image = $request->file('profile_image');
                $filename = time() . '_profile_image.' . $image->getClientOriginalExtension();
                if (!file_exists($destinationFolder)) {
                    mkdir($destinationFolder, 0777, true);
                }
                $destination = $destinationFolder . '/' . $filename;
                $profile_image = compressImage($source, $destination);
                $data->profile_image = $filename;
            }
        }


        $data->first_name = $request['first_name'];
        $data->last_name = $request['last_name'];
        $data->email = $request['email'];
        $data->phone = $request['phone'];
        $data->save();
        if (!empty($data)) {
            return redirect()->route('setting')->with('success', translate('profile_updated_successfully'));
        }
    }
}
