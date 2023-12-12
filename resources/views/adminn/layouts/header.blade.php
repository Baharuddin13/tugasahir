<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-name" content="mono" />

    <title>202208 </title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
    <link href="{{ asset('adminn/plugins/material/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('adminn/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('adminn/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />




    <link href="{{ asset('adminn/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css') }}"
        rel="stylesheet" />



    <link href="{{ asset('adminn/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />



    <link href="{{ asset('adminn/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />



    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">



    <link href="{{ asset('adminn/plugins/toaster/toastr.min.css') }}" rel="stylesheet" />


    <!-- MONO CSS -->
    <link id="main-css-href" rel="stylesheet" href="{{ asset('adminn/css/style.css') }}" />




    <!-- FAVICON -->
    <link href="{{ asset('adminn/images/favicon.png') }}" rel="shortcut icon" />

    <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <script src="{{ asset('adminn/plugins/nprogress/nprogress.css') }}"></script>
</head>
<div class="page-wrapper">

    <!-- Header -->
    <header class="main-header" id="header">
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
            <!-- Sidebar toggle button -->
            <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
            </button>

            <span class="page-title">dashboard</span>

            <div class="navbar-right ">

                <!-- search form -->
                <ul class="nav navbar-nav">
                    <!-- User Account -->
                    <li class="dropdown user-menu">
                        <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                            {{-- <img src="images/user/user-xs-01.jpg" class="user-image rounded-circle" alt="User Image" /> --}}
                            <span class="d-none d-lg-inline-block">BAHAR</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown">
                                <a class="dropdown-link-item" href=""> <i class="mdi mdi-logout"></i> Log
                                    Out </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
