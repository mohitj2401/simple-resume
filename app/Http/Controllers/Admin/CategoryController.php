<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Center;
use App\Models\Country;
use App\Models\State;
use App\Repositories\Admin\CategoryRepository;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Html\Button;

class CategoryController extends Controller
{
    private $repository;

    function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (request()->ajax()) {
            return DataTables::of($this->repository->all())


                ->addColumn('action', function ($row) {
                    $action = '';
                    $action = '<button data-href="' . action('App\Http\Controllers\Admin\CategoryController@edit', [$row->id]) . '" class="btn btn-sm btn-primary btn-modal"  data-container="#ajax_modal"><i class="glyphicon glyphicon-edit"></i>' . __("Edit") . '</button>&nbsp;';
                    if ($row->system_default == "no")
                        $action = $action .  '<button data-href="' . action('App\Http\Controllers\Admin\CategoryController@destroy', [$row->id]) . '" class="btn btn-sm btn-danger delete_button" ><i class="glyphicon glyphicon-trash"></i>' . __("Delete") . '</button>';
                    return $action;
                })


                ->rawColumns(['action'])
                ->make(true);
        }
        $data['page'] = "Category";
        $data['active'] = "cate";
        return  view('admin.categories.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = 'Add Category';
        return  view('admin.categories.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|unique:categories,name',




        ]);
        return  $this->repository->store();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $title = 'Edit Category';
        return view('admin.categories.edit', compact('category', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([

            'name' => 'required|unique:categories,name,' . $category->id,

            'system_default' => 'required',
            'visibility' => 'required',
            'type' => 'required',


        ]);
        return  $this->repository->update($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return  $this->repository->delete($id);
    }
}
