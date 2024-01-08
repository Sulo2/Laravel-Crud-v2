<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        "firstname",
        "lastname",
        "email",
    ];

    public function saveEmployee($employees) {
        return $this->create($employees);
    }

    public function getEmployeeList() {
        return $this->all();
    }

    public function deleteEmployee($id) {
        $employee = $this->find($id);
        $employee->delete(); 
    }
    
    public function getEmployee($id) {
        return $this->find($id);   
    }
    
    public function saveUpdatedEmployee($data, $id) {
        $employee = $this->find($id);
        $employee->update($data);
    }

}
