<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>{{$app_title}}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 4.1.1 -->
    <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-datetimepicker.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::asset('css/mainui.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ URL::asset('css/mainui-icons-free.css') }}">

    <!-- PRO version // if you have PRO version licence than remove comment and use it. -->
    {{--<link rel="stylesheet" href="{{ URL::asset('css/brand.min.css') }}">--}}
    {{--<link rel="stylesheet" href="{{ URL::asset('css/flag.min.css') }}">--}}
    <!-- PRO version -->

    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/simple-line-icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/flag-icon.min.css') }}">
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
</head>

<body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group">
                    <div class="card p-4">
                        <div class="card-body">
                            <form method="post" action="{{ url('/login') }}">
                                @csrf
                                <h1>Login</h1>
                                <p class="text-muted">Sign In to your account</p>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="icon-user"></i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control {{ $errors->has('email')?'is-invalid':'' }}" name="email" value="{{ old('email') }}" placeholder="Email">
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="icon-lock"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control {{ $errors->has('password')?'is-invalid':'' }}" placeholder="Password" name="password">
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-primary px-4" type="submit">Login</button>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a class="btn btn-link px-0" href="{{ url('/password/reset') }}">
                                            Forgot password?
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                        <div class="card-body text-center">
                            <div>
                                <h2>Sign up</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                <a class="btn btn-primary active mt-3" href="{{ url('/register') }}">Register Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- jQuery 3.1.1 -->
<script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ URL::asset('js/popper.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/moment.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ URL::asset('js/mainui.min.js') }}"></script>
@stack('scripts')

</html>