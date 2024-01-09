<?php

namespace App\Repositories\Admin;

use App\Models\Skill;
use Illuminate\Support\Facades\Log;


class SkillRepository
{

    function all(): Object
    {
        return Skill::get();
    }


    public function store()
    {
        try {
            $input = request()->only([
                'name', 'type', 'status'
            ]);



            $package = Skill::create($input);

            if (request()->ajax()) {
                $output = [
                    'success' => true,
                    'data' => $package,
                    'path' => '/skills',
                    'msg' => "Skill Added Successfully"
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

    public function delete(Skill $skill)
    {

        try {


            $skill->delete();

            $output = [
                'success' => true,
                'msg' => 'Skill Deleted Successfully'
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


    public function update(Skill $skill)
    {
        try {
            $input = request()->all();



            $skill->update($input);

            if (request()->ajax()) {
                $output = [
                    'success' => true,
                    'data' => '',
                    'path' => '/skills',
                    'msg' => 'Skill Update Successully'
                ];
            } else {
                $output = redirect()->back()->with(['msg' => 'Skill Update Successully', 'success' => true]);
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
