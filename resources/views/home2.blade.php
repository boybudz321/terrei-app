@extends('layouts2.admincp.master')

@section('title', 'Home')

@section('css')
    <link type="text/css" href="{{ asset('assets/vendor/toastr.min.css') }}" rel="stylesheet">
    <style>
        .bg-gradient-primary {
            box-shadow: 0 3px 3px 0 rgba(64, 147, 255, 0.15), 0 3px 1px -2px rgba(7, 58, 136, 0.2), 0 1px 5px 0 rgba(64, 147, 255, 0.15) !important;
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
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-info shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">menu</i>
                    </div>
                    <div class="text-end pt-1">
                        {{-- <p class="text-md mb-0 text-capitalize">Sample Menu</p> --}}
                        <h4 class="mb-0">Sample Menu</h4>
                    </div>
                </div>
                <div class="card-body">
                    @php
                        function random_color_part()
                        {
                            return str_pad(dechex(mt_rand(0, 255)), 2, '0', STR_PAD_LEFT);
                        }

                        function random_color()
                        {
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

                        function xpos($e, $l)
                        {
                            switch ($e) {
                                case 5:
                                    return (($e * 6) + 10) - ($l * 5);
                                    break;
                                case 6:
                                    return (($e * 5) + 10) - ($l * 5);
                                    break;
                                case 7:
                                    return (($e * 5) + 10) - ($l * 5);
                                    break;
                                case 8:
                                    return (($e * 5) + 10) - ($l * 7);
                                    break;
                                case 9:
                                    return (($e * 5) + 10) - ($l * 10);
                                    break;
                                case 10:
                                    return (($e * 5) + 10) - ($l * 12);
                                    break;

                                default:
                                    # code...
                                    break;
                            }
                        }

                        function ypos($e)
                        {
                            switch ($e) {
                                case 5:
                                    return ($e * 6) - 5;
                                    break;
                                case 6:
                                    return ($e * 7) - 5;
                                    break;
                                case 7:
                                    return ($e * 7) - 5;
                                    break;
                                case 8:
                                    return ($e * 7) - 5;
                                    break;
                                case 9:
                                    return ($e * 7) - 5;
                                    break;
                                case 10:
                                    return ($e * 7) - 5;
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
                                <div class="">
                                    {{-- <i class="gear fa fa-{{ $m->size }}x fa-gear spin" style="margin-top:{{ $m->y_axis }}px; margin-left:{{ $m->x_axis }}px; color: #{{ random_color() }} !important;"></i> --}}
                                    <i class="gear fa fa-{{ $m->size }}x fa-gear spin"
                                        style="
                                        color: {{ $m->color == null ? '#596CFF' : $m->color }} !important;
                                        margin-top:{{ $m->y_axis }}px;
                                        margin-left:{{ $m->x_axis }}px;"></i>

                                    <a class="h{{ fontsize($m->size) }}" href="{{ $m->url }}"
                                        style="
                                        position: absolute;
                                        margin-top:{{ $m->y_axis + ypos($m->size) }}px;
                                        margin-left:{{ $m->x_axis + xpos($m->size, strlen($m->menu_name)) }}px;
                                        ">{{ $m->menu_name }}</a>

                                </div>
                            @else
                                <div class="">

                                    {{-- <i class="gear fa fa-{{ $m->size }}x fa-gear spin" style="margin-top:{{ $m->y_axis }}px;margin-left:{{ $m->x_axis }}px; color: #{{ random_color() }};"></i> --}}
                                    <i class="gear fa fa-{{ $m->size }}x fa-gear spin-back"
                                        style="
                                        color: {{ $m->color == null ? '#596CFF' : $m->color }} !important;
                                        margin-top:{{ $m->y_axis }}px;
                                        margin-left:{{ $m->x_axis }}px;
                                        "></i>

                                    <a class="h{{ fontsize($m->size) }}" href="{{ $m->url }}"
                                        style="
                                        position: absolute;
                                        margin-top:{{ $m->y_axis + ypos($m->size) }}px;
                                        margin-left:{{ $m->x_axis + xpos($m->size, strlen($m->menu_name)) }}px;
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

@endsection
