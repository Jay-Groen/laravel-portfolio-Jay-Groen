<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile Website Jay Groenendijk</title>
    <link rel="stylesheet" href="/Css/myStyle.css" type="text/css" media="all">
    <script src="JavaScript/Java.js"></script>
</head>

<body>
<div>
    <nav>
        <ul class="navbar sticky">
            <li class="{{ Request::is('home') ? 'current_page_item' : ''}}"><a href="/home">Home</a></li>
            <li class="{{ Request::is('profile') ? 'current_page_item' : ''}}"><a href="/profile"> Profile</a> </li>
            <li class="{{ Request::is('dashboard') ? 'current_page_item' : ''}}"><a href="/dashboard"> Dashboard</a></li>
            <li class="{{ Request::is('faq') ? 'current_page_item' : ''}}"><a href="/faq"> FAQ</a></li>
            <li class="{{ Request::is('articles') ? 'current_page_item' : ''}}"><a href="/articles"> Blog</a></li>
            <img class="hz-image"
                 src="https://th.bing.com/th/id/OIP.VuOx_zmNq-m0TBZqw2vuwwHaHa?w=178&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7">
            </img>
        </ul>
    </nav>
</div>
    @yield('content')
    @yield('profile')
    @yield('blog')
    @yield('dashboard')
    @yield('faq')
    @yield('study-choice')
    @yield('show')
</body>

</html>
