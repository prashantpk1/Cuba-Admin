<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        if ($request->ajax()) {
            $data = Role::get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = "";
                    $btn = $btn . '
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                      <div class="btn-group" role="group">
                        <button class="btn btn-light dropdown-toggle text-primary" id="btnGroupDrop1" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">';

                    $btn = $btn . '<a class="edit-data dropdown-item"  href="' . route('role.edit', $row->id) . '" title="' . translate('Edit') . '">' . translate('Edit') . '</a>';
                    $btn = $btn . '<a href="" data-url="' . route('role.destroy', $row->id) . '" class="dropdown-item destroy-data" title="' . translate('Delete') . '">' . translate('Delete') . '</a>';
                    $btn = $btn . '</div>
                      </div>
                    </div>';
                    return $btn;
                })

                ->rawColumns(['action'])
                ->make(true);
        }
        return view('Admin.Roles.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.Roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   
    public function store(Request $request)
    {

        // Validate input
        $request->validate([
            'name' => 'required|string|unique:roles,name',
            'permission' => 'required|array', // Ensure permission is an array
            'permission.*' => 'exists:permissions,name' // Ensure each permission exists
        ]);

        // Create the role
        $role = Role::create([
            'name' => $request->input('name'),
            'guard_name' => 'web'
        ]);

        // Assign permissions
        if ($role) {
            $role->syncPermissions($request->input('permission'));
            return redirect()->route('role.index')->with('success', translate('Role Added Successfully.'));
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

        $role = Role::find($id);
        $permission_group = Permission::get()->groupBy('section');
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();

        return view('Admin.Roles.edit', compact('role', 'permission_group', 'rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|unique:roles,name,' . $id, // Ensure name is unique except for the current role
            'permission' => 'required|array',
            'permission.*' => 'exists:permissions,name' // Ensure each permission exists
        ]);
    
        // Find the role
        $role = Role::find($id);
    
        if (!$role) {
            return response()->json(['status' => '0', 'error' => translate('Role not found.')], 404);
        }
    
        // Update role name
        $role->update([
            'name' => $request->input('name')
        ]);
    
        // Sync permissions
        $role->syncPermissions($request->input('permission'));
    
        return redirect()->route('role.index')->with('success', translate('Role Updated Successfully.'));

    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try {
            DB::beginTransaction();
            DB::table("roles")->where('id', $id)->delete();
            DB::commit(); // Commit Transaction
            return response()->json(['status' => '1', 'success' => translate('Role Deleted Successfully.')]);
        } catch (\Exception $e) {
            DB::rollBack(); //Rollback Transaction
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
