<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $primaryKey = 'job_id';
    protected $fillable = ['job_id', 'job_title', 'min_salary', 'max_salary'];

    /**
     * Get the employees for the job.
     */
    public function employees()
    {
        return $this->hasMany(Employee::class, 'job_id', 'job_id');
    }
}