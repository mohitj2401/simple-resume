<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Repositories\Admin\SkillRepository;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use App\Models\Skill;
use Yajra\DataTables\Facades\DataTables;


class SkillController extends Controller
{
    private $repository;

    function __construct(SkillRepository $repository)
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
                    if (auth()->user()->getRoleNames() == "Admin") {
                        $action = '<button data-href="' . action('App\Http\Controllers\Admin\SkillController@edit', [$row->id]) . '" class="btn btn-sm btn-primary btn-modal"  data-container="#ajax_modal"><i class="glyphicon glyphicon-edit"></i>' . __("Edit") . '</button>&nbsp;';

                        $action = $action .  '<button data-href="' . action('App\Http\Controllers\Admin\SkillController@destroy', [$row->id]) . '" class="btn btn-sm btn-danger delete_button" ><i class="glyphicon glyphicon-trash"></i>' . __("Delete") . '</button>';
                        return $action;
                    }
                    return "Not Applicable";
                })

                ->editColumn('type', function ($row) {
                    return $row->type === 1 ? "Framework" : "Language";
                })

                ->rawColumns(['action'])
                ->make(true);
        }
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $data['page'] = "Skills";
        $data['title'] = "Skills";
        $data['pageTitle'] = "Skills";

        return  view('admin.skill.index', $data);
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
        $data['title'] = 'Add Skill';
        $data['permissions'] = Permission::get()->pluck('name', 'name');
        $data['selected'] = null;
        return  view('admin.skill.create', $data);
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

            'name' => 'required|unique:skills,name',

        ]);
        return  $this->repository->store();
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $data['title'] = $skill->name;
        $data['skill'] = $skill;


        return view('admin.skill.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $data['title'] = 'Edit Skill';
        $data['skill'] = $skill;


        return view('admin.skill.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        $request->validate([

            'name' => 'required|unique:skills,name,' . $skill->id,

        ]);
        return  $this->repository->update($skill);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        if (!checkPermission('Resume Management')) {
            toastr()->error('Invailed User Right', 'Oops');
            return redirect()->route('admin.dashboard');
        }
        return  $this->repository->delete($skill);
    }
}
