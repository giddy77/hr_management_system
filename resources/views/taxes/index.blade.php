@extends('layouts.layout')
@section('content')

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
                        <strong class="card-title">Taxes</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Type</th>
                                    <th>Frequency</th>
                                    <th>Payer</th>
                                    <th>Rate</th>
                                    <th>start Date</th>
                                    <th>End Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($taxes as $tax )
                                <tr>
                                    <td>{{ $tax->id }}</td>
                                    <td>{{ $tax->type }}</td>
                                    <td>{{ $tax->frequenzy }}</td>
                                    <td>{{ $tax->payer }}</td>
                                    <td>{{ $tax->rate }}</td>
                                    <td>{{ $tax->start_date }}</td>
                                    <td>{{ $tax->end_date }}</td>
                                    <td>
                                        <a href="{{ route('taxes.edit',$tax) }}"><i class="fa fa-pencil btn btn-warning" ></i></a>
                                        <a href="{{ route('taxes.destroy',$tax) }}"><i class="fa fa-trash btn btn-danger"></i></a>
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
