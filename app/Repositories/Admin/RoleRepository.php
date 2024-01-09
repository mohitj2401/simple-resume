<?php

namespace App\Repositories\Admin;


use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Role;

class RoleRepository
{

    function all(): Object
    {
        return Role::get();
    }


    public function store()
    {
        try {
            $input = request()->only([
                'name',
            ]);



            $package = Role::create($input);
            $package->syncPermissions(request()->permissions);
            if (request()->ajax()) {
                $output = [
                    'success' => true,
                    'data' => $package,
                    'path' => '/categories',
                    'msg' => "Category Added Successfully"
                ];
            } else {
                $output = redirect()->back();
            }
        } catch (\Exception $e) {
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            $output = [
                'success' => false,
                'msg' => "Something went Wrong"
            ];
        }
        return $output;
    }

    public function delete(Role $role)
    {

        try {


            $role->delete();

            $output = [
                'success' => true,
                'msg' => 'Role Deleted Successfully'
            ];
        } catch (\Exception $e) {
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());

            $output = [
                'success' => false,
                'msg' => 'Something went Wrong'
            ];
        }
        return $output;
    }


    public function update(Role $role)
    {
        try {
            $input = request()->all();



            $role->update($input);
            $role->syncPermissions(request()->permissions);
            if (request()->ajax()) {
                $output = [
                    'success' => true,
                    'data' => '',
                    'path' => '/categories',
                    'msg' => 'Role Update Successully'
                ];
            } else {
                $output = redirect()->back()->with(['msg' => 'Role Update Successully', 'success' => true]);
            }
        } catch (\Exception $e) {
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            $output = [
                'success' => false,
                'msg' => 'Something Went Wrong.'
            ];
        }
        return $output;
    }
}
