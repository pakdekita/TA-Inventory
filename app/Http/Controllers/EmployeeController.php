<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::all();
        return view('HR_Apps.kepegawaian.tableEmployeeData', compact('employee'));
    }

    public function create()
    {
        return view('HR_Apps.kepegawaian.createEmployee');
    }

    public function store(Request $request)
    {
        $employee = Employee::create($request->all());
        if ($request->hasFile('employee_image')) {
            $request->file('employee_image')->move('employeeImage.', $request->file('employee_image')->getClientOriginalName());
            $employee->employee_image = $request->file('employee_image')->getClientOriginalName();
            $employee->save();
        }
        return redirect('employee')->with('success', 'Data Berhasil di Tambahkan!');
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('kepegawaian.employee', ['employee' => $employee]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
