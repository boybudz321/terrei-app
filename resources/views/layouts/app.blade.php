<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link type="text/css" href="{{ asset('assets/vendor/toastr.min.css') }}" rel="stylesheet">

    <!-- jQuery -->
    <script src="{{ asset('assets/vendor/jquery.min.js') }}"></script>
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

        .spin:hover {
            -webkit-animation: spin 4s linear infinite;
            -moz-animation: spin 4s linear infinite;
            animation: spin 4s linear infinite;
        }

        .spin-back:hover {
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
            font-size: 8em !important;
        }

        .fa-7x {
            font-size: 11em !important;
        }

        .fa-8x {
            font-size: 14em !important;
        }

        .fa-9x {
            font-size: 16em !important;
        }

        .fa-10x {
            font-size: 20em !important;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="nav nav-item">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav nav-item">
                            <a href="{{ route('edit') }}">Edit Menu</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ asset('assets/vendor/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/js/toastr.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('body').on('click', '.deluser', function(e) {
                e.preventDefault();
                var data = {
                    _token: '{{ csrf_token() }}',
                    id: $(this).data('id')
                };
                if (confirm('Are you sure you want to delete this?')) {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('delete') }}",
                        data: data,
                        dataType: "json",
                        success: function(response) {
                            toastr.success('Menu has been deleted', 'Success');
                            window.setTimeout(function() {
                                location.reload();
                            }, 2500);
                        },
                    });
                } else {
                    return false;
                }
            });

            $('body').on('submit', '#userform', function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{{ route('add') }}",
                    data: $('#userform').serialize(),
                    dataType: "json",
                    success: function(response) {
                        toastr.success('Menu has been added', 'Success');
                        window.setTimeout(function() {
                            location.reload();
                        }, 1500);
                    }
                });
            });


            $('body').on('keyup', '.edits_menu_name', function(e) {
                if (this.value.length > 0) {
                    e.preventDefault();
                    console.log($(this).val());
                    $.ajax({
                        type: "POST",
                        url: "{{ route('update') }}",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: $(this).data('id'),
                            type: $(this).data('type'),
                            value: $(this).val(),
                        },
                        dataType: "json",
                        success: function(response) {
                            toastr.success('Menu has been updated', 'Success');
                        }
                    });
                }
            });

            $('body').on('keyup', '.edits_size', function(e) {
                if (this.value.length > 0) {
                    e.preventDefault();
                    console.log($(this).val());
                    $.ajax({
                        type: "POST",
                        url: "{{ route('update') }}",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: $(this).data('id'),
                            type: $(this).data('type'),
                            value: $(this).val(),
                        },
                        dataType: "json",
                        success: function(response) {
                            toastr.success('Menu has been updated', 'Success');
                        }
                    });
                }
            });

            $('body').on('keyup', '.edits_y_axis', function(e) {
                if (this.value.length > 0) {
                    e.preventDefault();
                    console.log($(this).val());
                    $.ajax({
                        type: "POST",
                        url: "{{ route('update') }}",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: $(this).data('id'),
                            type: $(this).data('type'),
                            value: $(this).val(),
                        },
                        dataType: "json",
                        success: function(response) {
                            toastr.success('Menu has been updated', 'Success');
                        }
                    });
                }
            });
            $('body').on('keyup', '.edits_x_axis', function(e) {
                if (this.value.length > 0) {
                    e.preventDefault();
                    console.log($(this).val());
                    $.ajax({
                        type: "POST",
                        url: "{{ route('update') }}",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: $(this).data('id'),
                            type: $(this).data('type'),
                            value: $(this).val(),
                        },
                        dataType: "json",
                        success: function(response) {
                            toastr.success('Menu has been updated', 'Success');
                        }
                    });
                }
            });
            $('body').on('keyup', '.edits_spin', function(e) {
                if (this.value.length > 0) {
                    e.preventDefault();
                    console.log($(this).val());
                    $.ajax({
                        type: "POST",
                        url: "{{ route('update') }}",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: $(this).data('id'),
                            type: $(this).data('type'),
                            value: $(this).val(),
                        },
                        dataType: "json",
                        success: function(response) {
                            toastr.success('Menu has been updated', 'Success');
                        }
                    });
                }
            });

            $('body').on('keyup', '.edits_url', function(e) {
                if (this.value.length > 0) {
                    e.preventDefault();
                    console.log($(this).val());
                    $.ajax({
                        type: "POST",
                        url: "{{ route('update') }}",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: $(this).data('id'),
                            type: $(this).data('type'),
                            value: $(this).val(),
                        },
                        dataType: "json",
                        success: function(response) {
                            toastr.success('Menu has been updated', 'Success');
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>
