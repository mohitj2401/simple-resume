<?php

namespace App\Repositories\Admin;

use App\Models\Experience;


use Illuminate\Support\Facades\Log;


class ExperienceRepository
{

    function all(): Object
    {
        return Experience::where('user_id', auth()->user()->id)->orderBy('start_date', 'desc')->get();
    }


    public function store()
    {
        try {
            $input = request()->only([
                'company_name', 'job_title', 'start_date', 'is_present', 'end_date', 'company_add', 'company_desc', 'experience_detail'
            ]);

            $input['description'] = $input['experience_detail'];
            $input['user_id'] = auth()->user()->id;
            $package = Experience::create($input);

            if (request()->ajax()) {
                $output = [
                    'success' => true,
                    'data' => $package,
                    'path' => '/experiences',
                    'msg' => "Experience Added Successfully"
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

    public function delete(Experience $experience)
    {

        try {


            $experience->delete();

            $output = [
                'success' => true,
                'msg' => 'Experience Deleted Successfully'
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


    public function update(Experience $experience)
    {
        try {
            $input = request()->only([
                'company_name', 'job_title', 'start_date', 'is_present', 'end_date', 'company_add', 'company_desc', 'experience_detail'
            ]);


            $input['description'] = $input['experience_detail'];

            $input['user_id'] = auth()->user()->id;
            $experience->update($input);

            if (request()->ajax()) {
                $output = [
                    'success' => true,
                    'data' => '',
                    'path' => '/experiences',
                    'msg' => 'Experience Update Successully'
                ];
            } else {
                $output = redirect()->back()->with(['msg' => 'Experience Update Successully', 'success' => true]);
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
