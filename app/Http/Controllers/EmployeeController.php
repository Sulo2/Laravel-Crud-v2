<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    protected $employee;
    public function __construct() {
        $this->employee = new Employee;
    }
    public function index() {
        $employeeList = Employee::all();
        return view("index", compact("employeeList"));
    }

    public function saveEmployee(Request $request){
        $employee = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
        ];
        $this->employee->saveEmployee($employee);
        return back();
    }

    public function deleteEmployee($id) {
        $this->employee->deleteEmployee($id);
        return back();
    }

    function updateEmployee($id)
    {
        $employee = $this->employee->getEmployee($id);
        // $employee = Employee::all($id);
        return view('update-employee', compact('employee'));
    }

    function saveUpdatedEmployee(Request $request)
    {
        $data = [
            'firstname' => $request->updatefirstname,
            'lastname' => $request->updatelastname,
            'email' => $request->updateemail,
        ];

        $this->employee->saveUpdatedEmployee($data, $request->id);
        return redirect()->route('index');

    }
}
