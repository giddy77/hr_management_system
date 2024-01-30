@extends('layouts.layout')
@section('content')
@php
    $i = 0;
@endphp
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a class="btn btn-primary" href="{{ route('users.create') }}"><i class="fa fa-plus"></i>Add new</a></li>
                            {{-- <li><a href="#">Table</a></li>
                            <li class="active">Data table</li> --}}
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <strong class="card-title">Employees</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Staff_code</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Department</th>
                                    <th>emp_status</th>
                                    <th>Salary</th>

                                    <th>payment status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user )

                                <tr>

                                    <td>{{ $user->staff_no }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $positions[$i++ ] ?? 'manager' }}</td>
                                    <td>{{ $departments[$i++ ] ?? 'admin' }}</td>
                                    <td>
                                        @if ($user->emp_status == 'Inactive')
                                        <button class="btn btn-danger btn-sm rounded">{{ $user->emp_status }}</button>
                                        @elseif ($user->emp_status == 'Active')
                                        <button class="btn btn-success btn-sm rounded">{{ $user->emp_status }}</button>
                                        @else
                                        <button class="btn btn-warning btn-sm rounded">{{ $user->emp_status }}</button>
                                        @endif
                                        <!-- Content inside the table cell -->
                                    </td>
                                    <td>ksh {{ $user->salary_id ?? '400,000' }}</td>
                                    <td>
                                        @if ($user->status =='1')
                                        <button class="btn btn-success btn-sm rounded">paid</button>
                                        @else
                                        <button class="btn btn-danger btn-sm rounded">unpaid</button>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection
