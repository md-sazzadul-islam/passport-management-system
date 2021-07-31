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

    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/simple-line-icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/flag-icon.min.css') }}">
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img class="navbar-brand-full" src="{{ asset('/storage/'.$app_logo) }}" width="30" height="30" alt="{{$app_name}}">
            <img class="navbar-brand-minimized" src="{{asset('/storage/'.$app_logo)  }}" width="30" height="30" alt="{{$app_name}}">
        </a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item d-md-down-none">
                <a class="nav-link" href="#">
                    <i class="icon-bell"></i>
                    <span class="badge badge-pill badge-danger">5</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" style="margin-right: 10px" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    {{ (isset(Auth::user()->name)?Auth::user()->name:'') }}
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <strong>Account</strong>
                    </div>
                    <a class="dropdown-item" href="{{ URL('users/'.Auth::user()->id) }}">
                        <i class="fa fa-user"></i> Profile</a>
                    <div class="dropdown-header text-center">
                        <strong>Settings</strong>
                    </div>
                    <a class="dropdown-item" href="{{ URL('change_password')}}">
                        <i class="fa fa-unlock"></i> Change Password</a>
                    <a class="dropdown-item" href="{{ route('settings.index') }}">
                        <i class="fa fa-wrench"></i> Settings</a>
                    <div class="dropdown-header text-center">
                        <strong>Session</strong>
                    </div>
                    <a href="{{ url('/logout') }}" class="dropdown-item btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-lock"></i>Logout
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </header>

    <div class="app-body">
        @include('layouts.sidebar')
        <main class="main">
            @yield('content')
        </main>
    </div>
    <footer class="app-footer">
        <div>
            <a href="http://sazzadul.com">Sazzad </a>
            <span>&copy; 2020 Sazzad.</span>
        </div>
        <div class="ml-auto">
            <span>Powered by</span>
            <a href="https://sazzadul.com">Sazzad</a>
        </div>
    </footer>
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