<?php

namespace App\Repositories\Admin;


use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Permission;


class PermissionRepository
{

    function all(): Object
    {
        return Permission::get();
    }


    public function store()
    {
        try {
            $input = request()->only([
                'name', 'description',
            ]);



            $package = Permission::create($input);
            if (request()->ajax()) {

                $output = [
                    'success' => true,
                    'data' => $package,
                    'path' => '/permissions',
                    'msg' => "Permission Added Successfully"
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

    public function delete(Permission $permission)
    {

        try {


            $permission->delete();

            $output = [
                'success' => true,
                'msg' => 'Permission Deleted Successfully'
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


    public function update(Permission $permission)
    {
        try {
            $input = request()->all();



            $permission->update($input);
            if (request()->ajax()) {
                $output = [
                    'success' => true,
                    'data' => '',
                    'path' => '/permissions',
                    'msg' => 'Permission Update Successully'
                ];
            } else {
                $output = redirect()->back()->with(['msg' => 'Permission Update Successully', 'success' => true]);
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
