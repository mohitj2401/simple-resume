<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

use App\Repositories\Admin\ProjectRepository;
use Yajra\DataTables\Facades\DataTables;


class ProjectController extends Controller
{
    private $repository;

    function __construct(ProjectRepository $repository)
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
                    $action = '<button data-href="' . action('App\Http\Controllers\Admin\ProjectController@edit', [$row->id]) . '" class="btn btn-sm btn-primary btn-modal"  data-container="#ajax_modal"><i class="glyphicon glyphicon-edit"></i>' . __("Edit") . '</button>&nbsp;';

                    $action = $action .  '<button data-href="' . action('App\Http\Controllers\Admin\ProjectController@destroy', [$row->id]) . '" class="btn btn-sm btn-danger delete_button" ><i class="glyphicon glyphicon-trash"></i>' . __("Delete") . '</button>';
                    return $action;
                })
                ->editColumn('name', function ($row) {
                    return $row->title;
                })
                ->editColumn('type', function ($row) {
                    return $row->type === 1 ? "Professional" : "Personal";
                })
                ->editColumn('pointers', function ($row) {
                    if (is_null($row->pointers)) {
                        return '';
                    }
                    $data = '<ul>';
                    foreach (json_decode($row->pointers) as $value) {
                        $data = $data . '<li>' . $value . '</li>';
                    }
                    return $data . '</ul>';
                })
                ->rawColumns(['action', 'pointers'])
                ->make(true);
        }
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $data['page'] = "Projects";
        $data['title'] = "Projects";
        $data['pageTitle'] = "Projects";

        return  view('admin.project.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $data['title'] = 'Add Project';
        $data['skills'] = Skill::get()->pluck('name', 'id');
        $data['selected'] = null;
        return  view('admin.project.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $request->validate([

            'title' => 'required|unique:projects,title',

            'skills.*' => 'required|exists:skills,id',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',

        ]);
        return  $this->repository->store();
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $data['title'] = $project->name;
        $data['project'] = $project;


        return view('admin.project.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $data['title'] = 'Edit Project';
        $data['project'] = $project;
        $data['skills'] = Skill::get()->pluck('name', 'id');
        $data['selected'] = json_decode($project->skill_used);

        return view('admin.project.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $request->validate([

            'title' => 'required',

            'skills.*' => 'required|exists:skills,id',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',

        ]);
        return  $this->repository->update($project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        return  $this->repository->delete($project);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function pointers()
    {
        $count = request()->count;
        $html = view('admin.project.pointers', compact('count'))->render();
        return [
            "success" => true,
            "html" => $html
        ];
    }
}
