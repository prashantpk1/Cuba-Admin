<?php

namespace App\Http\Controllers\Admin;

use Exception;
use DataTables;
use App\Models\Faq;
use App\Models\Faqs;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ModelHasRoles;
use App\Models\FaqTranslation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Admin\EditSubadminRequest;
use App\Http\Requests\Admin\CreateSubadminRequest;

class SubAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = User::where("user_type", "2")->where("is_delete", "0")->orderBy('id', 'DESC')->get();

            return Datatables::of($data)->addIndexColumn()

                ->addColumn('action', function ($row) {

                    $btn = "";

                    $btn = $btn . '<div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                      <div class="btn-group" role="group">

                        <button class="btn btn-light dropdown-toggle text-primary" id="btnGroupDrop1" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></button>

                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">';

                    // if (auth()->user()->can('subadmin-status')) {
                    if ($row->is_approved == 1) {

                        $btn = $btn . '<a    href="' . route('sub-admin.status', $row->id) . '" title="' . translate('Suspend') . '" class="dropdown-item status-change" data-url="' . route('sub-admin.status', $row->id) . '">' . translate('Suspend') . '</a>';
                    } else if ($row->is_approved == 2) {

                        $btn = $btn . '<a   href="javascript:void(0)" href="' . route('sub-admin.status', $row->id) . '"   class="dropdown-item status-change" title="' . translate('Approved') . '" data-url="' . route('sub-admin.status', $row->id) . '">' . translate('Approved') . '</a>';
                    } else {

                        $btn = $btn . '<a   href="javascript:void(0)" href="' . route('sub-admin.status', $row->id) . '"   class="dropdown-item status-change" title="' . translate('Approved') . '" data-url="' . route('sub-admin.status', $row->id) . '">' . translate('Approved') . '</a>';
                    }
                    // }
                    // if (auth()->user()->can('sub-admin-edit')) {
                    $btn = $btn . '<a class="edit-data dropdown-item"  href="javascript:void(0)" title="' . translate('Edit') . '" data-url="' . route('sub-admin.edit', $row->id) . '">' . translate('Edit') . '</a>';
                    // }
                    // if (auth()->user()->can('sub-admin-delete')) {
                    $btn = $btn . '<a href="" data-url="' . route('sub-admin.destroy', $row->id) . '" class="dropdown-item destroy-data" title="' . translate('Delete') . '">' . translate('Delete') . '</a>';
                    // }
                    $btn = $btn . '</div>

                      </div>

                    </div>';

                    return $btn;
                })

                ->addColumn('status', function ($row) {

                    if ($row->is_approved == 1) {

                        return '<span class="badge bg-success">' . translate('Approved') . '</span>';
                    } else if ($row->is_approved == 2) {

                        return '<span class="badge bg-danger">' . translate('Suspend') . '</span>';
                    } else {

                        return '<span class="badge bg-dark">' . translate('Pending') . '</span>';
                    }
                })

                ->addColumn('user_details', function ($data) {

                    if ($data['profile_image'] == null && $data['profile_image'] == "") {

                        return ' <ul>

                        <li>

                          <div class="media"><img class="b-r-8 img-40" src=' . URL::to('/public') . '/admin/assets/images/user/user.png' . '  alt="Generic placeholder image"> <div class="media-body">

                          <div class="row">

                            <div class="col-xl-12">

                            <h6 class="mt-0">&nbsp;&nbsp; ' . $data->first_name . ' ' . $data->last_name . '</span></h6>

                            </div>

                          </div>

                          <p>&nbsp;&nbsp; ' . $data->email . '</p>

                        </div>

                      </div>

                    </li>

                  </ul>';
                    } else {

                        return ' <ul>

                        <li>

                          <div class="media"><img class="b-r-8 img-50" src=' . URL::to('/public') . '/profile_image/' . $data->profile_image . '  alt="Generic placeholder image">
                          

                            <div class="media-body">

                              <div class="row">

                                <div class="col-xl-12">

                                <h6 class="mt-0">&nbsp;&nbsp; ' . $data->first_name . ' ' . $data->last_name . '</span></h6>

                                </div>

                              </div>

                              <p>&nbsp;&nbsp; ' . $data->email . '</p>

                            </div>

                          </div>

                        </li>

                      </ul>';
                    }
                })

                ->rawColumns(['action', 'status', 'user_details'])

                ->make(true);
        }
        return view('Admin.Sub-Admin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateSubadminRequest $request)
    {



        //

        try {


            $post = $request->all();

            $data = new User();

            $data->first_name = $request->first_name;

            $data->last_name = $request->last_name;

            $data->phone = $request->phone;

            $data->email = $request->email;

            $email = $request->email;

            $data->gender = $request->gender;

            $data->password = Hash::make($request->password);

            $data->user_type = 2;

            $data->is_approved = "1";

            $data->register_type = 2;

            $data->register_method = 1;

            $data->country_id = $request->country_id;



            // for Profile Image

            if ($request->hasFile('profile_image')) {

                $image = $request->file('profile_image');

                $profile_image_name = time() . '_profile_image.' . $image->getClientOriginalExtension();

                $destinationPath = public_path('/profile_image');

                $image->move($destinationPath, $profile_image_name);

                $data->profile_image = $profile_image_name;
            }

            $data->save();

            if ($data->id) {

                $data = array('role_id' => $request->select_role, "model_type" => "App\Models\User", "model_id" => $data->id);

                DB::table('model_has_roles')->insert($data);
            }

            if (!empty($data)) {

                Mail::send(

                    ['html' => 'email.subadmin_register'],

                    array(

                        'email' => $email,

                        'password' => $request->password,

                    ),

                    function ($message) use ($email) {

                        $message->from(env('MAIL_USERNAME'), '');

                        $message->to($email);

                        $message->subject("Welcome to  as Sub Admin...");
                    }

                );

                return response()->json(['status' => '1', 'success' => translate('Sub Admin Account Added Successfully.')]);

                //

            }
        } catch (Exception $ex) {

            return response()->json(

                ['success' => false, 'message' => $ex->getMessage()]

            );
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        try {

            $data = User::find($id);
            $data['role'] = ModelHasRoles::where("model_id", $id)->first();
            if (!empty($data)) {

                return view('Admin.Sub-Admin.edit', compact('data'));
            }
        } catch (Exception $ex) {

            return response()->json(

                ['success' => false, 'message' => $ex->getMessage()]

            );
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditSubadminRequest $request, string $id)
    {

        try {

            $validated = [];

            $validated['email'] = 'required|email|unique:users,email,' . $id . ',id,is_delete,0';

            $customMessages = [
                'email.required' => translate('this_field_is_required'),
                'email.email' => translate('Please enter a valid email address.'),
                'email.max' => translate('The field must not exceed :max characters.'),
                'email.unique' => translate('The email address is already in use.'),
            ];

            $request->validate($validated, $customMessages);


            $data = User::find($id);

            if (!$data) {
                return response()->json(['status' => '0', 'message' => translate('User not found.')]);
            }

            // Check if email is changed
            $oldEmail = $data->email;
            $newEmail = $request->email;

            $data->first_name = $request->first_name;
            $data->last_name = $request->last_name;
            $data->phone = $request->phone;
            $data->email = $newEmail;
            $data->gender = $request->gender;
            $data->country_id = $request->country_id;


            // Update Profile Image if provided
            if ($request->hasFile('profile_image')) {
                File::delete(public_path('profile_image/' . $data->profile_image));

                $image = $request->file('profile_image');
                $uploaded = time() . '_profile_image.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/profile_image');
                $image->move($destinationPath, $uploaded);

                $data->profile_image = $uploaded;
            }

            $data->save();


            if ($request->select_role) {
                DB::table('model_has_roles')
                    ->where('model_id', $data->id)
                    ->where('model_type', 'App\Models\User')
                    ->update(['role_id' => $request->select_role]);
            }


            if (!empty($data)) {
                // Send email notification if the email was changed
                if ($oldEmail !== $newEmail) {
                    $data = Mail::send(
                        ['html' => 'email.subadmin_register'],
                        [
                            'email' => $newEmail,
                            'password' => $request->password ?? 'Your existing password',
                        ],
                        function ($message) use ($newEmail) {
                            $message->from(env('MAIL_USERNAME'), 'Lahbah');
                            $message->to($newEmail);
                            $message->subject("Your Email Address Has Been Updated - Lahbah");
                        }
                    );
                }

                return response()->json(['status' => '1', 'success' => translate('Sub Admin Account Update Successfully.')]);
            }
        } catch (Exception $ex) {
            return response()->json([
                'success' => false,
                'message' => $ex->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try {
            DB::beginTransaction();
            $data = User::find($id);
            $data->is_delete = "1";
            $data->update();
            DB::commit(); // Commit Transaction
            return response()->json(['status' => '1', 'success' => translate('Sub Admin Account Deleted Successfully.')]);
        } catch (\Exception $e) {
            DB::rollBack(); //Rollback Transaction
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function subadminStatus($id)
    {

        try {
            DB::beginTransaction();
            $data = User::find($id);
            if ($data->is_approved == 1) {
                $data->is_approved = "2";
                $message = translate('Sub Admin Account Suspend Successfully.');
            } else {
                $data->is_approved = "1";
                $message = translate('Sub Admin Account Approved Successfully.');
            }
            $data->update();
            DB::commit(); // Commit Transaction
            return response()->json(['status' => '1', 'success' => $message]);
        } catch (\Exception $e) {
            DB::rollBack(); //Rollback Transaction
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
