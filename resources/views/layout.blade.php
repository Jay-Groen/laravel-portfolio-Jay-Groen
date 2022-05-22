<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile Website Jay Groenendijk</title>
    <link rel="stylesheet" href="/Css/myStyle.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="JavaScript/Java.js"></script>
</head>

<body>
<div>
{{--        <ul class="navbar sticky">--}}
{{--            <li class="{{ Request::is('home') ? 'current_page_item' : ''}}"><a href="/home">Home</a></li>--}}
{{--            <li class="{{ Request::is('profile') ? 'current_page_item' : ''}}"><a href="/profile"> Profile</a> </li>--}}
{{--            <li class="{{ Request::is('dashboard') ? 'current_page_item' : ''}}"><a href="/dashboard"> Dashboard</a></li>--}}
{{--            <li class="{{ Request::is('faq') ? 'current_page_item' : ''}}"><a href="/faq"> FAQ</a></li>--}}
{{--            <li class="{{ Request::is('articles') ? 'current_page_item' : ''}}"><a href="/articles"> Blog</a></li>--}}
{{--            <img class="hz-image"--}}
{{--                 src="https://th.bing.com/th/id/OIP.VuOx_zmNq-m0TBZqw2vuwwHaHa?w=178&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7">--}}
{{--            </img>--}}
{{--        </ul>--}}
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="https://bulma.io">
                    <img src="https://th.bing.com/th/id/OIP.VuOx_zmNq-m0TBZqw2vuwwHaHa?w=178&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7" width="30" height="50">
                </a>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item">
                        Home
                    </a>

                    <a class="navbar-item">
                        Documentation
                    </a>

                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            More
                        </a>

                        <div class="navbar-dropdown">
                            <a class="navbar-item">
                                About
                            </a>
                            <a class="navbar-item">
                                Jobs
                            </a>
                            <a class="navbar-item">
                                Contact
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item">
                                Report an issue
                            </a>
                        </div>
                    </div>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary">
                                <strong>Sign up</strong>
                            </a>
                            <a class="button is-light">
                                Log in
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </nav>
</div>
    @yield('content')
</body>

</html>
