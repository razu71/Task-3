<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body class="sidebar-mini">
<div id="app">
    <header class="main-header navbar-static-top h-25">
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                Website for a contest
            </ul>
        </div>
    </header>

    <aside class="main-sidebar">
        <section class="sidebar">
            <ul class="sidebar-menu" data-widget="tree">
                <left-sidebar></left-sidebar>
            </ul>
        </section>
    </aside>

    <div class="main content-wrapper mt-80">
        <div class="content pt-0 pb-0">
            <div class="container-fluid">
                <div class="offset-3 col-6">
                    <router-view></router-view>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
