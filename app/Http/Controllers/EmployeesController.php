<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use App\Models\WorkingReport;

class EmployeesController extends Controller
{
    public function index()
    {
        // $employees = DB::table('employees')->get();
        $employees = Employee::all();

        return view('employees.index', ['employees'=>$employees]);
    }
    public function detail($id)
    {
        $employee = Employee::find($id);
        $work_reports = WorkingReport::where('employee_id', $id)->get();
        return view('employees.detail', ['employee'=>$employee,'work_reports'=>$work_reports]);
    }
}
