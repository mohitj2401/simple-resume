<?php

namespace App\Repositories\Admin;

use App\Models\Education;


use Illuminate\Support\Facades\Log;


class EducationRepository
{

    function all(): Object
    {
        return Education::get();
    }


    public function store()
    {
        try {
            $input = request()->only([
                'education_name', 'institute_name', 'start_date', 'is_present', 'percentage',  'description', 'end_date'
            ]);


            $package = Education::create($input);

            if (request()->ajax()) {
                $output = [
                    'success' => true,
                    'data' => $package,
                    'path' => '/education',
                    'msg' => "Education Added Successfully"
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

    public function delete(Education $education)
    {

        try {


            $education->delete();

            $output = [
                'success' => true,
                'msg' => 'Education Deleted Successfully'
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


    public function update(Education $education)
    {
        try {
            $input = request()->only([
                'education_name', 'institute_name', 'start_date', 'is_present', 'percentage',  'description', 'end_date'
            ]);




            $education->update($input);

            if (request()->ajax()) {
                $output = [
                    'success' => true,
                    'data' => '',
                    'path' => '/education',
                    'msg' => 'Education Update Successully'
                ];
            } else {
                $output = redirect()->back()->with(['msg' => 'Education Update Successully', 'success' => true]);
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
