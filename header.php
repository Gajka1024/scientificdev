<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>
    <link rel="shortcut icon" type="image/png" href=""/>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="/js/uikit.min.js"></script>
    <script src="/js/uikit-icons.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/uikit.min.css" />
    <link rel="stylesheet" href="/css/custom.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet"></head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.rawgit.com/jpswalsh/academicons/master/css/academicons.min.css">
    <script src="https://kit.fontawesome.com/3df389aea8.js"></script>

    <link rel="icon" type="image/png" href="/uploads/img/favicon.ico">


    <body>
        <header>
            <div  id="main-menu" class="uk-container uk-container-expand">
                <nav class="uk-navbar-container" uk-navbar>
                    <div class="uk-navbar-left">
                        <p class="navbar-title">
                            <a href="index.php">Scientific Dev</a>
                        </p>

                    </div>
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li class="active"><a href="shop.php">shop</a></li>
                            <li><a href="about.php">about</a></li>
                            <li><a href="courses.php">courses</a></li>
                            <li><a href="books.php">books</a></li>
                            <li><a href="blog.php">blog</a></li>
                            <li><a href="projects.php">projects</a></li>
                            <li><a href="contact.php">contact</a></li>
                        </ul>
                        <button class="uk-button uk-hidden@m off-canvas-btn" type="button" uk-toggle="target: #offcanvas-nav"><span class="uk-margin-small-right" uk-icon="icon: menu; ratio: 1.5"></span></button>
                    </div>
                </nav>
            </div>

            <div id="offcanvas-nav" uk-offcanvas="overlay: true">
                <div class="uk-offcanvas-bar">

                    <ul class="uk-nav uk-nav-default off-canvas-menu">
                        <li class="uk-nav-header"><a href="index.php">Scientific Dev</a></li>
                        <li class="active"><a href="shop.php">shop</a></li>
                        <li><a href="about.php">about</a></li>
                        <li><a href="courses.php">courses</a></li>
                        <li><a href="books.php">books</a></li>
                        <li><a href="blog.php">blog</a></li>
                        <li><a href="projects.php">projects</a></li>
                        <li><a href="contact.php">contact</a></li>
                    </ul>
                </div>
            </div>
        </header>
