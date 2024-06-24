@extends('layouts2.admincp.master')

@section('title', 'Home')

@section('css')
<link type="text/css" href="{{ asset('assets/vendor/toastr.min.css') }}" rel="stylesheet">
<style>
    .bg-gradient-primary {
        box-shadow: 0 3px 3px 0 rgba(42, 125, 249, 0.15), 0 3px 1px -2px rgba(7, 58, 136, 0.2), 0 1px 5px 0 rgba(42, 125, 249, 0.15) !important;
        }
</style>
@endsection

@section('contents')
    {{-- <div class="row">
        @include('layouts2.admincp.nav')
    </div> --}}
    <div class="row">
        <div class="col-12">
            <div class="card bg-gradient-primary">
                <div class="card-body">
                    @php
                    function random_color_part() {
                        return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
                    }

                    function random_color() {
                        return random_color_part() . random_color_part() . random_color_part();
                    }

                    function fontsize($e)
                    {
                        switch ($e) {
                            case 5:
                                return 5;
                                break;
                            case 6:
                                return 5;
                                break;
                            case 7:
                                return 4;
                                break;
                            case 8:
                                return 3;
                                break;
                            case 9:
                                return 2;
                                break;
                            case 10:
                                return 1;
                                break;

                            default:
                                # code...
                                break;
                        }
                    }

                    function xpos($e)
                    {
                        switch ($e) {
                            case 5:
                                return (($e) - 5);
                                break;
                            case 6:
                                return (($e) - 5);
                                break;
                            case 7:
                                return (($e) - 5);
                                break;
                            case 8:
                                return (($e) - 5);
                                break;
                            case 9:
                                return (($e) - 5);
                                break;
                            case 10:
                                return (($e) - 5);
                                break;

                            default:
                                # code...
                                break;
                        }
                    }
                @endphp

                <div class="container" style="height:800px; width:800px;">
                    @foreach ($menus as $m)
                    @if ($m->spin == 0)
                        <div class="" >
                            {{-- <i class="gear fa fa-{{ $m->size }}x fa-gear spin" style="margin-top:{{ $m->y_axis }}px; margin-left:{{ $m->x_axis }}px; color: #{{ random_color() }} !important;"></i> --}}
                            <i class="gear fa fa-{{ $m->size }}x fa-gear spin" style="color:#596CFF !important; margin-top:{{ $m->y_axis }}px; margin-left:{{ $m->x_axis }}px;"></i>

                            <a class="h{{ fontsize($m->size) }}" href="{{ $m->url }}" style="
                            position: absolute;
                            margin-top:{{ $m->y_axis + (($m->size * 5) + 5)}}px;margin-left:{{ $m->x_axis + xpos($m->size)}}px;
                            ">{{ $m->menu_name }}</a>

                        </div>

                    @else
                    <div class="" >

                        {{-- <i class="gear fa fa-{{ $m->size }}x fa-gear spin" style="margin-top:{{ $m->y_axis }}px;margin-left:{{ $m->x_axis }}px; color: #{{ random_color() }};"></i> --}}
                        <i class="gear fa fa-{{ $m->size }}x fa-gear spin-back" style="color:#596CFF !important; margin-top:{{ $m->y_axis }}px;margin-left:{{ $m->x_axis }}px;"></i>

                        <a class="h{{ fontsize($m->size) }}" href="{{ $m->url }}" style="
                        position: absolute;
                        margin-top:{{ $m->y_axis + (($m->size * 5) + 5)}}px;margin-left:{{ $m->x_axis + xpos($m->size)}}px;
                        ">{{ $m->menu_name }}</a>

                    </div>
                    @endif
                @endforeach
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
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
@endsection
