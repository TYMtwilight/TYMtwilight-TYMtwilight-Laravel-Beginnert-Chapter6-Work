<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkingReportsController extends Controller
{
    public function index()
    {
        $working_reports = DB::table('working_reports')->get();
        return view('working_reports.index', ['working_reports' => $working_reports ]);
    }

    public function create()
    {
        return view('working_reports.create');
    }

    public function store(Request $request)
    {
        $rule = [
            'employee_id' =>  'required|number'
        ];
        $request -> validate($rule);
        $employee_id = $request -> input('employee_id');
        return view('working_reports.store');
    }
}
