<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Resume;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Repositories\Admin\ResumeRepository;
use Barryvdh\DomPDF\Facade\Pdf;
use Yajra\DataTables\Facades\DataTables;


class ResumeController extends Controller
{
    private $repository;

    function __construct(ResumeRepository $repository)
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
                    $action = '<button data-href="' . action('App\Http\Controllers\Admin\ResumeController@edit', [$row->id]) . '" class="btn btn-sm btn-primary btn-modal my-1"  data-container="#ajax_modal"><i class="glyphicon glyphicon-edit"></i>' . __("Edit") . '</button>&nbsp;';
                    $action = $action .  '<a href="' . action('App\Http\Controllers\Admin\ResumeController@download', [$row->id]) . '" class="btn btn-sm btn-secondary  my-1" target="_blank" ><i class="fa fa-download"></i></a>';
                    $action = $action .  '<button data-href="' . action('App\Http\Controllers\Admin\ResumeController@destroy', [$row->id]) . '" class="btn btn-sm btn-danger delete_button" ><i class="glyphicon glyphicon-trash"></i>' . __("Delete") . '</button>';
                    return $action;
                })
                ->editColumn('name', function ($row) {
                    return $row->title;
                })
                ->editColumn('skills', function ($row) {
                    return implode(',', $row->skills()->get()->pluck('name')->toArray());
                })
                ->editColumn('projects', function ($row) {
                    return implode(',', $row->projects()->pluck('title')->toArray());
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $data['page'] = "Resumes";
        $data['title'] = "Resumes";
        $data['pageTitle'] = "Resumes";

        return  view('admin.resume.index', $data);
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
        $data['title'] = 'Add Resume';
        $data['skills'] = Skill::get()->pluck('name', 'id');
        $data['skill_selected'] = null;

        $data['educations'] = Education::where('user_id', auth()->user()->id)->get()->pluck('education_name', 'id');
        $data['education_selected'] = null;

        $data['experiences'] = Experience::where('user_id', auth()->user()->id)->get()->pluck('company_name', 'id');
        $data['experience_selected'] = null;

        $data['projects'] = Project::where('user_id', auth()->user()->id)->get()->pluck('title', 'id');
        $data['project_selected'] = null;

        return  view('admin.resume.create', $data);
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
            'skills' => 'required',
            'skills.*' => 'required|exists:skills,id',
            'projects.*' => 'required|exists:projects,id',
            'experiences.*' => 'required|exists:experiences,id',
            'education.*' => 'required|exists:education,id',
            'show_duration' => "required",


        ]);
        return  $this->repository->store();
    }

    /**
     * Display the specified resource.
     */
    public function show(Resume $resume)
    {
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $data['title'] = $resume->name;
        $data['project'] = $resume;


        return view('admin.resume.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resume $resume)
    {
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $data['title'] = 'Edit Project';
        $data['resume'] = $resume;
        $data['skills'] = Skill::get()->pluck('name', 'id');
        $data['skill_selected'] = json_decode($resume->skill_ids);




        $data['educations'] = Education::where('user_id', auth()->user()->id)->get()->pluck('education_name', 'id');
        $data['education_selected'] =  json_decode($resume->education_ids);

        $data['experiences'] = Experience::where('user_id', auth()->user()->id)->get()->pluck('company_name', 'id');
        $data['experience_selected'] =  json_decode($resume->experience_ids);

        $data['projects'] = Project::where('user_id', auth()->user()->id)->get()->pluck('title', 'id');
        $data['project_selected'] =  json_decode($resume->project_ids);

        return view('admin.resume.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resume $resume)
    {
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $request->validate([

            'title' => 'required|unique:projects,title',

            'skills.*' => 'required|exists:skills,id',
            'projects.*' => 'required|exists:projects,id',
            'experiences.*' => 'required|exists:experiences,id',
            'education.*' => 'required|exists:education,id',


        ]);
        return  $this->repository->update($resume);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resume $resume)
    {
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        return  $this->repository->delete($resume);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function download(Resume $resume)
    {
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        if ($resume->user_id != auth()->user()->id) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $data['resume'] = $resume;
        $pdf = Pdf::loadView('resume', $data);
        return $pdf->stream($resume->title  .  ' resume.pdf');
    }
}
