@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <title>KOMP</title>
</head>
<body style="background-color:#e1e1e1">
    <div class="container my-5 ">
        <div class="row my-5">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5 shadow-lg" >
                    <div class="card-body my-5">
                        <div class="text-center">
                            <img src="{{asset('logo.jpg')}}" alt="logo icon" style="height:40%; width: 80%; ">
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="text-center" style="padding-top: 40px;">
                            <strong><label for="inputPassword">Email <span style="color: #FF0000">*</span></label></strong>
                            <div class="form-label-group" >
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br />
                        <div class="text-center">
                            <strong><label for="inputPassword">Password <span style="color: #FF0000">*</span></label></strong>
                            <div class="form-label-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> <br />
                            <div class="form-label-group">
                            </div></div> <br />
                            <strong><button wire:click type="submit" class="btn btn-primary btn-block" style="background-color:#FF0000; border-radius:50px;">LOGIN</button><br></br></strong>
                            <div class="register-link m-t-10 text-center">
                                {{--<p> <a href="forgot_pass/index.php">Forgot Password</a></p>--}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection
