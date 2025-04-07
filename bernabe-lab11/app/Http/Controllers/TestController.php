<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Country;
use App\Models\Employee;

class TestController extends Controller
{
    public function test()
    {
        // Example: Get all regions with their countries
        $regions = Region::with('countries')->get();
        
        // Example: Get an employee with their job, department, and manager
        $employee = Employee::with('job', 'department', 'manager')->find(1);
        
        // Example: Get all employees managed by a specific manager
        $manager = Employee::find(1);
        $subordinates = $manager->subordinates;
        
        return [
            'regions' => $regions,
            'employee' => $employee,
            'subordinates' => $subordinates
        ];
    }
}