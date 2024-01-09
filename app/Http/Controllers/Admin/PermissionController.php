<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\PermissionRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Permission;
use Yajra\DataTables\Facades\DataTables;


class PermissionController extends Controller
{
    private $repository;

    function __construct(PermissionRepository $repository)
    {
        $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (!checkPermission('Role Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        if (request()->ajax()) {
            return DataTables::of($this->repository->all())


                ->addColumn('action', function ($row) {
                    $action = '';
                    $action = '<button data-href="' . action('App\Http\Controllers\Admin\PermissionController@edit', [$row->id]) . '" class="btn btn-sm btn-primary btn-modal"  data-container="#ajax_modal"><i class="glyphicon glyphicon-edit"></i>' . __("Edit") . '</button>&nbsp;';

                    $action = $action .  '<button data-href="' . action('App\Http\Controllers\Admin\PermissionController@destroy', [$row->id]) . '" class="btn btn-sm btn-danger delete_button" ><i class="glyphicon glyphicon-trash"></i>' . __("Delete") . '</button>';
                    return $action;
                })


                ->rawColumns(['action'])
                ->make(true);
        }
        $data['page'] = "Permission";

        return  view('admin.permission.index', $data);
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
        $data['title'] = 'Add Permission';
        return  view('admin.permission.create', $data);
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

            'name' => 'required|unique:permissions,name',




        ]);
        return  $this->repository->store();
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
    public function edit(Permission $permission)
    {
        if (!checkPermission('Role Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $title = 'Edit Permission';
        return view('admin.permission.edit', compact('permission', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        if (!checkPermission('Role Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $request->validate([

            'name' => 'required|unique:permissions,name,' . $permission->id,




        ]);
        return  $this->repository->update($permission);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        if (!checkPermission('Role Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        return  $this->repository->delete($permission);
    }
}
