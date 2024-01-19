<?php

namespace App\Repositories\Admin;

use App\Models\Project;

use Illuminate\Support\Facades\Log;


class ProjectRepository
{

    function all(): Object
    {
        return Project::where('user_id', auth()->user()->id)->get();
    }


    public function store()
    {
        try {
            $input = request()->only([
                'title', 'type', 'description', 'start_date', 'end_date'
            ]);


            $input['skill_used'] = json_encode(request()->skills);
            $input['user_id'] = auth()->user()->id;

            $package = Project::create($input);

            if (request()->ajax()) {
                $output = [
                    'success' => true,
                    'data' => $package,
                    'path' => '/projects',
                    'msg' => "Project Added Successfully"
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

    public function delete(Project $project)
    {

        try {


            $project->delete();

            $output = [
                'success' => true,
                'msg' => 'Project Deleted Successfully'
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


    public function update(Project $project)
    {
        try {
            $input = request()->all();



            $input['skill_used'] = json_encode(request()->skills);
            $input['user_id'] = auth()->user()->id;
            $project->update($input);

            if (request()->ajax()) {
                $output = [
                    'success' => true,
                    'data' => '',
                    'path' => '/projects',
                    'msg' => 'Project Update Successully'
                ];
            } else {
                $output = redirect()->back()->with(['msg' => 'Project Update Successully', 'success' => true]);
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
