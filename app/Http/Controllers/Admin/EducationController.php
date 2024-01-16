<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;

use App\Models\Skill;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

use App\Repositories\Admin\EducationRepository;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\Facades\DataTables;


class EducationController extends Controller
{
    private $repository;

    function __construct(EducationRepository $repository)
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
                    $action = '<button data-href="' . action('App\Http\Controllers\Admin\EducationController@edit', [$row->id]) . '" class="btn btn-sm btn-primary btn-modal"  data-container="#ajax_modal"><i class="glyphicon glyphicon-edit"></i>' . __("Edit") . '</button>&nbsp;';

                    $action = $action .  '<button data-href="' . action('App\Http\Controllers\Admin\EducationController@destroy', [$row->id]) . '" class="btn btn-sm btn-danger delete_button" ><i class="glyphicon glyphicon-trash"></i>' . __("Delete") . '</button>';
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
        $data['page'] = "Education";
        $data['title'] = "Education";
        $data['pageTitle'] = "Education";

        return  view('admin.education.index', $data);
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
        $data['title'] = 'Add Education';
        $data['skills'] = Skill::get()->pluck('name', 'id');
        $data['selected'] = null;
        return  view('admin.education.create', $data);
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

            'education_name' => 'required',
            'institute_name' => 'required',
            'start_date' => 'required|date',
            'is_present' => 'required',

        ]);
        return  $this->repository->store();
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $data['title'] = $education->name;
        $data['education'] = $education;


        return view('admin.education.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $data['title'] = 'Edit Education';
        $data['education'] = $education;
        $data['skills'] = Skill::get()->pluck('name', 'id');
        $data['selected'] = json_decode($education->skill_used);

        return view('admin.education.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $request->validate([


            'education_name' => 'required',
            'institute_name' => 'required',
            'start_date' => 'required|date',
            'is_present' => 'required',

        ]);
        return  $this->repository->update($education);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        return  $this->repository->delete($education);
    }
}
