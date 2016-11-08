<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title') | Laravel Project</title>

    <meta name="Description" content="@yield('description')" />
    <meta name="author" content="Victor Sarda">
    <meta name="keywords" content="victor, sarda, victorsarda, web, developpement, development, html, php, site, laravel,">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap 4 & CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
    <a class="navbar-brand" href="{{ url('/') }}">Laravel Project</a>
    <ul class="nav navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('snippets') }}">Snippets</a>
        </li>

        @if(Auth::guest())
            <li class="nav-item float-md-right">
                <a class="nav-link" href="{{ url('register')  }}">S'inscrire</a>
            </li>
            <li class="nav-item float-md-right">
                <a class="nav-link" href="{{ url('login') }}">Se connecter</a>
            </li>
        @else
            <li class="nav-item dropdown float-lg-right">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mon compte</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="responsiveNavbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                </div>
                <!--
                TODO: Logout
                -->
            </li>
        @endif
    </ul>
</nav>
@yield('content')
<footer class="footer navbar-fixed-bottom">
    <div class="container-fluid">
        <p class="pull-right">Made with <i class="fa fa-heart" aria-hidden="true"></i> by Victor Sarda | Built with Laravel Framework <i class="fa fa-hand-peace-o" aria-hidden="true"></i></p>
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>