<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{$app_title}}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 4.1.1 -->
    <link rel="stylesheet" href="{{ URL::asset('public/css/custom.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/css/bootstrap-datetimepicker.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::asset('public/css/mainui.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ URL::asset('public/css/mainui-icons-free.css') }}">

    <!-- PRO version // if you have PRO version licence than remove comment and use it. -->
    {{--<link rel="stylesheet" href="{{ URL::asset('public/css/brand.min.css') }}">--}}
    {{--<link rel="stylesheet" href="{{ URL::asset('public/css/flag.min.css') }}">--}}
    <!-- PRO version -->

    <link href="{{ URL::asset('public/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('public/css/simple-line-icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('public/css/flag-icon.min.css') }}">
    <link href="{{ URL::asset('public/css/custom.css') }}" rel="stylesheet">
</head>

<body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mx-4">
                    <div class="card-body p-4">
                        <form method="post" action="{{ url('/register') }}">
                            @csrf
                            <h1>Register</h1>
                            <p class="text-muted">Create your account</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-user"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control {{ $errors->has('name')?'is-invalid':'' }}" name="name" value="{{ old('name') }}" placeholder="Full Name">
                                @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="email" class="form-control {{ $errors->has('email')?'is-invalid':'' }}" name="email" value="{{ old('email') }}" placeholder="Email">
                                @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-lock"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control {{ $errors->has('password')?'is-invalid':''}}" name="password" placeholder="Password">
                                @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-lock"></i>
                                    </span>
                                </div>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
                                @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                            <a href="{{ url('/login') }}" class="text-center">I already have a membership</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ URL::asset('public/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ URL::asset('public/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('public/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('public/js/moment.min.js') }}"></script>
    <script src="{{ URL::asset('public/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ URL::asset('public/js/mainui.min.js') }}"></script>
    @stack('scripts')

</body>

</html>