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
                        <strong class="card-title">Pay Stubs</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Pay Date</th>
                                    <th>Total Gross Pay</th>
                                    <th>Taxes</th>
                                    <th>Deductions</th>
                                    <th>Net Amount</th>
                                    <th>YTD Net</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pay_stubs as $pay_stub )
                                <tr>
                                    <td><strong>{{ \Carbon\Carbon::parse($pay_stub->created_at)->format('Y-M-jS') }}</strong></td>
                                    <td>${{ $pay_stub->gross_salary }}</td>
                                    <td>${{ $pay_stub->taxes }}</td>
                                    <td>${{ $pay_stub->Deductions }}</td>
                                    <td>${{ $pay_stub->net_amount }}</td>
                                    <td>${{ $pay_stub->YTD_net }}</td>
                                    <td>
                                        <a href="{{ route('paystubs.edit',$pay_stub) }}"><i class="fa fa-pencil btn btn-warning" ></i></a>
                                        <a href="{{ route('paystubs.destroy',$pay_stub) }}"><i class="fa fa-trash btn btn-danger"></i></a>
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
