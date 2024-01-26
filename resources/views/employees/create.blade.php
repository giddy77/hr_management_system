@extends('layouts.layout')
@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-6">
                @session('message')
                <center>
                    <div id="flash-message" class="alert alert-success">{{$value}}</div>
                </center>
                @endsession
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <!-- Credit Card -->
                        <div id="pay-invoice">
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center">New</h3>
                                </div>
                                <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <strong><label for="cc-number" class="control-label mb-1">Name<span style="color: #FF0000">*</span></label></strong>
                                        <input id="cc-number" name="Name" value="{{old('Name')}}" type="text" class="form-control cc-number identified visa" maxlength="20"  placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <strong><label for="cc-number" class="control-label mb-1">Email<span style="color: #FF0000">*</span></label></strong>
                                        <input id="cc-number" name="email" value="{{old('email')}}" type="email" class="form-control cc-number identified visa" maxlength="20"  placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <strong><label for="cc-number" class="control-label mb-1">Phone<span style="color: #FF0000">*</span></label></strong>
                                        <input id="cc-number" name="phone" value="{{old('phone')}}" type="number" class="form-control cc-number identified visa" maxlength="20"  placeholder="Enter contact">
                                    </div>
                                    <div class="form-group">
                                        <strong><label for="cc-number" class="control-label mb-1">Alt_Phone<span style="color: #FF0000">*</span></label></strong>
                                        <input id="cc-number" name="alt_phone" value="{{old('alt_phone')}}" type="number" class="form-control cc-number identified visa" maxlength="20"  placeholder="Enter alt contact">
                                    </div>
                                    <div class="form-group">
                                        <strong><label for="cc-number" class="control-label mb-1">Staff No<span style="color: #FF0000">*</span></label></strong>
                                        <input id="cc-number" name="staff_no" value="{{old('staff_no')}}" type="text" class="form-control cc-number identified visa" maxlength="20"  placeholder="Enter staff_no">
                                    </div>
                                    <div class="form-group">
                                        <strong><label for="cc-number" class="control-label mb-1">passport<span style="color: #FF0000">*</span></label></strong>
                                        <input name="image" value="" type="file" class="form-control" maxlength="20">
                                    </div>

                                    <div class="form-group">
                                        <strong><label for="cc-number" class="control-label mb-1">Gender<span style="color: #FF0000">*</span></label></strong>
                                        <div class="form-group has-success">
                                            <select data-placeholder="Choose Gender..." class="standardSelect form-control select2" name="gender" tabindex="1" >
                                                <option value="{{old('gender')}}" selected> {{old('gender')}}</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <strong> <label for="cc-number" class="control-label mb-1">Age<span style="color: #FF0000">*</span></label></strong>
                                        <div class="form-group has-success">
                                            <select class="standardSelect form-control select2" data-placeholder="Select Age Range" name="age" tabindex="1" ></option>
                                                <option value="{{old('age')}}" selected>{{old('age')}}</option>
                                                <option value="Below 17">Below 17</option>
                                                <option value="18-24">18-24</option>
                                                <option value="25-34">25-34</option>
                                                <option value="35-44">35-44</option>
                                                <option value="45-59">45-59</option>
                                                <option value="Above 60">Above 60</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <strong><label for="cc-number" class="control-label mb-1">Department<span style="color: #FF0000">*</span></label></strong>
                                        <div class="form-group has-success">
                                            <select data-placeholder="Choose Department..." class="form-control select2" name="department" tabindex="1" >
                                                <option value="{{old('Name')}}" selected> {{old('Name')}}</option>
                                                @foreach ($departments as $department )
                                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <strong><label for="cc-number" class="control-label mb-1">Job Position<span style="color: #FF0000">*</span></label></strong>
                                        <div class="form-group has-success">
                                            <select data-placeholder="Choose job position..." class="form-control select2" name="position" tabindex="1" >
                                                <option value="{{old('job')}}" selected> {{old('job')}}</option>
                                                @foreach ($jobs as $job )
                                                <option value="{{ $job->id }}">{{ $job->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <strong><label for="cc-number" class="control-label mb-1">Password<span style="color: #FF0000">*</span></label></strong>
                                        <input id="cc-number" name="password" value="{{old('password')}}" type="password" class="form-control cc-number identified visa" maxlength="20"  placeholder="Enter password">
                                    </div>

                                    <button  type="submit"class="btn btn-warning">submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
</div>
@endsection
