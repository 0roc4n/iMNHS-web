<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminStudentController extends Controller
{
    public function index()
    {
        $students = Student::get();
        return Inertia::render('Admin/Students', [
            'students' => $students,

        ]);
    }
}
