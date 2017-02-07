<?php
/*
 * Theme Name: Foundation
 * Author: Paladin Digital
 */
$theme = 'themes::paladindigital.laravel-foundation';

?><!DOCTYPE html>
<html>
<head>
    <!-- Foundation 6.2.4 CSS -->
    <link rel="stylesheet" crossorigin="anonymous" integrity="sha256-NqI559iHqiWe5VxDi9mXE8i83ghn8Ru8BINyiPN7lDg=" href="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.css">
@yield('head')
@yield('meta')
@yield('styles')
</head>
<body>
@include($theme . '._nav')
@yield('content')
<aside>
@yield('sidebar')
@yield('widgets')
</aside>
@include($theme . '_footer')
    <!-- Foundation 6.2.4 JS -->
    <script crossorigin="anonymous" integrity="sha256-6ikyM5zgWkLwRwc64Pn/i5ioDIvcxCtb+EXE8Zm0qK8=" src="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.js"></script>
@yield('scripts')
</body>
</html>