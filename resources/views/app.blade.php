<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mistress Helper</title>

        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

        <script src="{{ asset('js/modernizr.js') }}"></script>
    </head>
    <body>

        <div class="off-canvas-wrap" data-offcanvas>
            <div class="inner-wrap">

                <nav class="tab-bar">
                    @if (Auth::check())
                    <section class="left-small">
                        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
                    </section>
                    @endif

                    <section class="middle tab-bar-section">
                        <h1>Mistress Helper</h1>
                    </section>
                </nav>
                @if (Auth::check())
                <aside class="left-off-canvas-menu">
                    <ul class="off-canvas-list">
                        <li><a href="{{ url('/') }}">Home</a></li>

                        <li><a href="{{ url('task') }}">Tasks</a></li>
                        <li><a href="#">Punishments</a></li>
                        <li><a href="#">Confessions</a></li>

                        @if (!Auth::user()->submissive)
                            <li><a href="#">Admin</a></li>
                        @endif

                        <li><a href="{{ url('/auth/logout') }}">Logout</a></li>

                    </ul>
                </aside>
                @endif

                <section class="main-section">
                    @include('flash::message')
                    @yield('content')
                </section>

                <a class="exit-off-canvas"></a>
            </div>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('/js/app.js') }}"></script>
        <script>
//$('#flash-overlay-modal').modal();
        </script>
    </body>
</html>
