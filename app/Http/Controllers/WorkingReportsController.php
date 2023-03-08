<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateRequest;

class WorkingReportsController extends Controller
{
    public function index()
    {
        $working_reports = DB::table('working_reports')->orderBy('employee_id', 'desc')->get();
        return view('work_reports.index', ['working_reports' => $working_reports ]);
    }

    public function create()
    {
        return view('work_reports.create');
    }

    public function store(CreateRequest $request)
    {
        DB::table('working_reports')->insert([
            'employee_id'=>$request -> input('employee_id'),
            'working_date'=>$request -> input('working_date'),
            'working_hours'=>$request -> input('working_hours'),
            'summary'=>$request -> input('summary')
        ]);

        return view('work_reports.store');
    }
}
