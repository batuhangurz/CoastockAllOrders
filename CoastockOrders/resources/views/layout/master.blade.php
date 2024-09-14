<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.header')
</head>

<body class="layout-fixed control-sidebar-slide-open layout-navbar-fixed" style="height: auto;">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-dark">
            @include('includes.navbar')
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            @include('includes.sidebar')
        </aside>
        
        <div class="content-wrapper">
            @yield('body')
        </div>
        @include('includes.footer')
    </div>
    @include('includes.script')
</body>
</html>


