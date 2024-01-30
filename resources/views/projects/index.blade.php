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
                            <li><a class="btn btn-primary" href="{{ route('trainings.create') }}"><i class="fa fa-plus"></i>Add new</a></li>
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
                        <strong class="card-title">Trainings</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Duration</th>
                                    <th>Department</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project )

                                <tr>

                                    <td>{{ $project->name }}</td>
                                    <td>{{ $project->start }}</td>
                                    <td>{{ $project->end }}</td>
                                    <td>{{ $project->duration }}</td>
                                    <td>{{ $project->department->name }}</td>
                                    <td>
                                        <a href="" class="fa fa-pencil mx-2" style="color: rgb(38, 104, 219)"></a>

                                        <a href="" class="fa fa-trash" style="color: red"></a>
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
