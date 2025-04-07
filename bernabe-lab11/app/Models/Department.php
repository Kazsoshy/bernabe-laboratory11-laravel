<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $primaryKey = 'department_id';
    protected $fillable = ['department_id', 'department_name', 'location_id'];

    /**
     * Get the location that owns the department.
     */
    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id', 'location_id');
    }

    /**
     * Get the employees for the department.
     */
    public function employees()
    {
        return $this->hasMany(Employee::class, 'department_id', 'department_id');
    }
}