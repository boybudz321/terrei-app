<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link type="text/css" href="<?php echo e(asset('assets/vendor/toastr.min.css')); ?>" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?php echo e(asset('assets/vendor/jquery.min.js')); ?>"></script>
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
            font-size: 6em;
        }

        .fa-7x {
            font-size: 7em;
        }

        .fa-8x {
            font-size: 8em;
        }

        .fa-9x {
            font-size: 9em;
        }

        .fa-10x {
            font-size: 10em;
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
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <?php echo e(config('app.name', 'Laravel')); ?>

                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="nav nav-item">
                            <a href="<?php echo e(route('home')); ?>">Home</a>
                        </li>
                        <li class="nav nav-item">
                            <a href="<?php echo e(route('edit')); ?>">Edit Menu</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                            style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <!-- Toastr -->
<script src="<?php echo e(asset('assets/vendor/toastr.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/toastr.js')); ?>"></script>
    <script>
        $(document).ready(function () {
            $('body').on('click','.deluser', function (e) {
                e.preventDefault();
                var data = {
                    _token: '<?php echo e(csrf_token()); ?>',
                    id: $(this).data('id')
                };
                if (confirm('Are you sure you want to delete this?')) {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo e(route('delete')); ?>",
                        data: data,
                        dataType: "json",
                        success: function (response) {
                            toastr.success('Menu has been deleted','Success');
                            window.setTimeout(function() {
                                    location.reload();
                                }, 2500);
                        },
                    });
                } else {
                    return false;
                }
            });

            $('body').on('submit', '#userform', function (e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "<?php echo e(route('add')); ?>",
                    data: $('#userform').serialize(),
                    dataType: "json",
                    success: function (response) {
                        toastr.success('Menu has been added','Success');
                        window.setTimeout(function() {
                            location.reload();
                        }, 1500);
                    }
                });
            });


            $('body').on('keyup', '.edits_menu_name', function (e) {
                if (this.value.length > 0) {
                    e.preventDefault();
                    console.log($(this).val());
                    $.ajax({
                        type: "POST",
                        url: "<?php echo e(route('update')); ?>",
                        data: {
                            _token: '<?php echo e(csrf_token()); ?>',
                            id: $(this).data('id'),
                            type: $(this).data('type'),
                            value: $(this).val(),
                        },
                        dataType: "json",
                        success: function (response) {
                            toastr.success('Menu has been updated','Success');
                        }
                    });
                }
            });

            $('body').on('keyup', '.edits_size', function (e) {
                if (this.value.length > 0) {
                    e.preventDefault();
                    console.log($(this).val());
                    $.ajax({
                        type: "POST",
                        url: "<?php echo e(route('update')); ?>",
                        data: {
                            _token: '<?php echo e(csrf_token()); ?>',
                            id: $(this).data('id'),
                            type: $(this).data('type'),
                            value: $(this).val(),
                        },
                        dataType: "json",
                        success: function (response) {
                            toastr.success('Menu has been updated','Success');
                        }
                    });
                }
            });

            $('body').on('keyup', '.edits_y_axis', function (e) {
                if (this.value.length > 0) {
                    e.preventDefault();
                    console.log($(this).val());
                    $.ajax({
                        type: "POST",
                        url: "<?php echo e(route('update')); ?>",
                        data: {
                            _token: '<?php echo e(csrf_token()); ?>',
                            id: $(this).data('id'),
                            type: $(this).data('type'),
                            value: $(this).val(),
                        },
                        dataType: "json",
                        success: function (response) {
                            toastr.success('Menu has been updated','Success');
                        }
                    });
                }
            });
            $('body').on('keyup', '.edits_x_axis', function (e) {
                if (this.value.length > 0) {
                    e.preventDefault();
                    console.log($(this).val());
                    $.ajax({
                        type: "POST",
                        url: "<?php echo e(route('update')); ?>",
                        data: {
                            _token: '<?php echo e(csrf_token()); ?>',
                            id: $(this).data('id'),
                            type: $(this).data('type'),
                            value: $(this).val(),
                        },
                        dataType: "json",
                        success: function (response) {
                            toastr.success('Menu has been updated','Success');
                        }
                    });
                }
            });
            $('body').on('keyup', '.edits_spin', function (e) {
                if (this.value.length > 0) {
                    e.preventDefault();
                    console.log($(this).val());
                    $.ajax({
                        type: "POST",
                        url: "<?php echo e(route('update')); ?>",
                        data: {
                            _token: '<?php echo e(csrf_token()); ?>',
                            id: $(this).data('id'),
                            type: $(this).data('type'),
                            value: $(this).val(),
                        },
                        dataType: "json",
                        success: function (response) {
                            toastr.success('Menu has been updated','Success');
                        }
                    });
                }
            });

            $('body').on('keyup', '.edits_url', function (e) {
                if (this.value.length > 0) {
                    e.preventDefault();
                    console.log($(this).val());
                    $.ajax({
                        type: "POST",
                        url: "<?php echo e(route('update')); ?>",
                        data: {
                            _token: '<?php echo e(csrf_token()); ?>',
                            id: $(this).data('id'),
                            type: $(this).data('type'),
                            value: $(this).val(),
                        },
                        dataType: "json",
                        success: function (response) {
                            toastr.success('Menu has been updated','Success');
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\ima_menu2\resources\views/layouts/app.blade.php ENDPATH**/ ?>