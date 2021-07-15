<!DOCTYPE html>
<html lang="en">
<head>
    
    @include('includes.meta')

    <title> @yield('title') | RAPIMNAS PII 2021</title>

    <!--  FAVICON AND TOUCH ICONS -->
    <link rel="icon" href="favicon.ico" />
    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" type="image/x-icon" href="">

    @stack('before-style')
    <!--  Style -->
    @include('includes.style')
    
    @stack('after-style')

</head>
<body>
    
    @include('includes.header')
    @yield('content')
    @include('includes.footer')

    @stack('before-script')
    {{-- Script --}}
    @include('includes.script')
    
    @stack('after-script')

</body>
</html>