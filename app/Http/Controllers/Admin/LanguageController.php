<?php

namespace App\Http\Controllers\Admin;


use DataTables;
use File;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateLanguageRequest;
use App\Http\Requests\Admin\UpdateLanguageRequest;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        //
        if ($request->ajax()) {
            $data = Language::where('is_delete', 0)->get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = "";
                    $btn = $btn . '<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                      <div class="btn-group" role="group">
                        <button class="btn btn-light dropdown-toggle text-primary" id="btnGroupDrop1" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">';

                    $btn = $btn . '<a class="edit-data dropdown-item"  href="javascript:void(0)" title="' . translate('Edit') . '" data-url="' . route('language.edit', $row->id) . '">' . translate('Edit') . '</a>';
                    $btn = $btn . '<a href="" data-url="' . route('language.destroy', $row->id) . '" class="dropdown-item destroy-data" title="' . translate('Delete') . '">' . translate('Delete') . '</a>';

                    $btn = $btn . '</div>
                      </div>
                    </div>';
                    return $btn;
                })


                ->addColumn('lang_flag_image', function ($data) {
                    if ($row['lang_flag'] = null) {
                        return '<span class="badge badge-soft-success fs-12">no image</span>';
                    } else {
                        return '<img src=' . URL::to('/public') . '/lang_flag/' . $data->lang_flag . ' class="img-thumbnail" width="50" height="35"/>';
                    }
                })

                ->addColumn('is_default_custom', function ($data) {
                    if ($data->is_default == 1) {
                        return '<span class="badge bg-success">Yes</span>';
                    } else {
                        return '<span class="badge bg-danger">No</span>';
                    }
                })

                ->addColumn('lang_is_rtl_custom', function ($data) {
                    if ($data->lang_is_rtl == 1) {
                        return '<span class="badge bg-success">Yes</span>';
                    } else {
                        return '<span class="badge bg-danger">No</span>';
                    }
                })



                ->rawColumns(['action', 'lang_flag_image', 'is_default_custom', 'lang_is_rtl_custom'])
                ->make(true);
        }
        return view('Admin.Language.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.Language.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateLanguageRequest $request)
    {

        //
        try {
            $post = $request->all();

            $data = new Language();


            if (@$post['is_default'] == 1) {
                Language::where('is_default', 1)->update(['is_default' => 0]);
            }

            if ($request->hasFile('lang_flag')) {

                $source = $_FILES['lang_flag']['tmp_name'];
                if ($source) {
                    $destinationFolder = public_path('lang_flag'); // Specify the destination folder
                    $image = $request->file('lang_flag');
                    $filename =  time() . '_lang_flag.' . $image->getClientOriginalExtension();
                    if (!file_exists($destinationFolder)) {
                        mkdir($destinationFolder, 0777, true);
                    }
                    $destination = $destinationFolder . '/' . $filename;
                    $lang_flag = compressImage($source, $destination);
                    $data->lang_flag = $filename;
                }
            }
            $data->lang_name = $post['lang_name'];
            $data->lang_code = $post['lang_code'];
            $data->is_default = $post['is_default'] ?? 0;
            $data->lang_is_rtl = $post['lang_is_rtl'] ?? 0;
            $data->save();



            if (!empty($data)) {
                return response()->json(['status' => '1', 'success' => translate('Language Added Successfully.')]);
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
    public function show(string $id)
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
            $data = Language::find($id);
            if (!empty($data)) {
                return view('Admin.Language.edit', compact('data'));
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
    public function update(UpdateLanguageRequest $request, string $id)
    {

        try {
            $data =  Language::find($id);

            if ($request['is_default'] == 1) {
                Language::where('is_default', 1)->update(['is_default' => 0]);
            }




            if ($request->hasFile('lang_flag')) {
                File::delete(public_path('lang_flag/' . $data->lang_flag));
                $image = $request->file('lang_flag');
                $filename = time() . '_lang_flag.' . $image->getClientOriginalExtension();
                // Ensure the directory exists
                $destinationFolder = public_path('lang_flag');
                if (!file_exists($destinationFolder)) {
                    mkdir($destinationFolder, 0777, true);
                }
                // Move the uploaded file
                $image->move($destinationFolder, $filename);
                // Update the database field
                $data->lang_flag = $filename;
            }


            $data->lang_name = $request['lang_name'];
            $data->lang_code = $request['lang_code'];
            $data->is_default = $request['is_default'] ?? 0;
            $data->lang_is_rtl = $request['lang_is_rtl'] ?? 0;
            $data->update();
            if (!empty($data)) {
                return response()->json(['status' => '1', 'success' => translate('Language Update Successfully.')]);
            }
        } catch (Exception $ex) {
            return response()->json(
                ['success' => false, 'message' => $ex->getMessage()]
            );
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
            $data =  Language::find($id);
            if ($data->is_default == 1) {
                return response()->json(['status' => '0', 'success' => translate('Default langugae can not Deleted.')]);
            }
            $data->is_delete = 1;
            $data->update();
            DB::commit(); // Commit Transaction
            return response()->json(['status' => '1', 'success' => translate('Language Deleted Successfully.')]);
        } catch (\Exception $e) {
            DB::rollBack(); //Rollback Transaction
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
