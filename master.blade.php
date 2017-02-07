<?php
/*
 * Theme Name: Foundation
 * Author: Paladin Digital
 */
$theme = 'themes::paladindigital.laravel-foundation';

?><!DOCTYPE html>
<html>
<head>

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

@yield('scripts')
</body>
</html>