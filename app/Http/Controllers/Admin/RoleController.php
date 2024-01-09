<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\RoleRepository;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;


class RoleController extends Controller
{
    private $repository;

    function __construct(RoleRepository $repository)
    {
        $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (request()->ajax()) {
            return DataTables::of($this->repository->all())


                ->addColumn('action', function ($row) {
                    $action = '';
                    $action = '<button data-href="' . action('App\Http\Controllers\Admin\RoleController@edit', [$row->id]) . '" class="btn btn-sm btn-primary btn-modal"  data-container="#ajax_modal"><i class="glyphicon glyphicon-edit"></i>' . __("Edit") . '</button>&nbsp;';
                    $action = $action . '<button data-href="' . action('App\Http\Controllers\Admin\RoleController@show', [$row->id]) . '" class="btn btn-sm btn-secondary btn-modal"  data-container="#ajax_modal"><i class="glyphicon glyphicon-eye"></i>' . __("View") . '</button>&nbsp;';
                    $action = $action .  '<button data-href="' . action('App\Http\Controllers\Admin\RoleController@destroy', [$row->id]) . '" class="btn btn-sm btn-danger delete_button" ><i class="glyphicon glyphicon-trash"></i>' . __("Delete") . '</button>';
                    return $action;
                })


                ->rawColumns(['action'])
                ->make(true);
        }
        if (!checkPermission('Role Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $data['page'] = "Role";

        return  view('admin.role.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!checkPermission('Role Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $data['title'] = 'Add Role';
        $data['permissions'] = Permission::get()->pluck('name', 'name');
        $data['selected'] = null;
        return  view('admin.role.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!checkPermission('Role Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $request->validate([

            'name' => 'required|unique:roles,name',

            'permissions.*' => 'required|exists:permissions,name'


        ]);
        return  $this->repository->store();
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        if (!checkPermission('Role Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $data['title'] = $role->name;
        $data['role'] = $role;


        return view('admin.role.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        if (!checkPermission('Role Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $data['title'] = 'Edit Role';
        $data['role'] = $role;
        $data['permissions'] = Permission::get()->pluck('name', 'name');
        $data['selected'] = $role->permissions()->get()->pluck('name');

        return view('admin.role.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        if (!checkPermission('Role Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $request->validate([

            'name' => 'required|unique:roles,name,' . $role->id,

            'permissions.*' => 'required|exists:permissions,name'


        ]);
        return  $this->repository->update($role);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        if (!checkPermission('Role Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        return  $this->repository->delete($role);
    }
}
