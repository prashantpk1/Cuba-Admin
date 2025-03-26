<?php
namespace App\Http\Controllers\Admin;


use DataTables;
use App\Models\User;
use App\Models\Module;
use App\Models\Countries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ModuleRequest;
use App\Http\Requests\Admin\CountryRequest;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        if ($request->ajax()) {
            $data = Module::get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn ="";
                    $btn = $btn . '<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                      <div class="btn-group" role="group">
                        <button class="btn btn-light dropdown-toggle text-primary" id="btnGroupDrop1" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">';

                            $btn = $btn . '<a class="edit-data dropdown-item"  href="javascript:void(0)" title="' . translate('Edit') . '" data-url="'.route('module.edit', $row->id).'">' . translate('Edit') . '</a>';
                            $btn = $btn . '<a href="" data-url="' . route('module.destroy', $row->id) . '" class="dropdown-item destroy-data" title="' . translate('Delete') . '">' . translate('Delete') . '</a>';

                            $btn = $btn . '</div>
                      </div>
                    </div>';
                   return $btn;
                })

                ->addColumn('status', function ($row) {
                    if ($row->status == 1) {
                        return '<span class="badge bg-success">' . translate('Active') . '</span>';
                    } else {
                        return '<span class="badge bg-danger">' . translate('Inactive') . '</span>';
                    }
                })


                ->rawColumns(['action','status'])
                ->make(true);
        }
        return view('Admin.Modules.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.Modules.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ModuleRequest $request)
    {
        //
        try {
            $post = $request->all();
            $data = new Module();
            $data->name = $request->name;
            $data->save();
            if (!empty($data)) {
                return response()->json(['status' => '1', 'success' => translate('Module Added Successfully.')]);
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
            $data = Module::find($id);
            if (!empty($data)) {
                return view('Admin.Modules.edit', compact('data'));
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
    public function update(ModuleRequest $request, string $id)
    {
        try {
            $data =  module::find($id);
            $data->name = $request->name;
            $data->save();
            if (!empty($data)) {
            return response()->json(['status' => '1', 'success' => translate('Module Update Successfully.')]);
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
            $data =  module::find($id);
            $data->delete();
            DB::commit(); // Commit Transaction
            return response()->json(['status' => '1', 'success' => translate('Module Deleted Successfully.')]);
        } catch (\Exception $e) {
            DB::rollBack(); //Rollback Transaction
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

}
