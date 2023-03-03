<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Todo App</title>
    <link rel="stylesheet" href="{{asset('dist/css/main.css')}}">

    <link rel="stylesheet" href=" {{asset('dist/css/bootstrap.css')}}">
</head>

<body>
<div class="container-fluid">
    <nav class="navbar  navbar-dark bg-primary">
        <div class="row">
            <div class="col-xs-12 pull-right">
                <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse"
                        data-target="#navbar-header" aria-controls="navbar-header">
                    &#9776;
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-10 ">
                <div class="collapse navbar-toggleable-xs" id="navbar-header">
                    <a class="navbar-brand" href="#">Todo App</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-2">
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right ">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle bg-primary" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a style=" margin-left:40px" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</div>
<script src="{{asset('dist/js/jquery3.min.js')}}"></script>
<script src="{{asset('dist/js/bootstrap.js')}}"></script>
</body>

</html>
