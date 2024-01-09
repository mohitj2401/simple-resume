<?php

namespace App\Repositories\Admin;

use App\Models\Category;
use Illuminate\Support\Facades\Log;

class CategoryRepository
{

    function all(): Object
    {
        return Category::get();
    }


    public function store()
    {
        try {
            $input = request()->only([
                'name', 'description',
            ]);



            $package = Category::create($input);
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

    public function delete($id)
    {

        try {
            $category = Category::findOrFail($id);

            $category->delete();

            $output = [
                'success' => true,
                'msg' => 'Category Deleted Successfully'
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


    public function update(Category $category)
    {
        try {
            $input = request()->all();



            $category->update($input);
            if (request()->ajax()) {
                $output = [
                    'success' => true,
                    'data' => '',
                    'path' => '/categories',
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
