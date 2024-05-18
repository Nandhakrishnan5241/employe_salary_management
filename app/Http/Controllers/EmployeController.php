<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view("manage", compact("employees"));
    }
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view("edit", compact("employee"));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $name               = $request->input('name');
        $casual_leave       = $request->input('casual_leave');
        $permission_leave   = $request->input('permission_leave');
        $remain_days        = $request->input('remain_days');
        $total_days         = $request->input('total_days');
        $salary             = $request->input('salary');
        $adjust_salary      = $request->input('adjust_salary');
        $loss_of_pay        = $request->input('loss_of_pay');
        $previous_lop       = $loss_of_pay;

        $casual_leave_limit     = 2;
        $permission_leave_limit = 2;
        

        if ($casual_leave > $casual_leave_limit && $employee->casual_leave != $casual_leave) {            
            $loss_of_pay = ($casual_leave - $casual_leave_limit) * ($salary / $total_days);
            $loss_of_pay = $loss_of_pay + $previous_lop;
        }

        if ($permission_leave > $permission_leave_limit && $employee->permission_leave != $permission_leave) {
           
            $loss_of_pay = ($permission_leave - $permission_leave_limit) * ($salary / $total_days);
            $loss_of_pay = $loss_of_pay + $previous_lop;
        }

       
        $remain_days     = $total_days - ($casual_leave + $permission_leave);
        $adjusted_salary = $salary - $loss_of_pay;


        $employee->name             = $name;
        $employee->casual_leave     = $casual_leave;
        $employee->permission_leave = $permission_leave;
        $employee->remain_days      = $remain_days;
        $employee->total_days       = $total_days;
        $employee->salary           = $salary;
        $employee->adjust_salary    = $adjusted_salary;
        $employee->loss_of_pay      = $loss_of_pay;



        $employee->save();
        return redirect('/');

    }
}
