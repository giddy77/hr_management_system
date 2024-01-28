<?php

namespace App\Http\Controllers;

use App\Models\PayRoll;
use Illuminate\Http\Request;

class PayRollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pay_stubs = PayRoll::latest()->get();
        return view("payinfo.index", compact("pay_stubs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PayRoll $payRoll)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PayRoll $payRoll)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PayRoll $payRoll)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PayRoll $payRoll)
    {
        //
    }
}
