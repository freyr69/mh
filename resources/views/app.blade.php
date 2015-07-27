<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FLR Helper</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>


<header id="header">
    <ul class="header-inner">
        <li id="menu-trigger" data-trigger="#sidebar" class="">
            <div class="line-wrap">
                <div class="line top"></div>
                <div class="line center"></div>
                <div class="line bottom"></div>
            </div>
        </li>
        <li class="logo hidden-xs"><a href="{{ url('/') }}">FLR Helper</a></li>
        <li class="pull-right">

            @if (Auth::check())
            <ul class="top-menu top-menu-profile">
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle ink-reaction profile-dropdown" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{ Gravatar::src(Auth::user()->email) }}" alt="">
                        <span class="profile-info">
                            {{ Auth::user()->name }}
                            
                        </span>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li class="dropdown-header">Configuration</li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Other stuff</a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ url('/auth/logout') }}">
                                <i class="fa fa-fw fa-power-off text-danger"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            @endif

        </li>
    </ul>
</header>



<section id="main">
    <aside id="sidebar" class="">
        <div class="sidebar-inner">
            <div class="si-inner">
                <ul class="main-menu">
                    <li class="active"><a href="{{ url('/') }}"><i class="zmdi zmdi-home"></i>Home</a></li>
                    @if (Auth::check())
                    <li><a href="{{ url('task') }}"><i class="zmdi zmdi-view-list"></i>Tasks</a></li>
                    <li><a href="{{ route('dom.punishment.index') }}"><i class="zmdi zmdi-alert-triangle"></i>Punishments</a></li>
                    <li><a href="{{ route('dom.confession.index') }}"><i class="zmdi zmdi-hearing"></i>Confessions</a></li>
                    <li><a href="{{ route('dom.timer.index') }}"><i class="zmdi zmdi-timer"></i>Timers</a></li>
                    <li><a href="{{ route('dom.count.index') }}"><i class="zmdi zmdi-replay"></i>Counts</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </aside>

    <section id="content">
        <div class="container">
            @include('flash::message')
            @yield('content')
        </div>
    </section>

</section>


<script src="{{ asset('/js/app.js') }}"></script>

</body>
</html>


