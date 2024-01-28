@extends('layouts.layout')
@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header text-center">
                    <div class="page-title">
                        <h2>{{ $department->manager->name }}</h2>
                        <h1>Dep Manager</h1>
                    </div>
                </div>
            </div>
            {{-- <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a class="btn btn-primary" href="{{ route('departments.create') }}"><i class="fa fa-plus"></i>Add new</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <strong class="card-title">{{ $department->name }}'s staff</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>staff_no</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Emp_status</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee )
                                <tr>
                                    <td>{{ $employee->staff_no }}</td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>
                                        @if ($employee->emp_status == 'Inactive')
                                        <button class="btn btn-danger btn-sm">{{ $employee->emp_status }}</button>
                                        @else
                                        <button class="btn btn-success btn-sm">{{ $employee->emp_status }}</button>
                                        @endif
                                        <!-- Content inside the table cell -->
                                    </td>
                                    {{-- <td><a class="btn btn-warning btn-sm" href="{{ route('departments.show',$department) }}"><i class="fa fa-eye"></i> View</a></td> --}}
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
