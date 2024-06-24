<!--
=========================================================
* Material Dashboard 2 - v3.0.4
=========================================================
* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim
=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/ez-logo.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/ez-logo.png') }}">
    <title>@yield('title')</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('r34l/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('r34l/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('r34l/assets/css/material-dashboard.css?v=3.0.4') }}" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <style>
        .inline-icon {
            vertical-align: bottom;
            font-size: 18px !important;
        }

        #gear1,
        #gear2,
        #gear3,
        #gear4,
        #gear5 {
            color: #888;
            display: block;
            float: left;
            position: absolute;
        }

        .gear {
            /* color: #888; */
            display: inline-block;
            float: left;
            position: absolute;
        }

        #gear1 {
            top: 300px;
            left: 400px;
        }

        /* #gear2 {
    top: 90px;
    left: 90px;
}

#gear3 {
    top: 140px;
    left: 140px;
}

#gear4 {
    top: 190px;
    left: 190px;
}

#gear5 {
    top: 200px;
    left: 200px;
} */

        .spin {
            -webkit-animation: spin 4s linear infinite;
            -moz-animation: spin 4s linear infinite;
            animation: spin 4s linear infinite;
        }

        .spin-back {
            -webkit-animation: spin-back 4s linear infinite;
            -moz-animation: spin-back 4s linear infinite;
            animation: spin-back 4s linear infinite;
        }


        .spin-back:hover {
            -webkit-animation: spin 4s linear infinite;
            -moz-animation: spin 4s linear infinite;
            animation: spin 4s linear infinite;
        }

        .spin:hover {
            -webkit-animation: spin-back 4s linear infinite;
            -moz-animation: spin-back 4s linear infinite;
            animation: spin-back 4s linear infinite;
        }

        @-moz-keyframes spin {
            100% {
                -moz-transform: rotate(360deg);
            }
        }

        @-webkit-keyframes spin {
            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @-moz-keyframes spin-back {
            100% {
                -moz-transform: rotate(-360deg);
            }
        }

        @-webkit-keyframes spin-back {
            100% {
                -webkit-transform: rotate(-360deg);
            }
        }

        @keyframes spin-back {
            100% {
                -webkit-transform: rotate(-360deg);
                transform: rotate(-360deg);
            }
        }

        .fa-6x {
            font-size: 6em !important;
        }

        .fa-7x {
            font-size: 7em !important;
        }

        .fa-8x {
            font-size: 8em !important;
        }

        .fa-9x {
            font-size: 9em !important;
        }

        .fa-10x {
            font-size: 10em !important;
        }

    </style>
    @yield('css')
</head>

<body class="g-sidenav-show  bg-gray-100">

    @include('layouts2.admincp.sidepanel')

    <main class="main-content position-relative border-radius-lg ">
        <div class="container-fluid overflow-auto py-2 ps ps--active-y" >
            @yield('contents')

        </div>
        @yield('modals')
    </main>


    @include('layouts2.admincp.scripts')
    @yield('scripts')
</body>

</html>
