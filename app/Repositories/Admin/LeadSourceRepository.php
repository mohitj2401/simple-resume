<?php

namespace App\Repositories\Admin;

use App\Models\Category;
use App\Models\LeadSources;
use Illuminate\Support\Facades\Log;

class LeadSourceRepository
{

    function all(): Object
    {
        return LeadSources::get();
    }


    public function store()
    {
        try {
            $input = request()->only([
                'title'
            ]);


            $obj = LeadSources::create($input);
            if (request()->ajax()) {
                $output = [
                    'success' => true,
                    'data' => $obj,
                    'path' => '/leadsources',
                    'msg' => "Leadsources Added Successfully"
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
            $obj = LeadSources::findOrFail($id);

            $obj->delete();

            $output = [
                'success' => true,
                'msg' => 'LeadSource Deleted Successfully'
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


    public function update(LeadSources $leadsource)
    {
        try {
            $input = request()->all();



            $leadsource->update($input);

            if (request()->ajax()) {
                $output = [
                    'success' => true,
                    'data' => '',
                    'path' => '/leadsources',
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
