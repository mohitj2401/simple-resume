<?php

namespace App\Repositories\Admin;

use App\Models\Resume;

use Illuminate\Support\Facades\Log;


class ResumeRepository
{

    function all(): Object
    {
        return Resume::get();
    }


    public function store()
    {
        try {
            $input = request()->only([
                'title',
            ]);


            $input['user_id'] = auth()->user()->id;
            $input['skill_ids'] = json_encode(request()->skills);
            $input['education_ids'] = json_encode(request()->educations);
            $input['experience_ids'] = json_encode(request()->experiences);
            $input['project_ids'] = json_encode(request()->projects);

            $package = Resume::create($input);

            if (request()->ajax()) {
                $output = [
                    'success' => true,
                    'data' => $package,
                    'path' => '/resume',
                    'msg' => "Resume Added Successfully"
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

    public function delete(Resume $resume)
    {

        try {



            $resume->delete();

            $output = [
                'success' => true,
                'msg' => 'Resume Deleted Successfully'
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


    public function update(Resume $resume)
    {
        try {
            $input = request()->only([
                'title',
            ]);


            $input['user_id'] = auth()->user()->id;
            $input['skill_ids'] = json_encode(request()->skills);
            $input['education_ids'] = json_encode(request()->educations);
            $input['experience_ids'] = json_encode(request()->experiences);
            $input['project_ids'] = json_encode(request()->projects);

            $resume->update($input);

            if (request()->ajax()) {
                $output = [
                    'success' => true,
                    'data' => '',
                    'path' => '/resume',
                    'msg' => 'Resume Update Successully'
                ];
            } else {
                $output = redirect()->back()->with(['msg' => 'Resume Update Successully', 'success' => true]);
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
