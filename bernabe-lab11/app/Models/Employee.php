<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $primaryKey = 'employee_id';
    protected $fillable = [
        'employee_id', 'first_name', 'last_name', 'email', 'phone_number',
        'hire_date', 'job_id', 'salary', 'manager_id', 'department_id'
    ];

    /**
     * Get the job that the employee has.
     */
    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id', 'job_id');
    }

    /**
     * Get the department that the employee belongs to.
     */
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'department_id');
    }

    /**
     * Get the manager of the employee.
     */
    public function manager()
    {
        return $this->belongsTo(Employee::class, 'manager_id', 'employee_id');
    }

    /**
     * Get the employees managed by this employee.
     */
    public function subordinates()
    {
        return $this->hasMany(Employee::class, 'manager_id', 'employee_id');
    }

    /**
     * Get the dependents for the employee.
     */
    public function dependents()
    {
        return $this->hasMany(Dependent::class, 'employee_id', 'employee_id');
    }
}