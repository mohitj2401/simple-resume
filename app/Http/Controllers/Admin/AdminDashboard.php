<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminDashboard extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            return DataTables::of(Resume::where('user_id', auth()->user()->id)->get())


                ->addColumn('action', function ($row) {
                    $action = '';

                    $action = $action .  '<a href="' . action('App\Http\Controllers\Admin\ResumeController@download', [$row->id]) . '" class="btn btn-sm btn-secondary"  data-container="#ajax_modal"><i class="fa fa-download"></i></a>&nbsp; &nbsp;';

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
        $data['page'] = "Dashboard";
        return view('admin.dashboard.dashboard', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
