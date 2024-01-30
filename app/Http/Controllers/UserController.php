<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->paginate(15);
        $departments = ['Devops', 'sales','management','human resource'];
        $positions = ['junior software dev', 'senior software engineer', 'admin'];
        return view('employees.index', compact("users","departments", "positions"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();
        $jobs = Job::all();
        return view('employees.create',compact("departments", "jobs"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $validate = $request->validate([
            'name'=>'required',
            // 'email'=>'required|email|unique:users,email',
            'phone'=>'required',
            'alt_phone'=>'required',
            'staff_no'=>'required',
            'age'=>'required',
            // 'department'=>'required',
            // 'job'=>'required',
            'password'=>'required',
            'image'=>'required|mimes:png,jpeg'
        ]);

        return $request;

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = $file->getClientOriginalName(). $file->getClientOriginalExtension().now();
            $file->move(public_path('images'), $file);
        }

        return $image_name;
        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'alt_phone'=>$request->alt_phone,
            'date_joined'=>$request->date_joined,
            'address'=>$request->address,
            'staff_no'=>$request->staff_no,
            'emp_status'=>'Active', //default
            'nationality'=> 'Kenyan',
            'status'=>'Active',
            'role'=>3,
            'manager_id'=>1,
            'review_id'=>1,
            'photo'=> $image_name,
            'age'=>$request->age,
            'gender'=>$request->gender,
            'department_id'=>1,//$request->department,
            'position_id'=>1,//$request->position,
            'job_id'=>1,//$request->job,
            'email_verified_at'=>now(),
            'password'=>$request->password
        ]);

        return redirect()->route('users.index')->with('success','Employee added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
