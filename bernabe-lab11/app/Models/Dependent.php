<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{
    protected $primaryKey = 'dependent_id';
    protected $fillable = [
        'dependent_id', 'first_name', 'last_name', 'relationship', 'employee_id'
    ];

    /**
     * Get the employee that has the dependent.
     */
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
    }
}