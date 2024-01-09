<?php

namespace App\Repositories\Admin;


use App\Models\LeadStages;
use Illuminate\Support\Facades\Log;

class LeadStageRepository
{

    function all(): Object
    {
        return LeadStages::get();
    }


    public function store()
    {
        try {
            $input = request()->only([
                'title', 'color'
            ]);

            $input['user_id'] = auth()->user()->id;
            $obj = LeadStages::create($input);
            if (request()->ajax()) {
                $output = [
                    'success' => true,
                    'data' => $obj,
                    'path' => '/LeadStages',
                    'msg' => "LeadStages Added Successfully"
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

    public function delete($id)
    {

        try {
            $obj = LeadStages::findOrFail($id);

            $obj->delete();

            $output = [
                'success' => true,
                'msg' => 'leadstage Deleted Successfully'
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


    public function update(LeadStages $leadstage)
    {
        try {
            $input = request()->all();



            $leadstage->update($input);

            if (request()->ajax()) {
                $output = [
                    'success' => true,
                    'data' => '',
                    'path' => '/LeadStages',
                    'msg' => 'Category Update Successully'
                ];
            } else {
                $output = redirect()->back()->with(['msg' => 'Category Update Successully', 'success' => true]);
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
