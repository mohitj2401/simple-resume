<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Skill;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

use App\Repositories\Admin\ExperienceRepository;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\Facades\DataTables;


class ExperienceController extends Controller
{
    private $repository;

    function __construct(ExperienceRepository $repository)
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
                    $action = '<button data-href="' . action('App\Http\Controllers\Admin\ExperienceController@edit', [$row->id]) . '" class="btn btn-sm btn-primary btn-modal"  data-container="#ajax_modal"><i class="glyphicon glyphicon-edit"></i>' . __("Edit") . '</button>&nbsp;';

                    $action = $action .  '<button data-href="' . action('App\Http\Controllers\Admin\ExperienceController@destroy', [$row->id]) . '" class="btn btn-sm btn-danger delete_button" ><i class="glyphicon glyphicon-trash"></i>' . __("Delete") . '</button>';
                    return $action;
                })
                ->editColumn('date', function ($row) {
                    if (is_null($row->end_date)) {
                        return $row->start_date . " - Present";
                    }
                    return $row->start_date . " - " . $row->end_date;
                })

                ->rawColumns(['action'])
                ->make(true);
        }
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $data['page'] = "Experiences";
        $data['title'] = "Experiences";
        $data['pageTitle'] = "Experiences";

        return  view('admin.experience.index', $data);
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
        $data['title'] = 'Add Experience';
        return  view('admin.experience.create', $data);
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

            'company_name' => 'required',
            'job_title' => 'required',
            'start_date' => 'required|date',
            'is_present' => 'required',

        ]);
        return  $this->repository->store();
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $data['title'] = $experience->name;
        $data['experience'] = $experience;


        return view('admin.experience.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $data['title'] = 'Edit Experience';
        $data['experience'] = $experience;


        return view('admin.experience.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $request->validate([

            'company_name' => 'required',
            'job_title' => 'required',
            'start_date' => 'required|date',
            'is_present' => 'required',

        ]);
        return  $this->repository->update($experience);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        return  $this->repository->delete($experience);
    }
}
