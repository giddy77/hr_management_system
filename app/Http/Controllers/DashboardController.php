<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Job;
use App\Models\TrainingProgram;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public static function counts()
    {
        $employees = User::all()->count();
        $trainings = TrainingProgram::all()->count();
        $departments = Department::all()->count();
        $jobs = Job::all()->count();
        return [$employees, $trainings, $departments, $jobs];
    }
}
