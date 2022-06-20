<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- Base Meta Tags --}}
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- Title --}}
        <title>
            @yield('title', 'Reportes ventas')
        </title>
        {{-- Favicon --}}
        {{-- <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}" /> --}}
        {{-- Custom Stylesheets --}}
        @yield('css')
        <link rel="stylesheet" href="css/estilopdf.css">
        <link rel="stylesheet" href="css/app2.css">
    </head>
    <body>
        <!-- Document body -->
        @yield('content')
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright©2022.</strong> All rights reserved. <strong>ATS</strong>
        </footer>
        {{-- Custom Scripts --}}
        @yield('js')
    </body>
</html>