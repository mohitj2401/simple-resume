<?php

namespace App\Repositories\Admin;

use App\Models\Center;
use Illuminate\Support\Facades\Log;

class CenterRepository
{

    function all(): Object
    {
        return Center::get();
    }


    public function store()
    {
        try {
            $input = request()->only([
                'name', 'city', 'state', 'country', 'address', 'pincode'
            ]);

            // $input['name_plate'] = uploadImage(request()->name_plate, 'uploads/packages');
            // $input['square_frame'] = uploadImage(request()->square_frame, 'uploads/packages');
            // $input['circle_frame'] = uploadImage(request()->circle_frame, 'uploads/packages');
            // $input['badges'] = uploadImage(request()->badges, 'uploads/packages');
            $package = Center::create($input);
            if (request()->ajax()) {
                $output = [
                    'success' => true,
                    'data' => $package,
                    'path' => '/centers',
                    'msg' => "Update Scuuss"
                ];
            } else {
                $output = redirect()->back();
            }
        } catch (\Exception $e) {
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            $output = [
                'success' => false,
                'msg' => __("messages.something_went_wrong " . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage())
            ];
        }
        return $output;
    }

    public function delete($id)
    {

        try {
            $center = Center::findOrFail($id);
            $center->delete();

            $output = [
                'success' => true,
                'msg' => 'Center Deleted Successfully'
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


    public function update(Center $center)
    {
        try {
            $input = request()->all();
            $center->update($input);
            if (request()->ajax()) {
                $output = [
                    'success' => true,
                    'data' => '',
                    'path' => '/centers',
                    'msg' => 'Center Update Successully'
                ];
            } else {
                $output = redirect()->back()->with(['msg' => 'Center Update Successully', 'success' => true]);
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
