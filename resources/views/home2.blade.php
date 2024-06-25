@extends('layouts2.admincp.master')

@section('title', 'Home')

@section('css')
    <link type="text/css" href="{{ asset('assets/vendor/toastr.min.css') }}" rel="stylesheet">
    <style>
        .bg-gradient-primary {
            box-shadow: 0 3px 3px 0 rgba(64, 147, 255, 0.15), 0 3px 1px -2px rgba(7, 58, 136, 0.2), 0 1px 5px 0 rgba(64, 147, 255, 0.15) !important;
        }
        .fill {
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100%;

        }
    </style>
@endsection

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
    return $e/6;
    // switch ($e) {
    //     case 5:
    //         return 5;
    //         break;
    //     case 6:
    //         return 5;
    //         break;
    //     case 7:
    //         return 4;
    //         break;
    //     case 8:
    //         return 3;
    //         break;
    //     case 9:
    //         return 2;
    //         break;
    //     case 10:
    //         return 1;
    //         break;

    //     default:
    //         # code...
    //         break;
    // }
}

function xpos($e, $l)
{
    switch ($e) {
        case 5:
            return (($e * 6) + 10) - ($l * 3);
            break;
        case 6:
            return (($e * 5) + 10) - ($l * 3);
            break;
        case 7:
            return (($e * 5) + 10) - ($l * 3);
            break;
        case 8:
            return (($e * 5) + 10) - ($l * 3);
            break;
        case 9:
            return (($e * 5) + 10) - ($l * 5);
            break;
        case 10:
            return (($e * 5) + 10) - ($l * 5);
            break;
        case 20:
            return (($e * 5) + 10) - ($l * 10);
        break;
        default:
            # code...
            break;
    }
}

function ypos($e)
{
    switch ($e) {
        case 3:
            return ($e * 7) - 5;
            break;
        case 4:
            return ($e * 7) - 5;
            break;
        case 5:
            return ($e * 6) - 5;
            break;
        case 6:
            return ($e * 7) - 5;
            break;
        case 7:
            return ($e * 6) - 5;
            break;
        case 8:
            return ($e * 6) - 5;
            break;
        case 9:
            return ($e * 6) - 5;
            break;
        case 10:
            return ($e * 6) - 5;
            break;
        case 20:
            return ($e * 6) - 5;
            break;
        default:
            # code...
            break;
    }
}
$i= 0;
$className = 'st';
@endphp


@section('contents')
    {{-- <div class="row">
        @include('layouts2.admincp.nav')
    </div> --}}
    <div class="row">
        <div class="col-12" style="margin-top: 80px;">
            <div class="card" data-animation="true">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="d-block blur-shadow-image" style="height:10vh !important;">
                        <div class="row">
                            <div class="col-6" style="height:10vh !important;">
                                <img class="img-fluid fill" src="{{ asset('r34l/img/terrei_group.png') }}" alt="" style="height:10vh !important;">
                            </div>
                            <div class="col-6" style="height:10vh !important;">
                                <div class="row">
                                    <div class="col">
                                        <img class="img-fluid fill" src="{{ asset('r34l/img/iblea_logo.png') }}" alt="" style="height:10vh !important;">
                                    </div>
                                    <div class="col">
                                        <img class="img-fluid fill" src="{{ asset('r34l/img/ima_logo.png') }}" alt="" style="height:10vh !important;">
                                    </div>
                                    <div class="col">
                                        <img class="img-fluid fill" src="{{ asset('r34l/img/elburg_logo.png') }}" alt="" style="height:10vh !important;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="container-fluid" style="height:900px;">
                        <div class="row">
                            <div class="col-12" style="margin-left: 10%">
                                @foreach ($menus as $m)
                                    @php
                                        $i++;
                                        $className .= $i;
                                    @endphp
                                    @if ($m->spin == 0)
                                        <div class="">
                                            {{-- <i class="gear fa fa-{{ $m->size }}x fa-gear spin" style="margin-top:{{ $m->y_axis }}px; margin-left:{{ $m->x_axis }}px; color: #{{ random_color() }} !important;"></i> --}}

                                                <div>
                                                    <svg
                                                    class="gear spin"
                                                    width="{{ $m->size * 15 }}px"
                                                    height="{{ $m->size * 15 }}px"
                                                    style="
                                                        margin-top:{{ $m->y_axis }}px;
                                                        margin-left:{{ $m->x_axis }}px;"
                                                    version="1.1"
                                                    id="_x32_"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    viewBox="-15.36 -15.36 542.72 542.72"
                                                    xml:space="preserve"
                                                    fill="{{ $m->color }}"
                                                    stroke="{{ $m->color }}"
                                                    stroke-width="7.168000000000001">
                                                    <g id="SVGRepo_bgCarrier"
                                                    stroke-width="0"
                                                    transform="translate(117.75999999999999,117.75999999999999), scale(0.54)">
                                                    <rect x="-15.36" y="-15.36" width="542.72" height="542.72" rx="271.36" fill="{{ $m->color }}" strokewidth="0"></rect></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier"> <style type="text/css">  .{{ $className }}{fill:{{ $m->color }};}  </style>
                                                        <g>
                                                            <path class="{{ $className }}" d="M496,293.984c9.031-0.703,16-8.25,16-17.297v-41.375c0-9.063-6.969-16.594-16-17.313l-54.828-4.281 c-3.484-0.266-6.484-2.453-7.828-5.688l-18.031-43.516c-1.344-3.219-0.781-6.906,1.5-9.547l35.75-41.813 c5.875-6.891,5.5-17.141-0.922-23.547l-29.25-29.25c-6.406-6.406-16.672-6.813-23.547-0.922l-41.813,35.75 c-2.641,2.266-6.344,2.844-9.547,1.516l-43.531-18.047c-3.219-1.328-5.422-4.375-5.703-7.828l-4.266-54.813 C293.281,6.969,285.75,0,276.688,0h-41.375c-9.063,0-16.594,6.969-17.297,16.016l-4.281,54.813c-0.266,3.469-2.469,6.5-5.688,7.828 l-43.531,18.047c-3.219,1.328-6.906,0.75-9.563-1.516l-41.797-35.75c-6.875-5.891-17.125-5.484-23.547,0.922l-29.25,29.25 c-6.406,6.406-6.797,16.656-0.922,23.547l35.75,41.813c2.25,2.641,2.844,6.328,1.5,9.547l-18.031,43.516 c-1.313,3.234-4.359,5.422-7.813,5.688L16,218c-9.031,0.719-16,8.25-16,17.313v41.359c0,9.063,6.969,16.609,16,17.313l54.844,4.266 c3.453,0.281,6.5,2.484,7.813,5.703l18.031,43.516c1.344,3.219,0.75,6.922-1.5,9.563l-35.75,41.813 c-5.875,6.875-5.484,17.125,0.922,23.547l29.25,29.25c6.422,6.406,16.672,6.797,23.547,0.906l41.797-35.75 c2.656-2.25,6.344-2.844,9.563-1.5l43.531,18.031c3.219,1.344,5.422,4.359,5.688,7.844l4.281,54.813 c0.703,9.031,8.234,16.016,17.297,16.016h41.375c9.063,0,16.594-6.984,17.297-16.016l4.266-54.813 c0.281-3.484,2.484-6.5,5.703-7.844l43.531-18.031c3.203-1.344,6.922-0.75,9.547,1.5l41.813,35.75 c6.875,5.891,17.141,5.5,23.547-0.906l29.25-29.25c6.422-6.422,6.797-16.672,0.922-23.547l-35.75-41.813 c-2.25-2.641-2.844-6.344-1.5-9.563l18.031-43.516c1.344-3.219,4.344-5.422,7.828-5.703L496,293.984z M256,342.516 c-23.109,0-44.844-9-61.188-25.328c-16.344-16.359-25.344-38.078-25.344-61.203c0-23.109,9-44.844,25.344-61.172 c16.344-16.359,38.078-25.344,61.188-25.344c23.125,0,44.844,8.984,61.188,25.344c16.344,16.328,25.344,38.063,25.344,61.172 c0,23.125-9,44.844-25.344,61.203C300.844,333.516,279.125,342.516,256,342.516z"></path> </g>
                                                        </g>
                                                    </svg>
                                                </div>

                                            <a class=""
                                            href="{{ $m->url }}"
                                                style="
                                                font-size: {{ fontsize($m->size) }}em;
                                                position: absolute;
                                                margin-top:{{ $m->y_axis + ypos($m->size) }}px;
                                                margin-left:{{ $m->x_axis + xpos($m->size, strlen($m->menu_name)) }}px;
                                                ">{{ $m->menu_name }}</a>

                                        </div>
                                    @else
                                        <div class="">

                                            {{-- <i class="gear fa fa-{{ $m->size }}x fa-gear spin" style="margin-top:{{ $m->y_axis }}px;margin-left:{{ $m->x_axis }}px; color: #{{ random_color() }};"></i> --}}
                                            <div>
                                                <svg
                                                class="gear spin-back"
                                                width="{{ $m->size * 15 }}px"
                                                height="{{ $m->size * 15 }}px"
                                                style="
                                                    margin-top:{{ $m->y_axis }}px;
                                                    margin-left:{{ $m->x_axis }}px;"
                                                version="1.1"
                                                id="_x32_"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                viewBox="-15.36 -15.36 542.72 542.72"
                                                xml:space="preserve"
                                                fill="{{ $m->color }}"
                                                stroke="{{ $m->color }}"
                                                stroke-width="7.168000000000001">
                                                <g id="SVGRepo_bgCarrier"
                                                stroke-width="0"
                                                transform="translate(117.75999999999999,117.75999999999999), scale(0.54)">
                                                <rect x="-15.36" y="-15.36" width="542.72" height="542.72" rx="271.36" fill="{{ $m->color }}" strokewidth="0"></rect></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier"> <style type="text/css">  .{{ $className }}{fill:{{ $m->color }};}  </style>
                                                    <g>
                                                        <path class="{{ $className }}" d="M496,293.984c9.031-0.703,16-8.25,16-17.297v-41.375c0-9.063-6.969-16.594-16-17.313l-54.828-4.281 c-3.484-0.266-6.484-2.453-7.828-5.688l-18.031-43.516c-1.344-3.219-0.781-6.906,1.5-9.547l35.75-41.813 c5.875-6.891,5.5-17.141-0.922-23.547l-29.25-29.25c-6.406-6.406-16.672-6.813-23.547-0.922l-41.813,35.75 c-2.641,2.266-6.344,2.844-9.547,1.516l-43.531-18.047c-3.219-1.328-5.422-4.375-5.703-7.828l-4.266-54.813 C293.281,6.969,285.75,0,276.688,0h-41.375c-9.063,0-16.594,6.969-17.297,16.016l-4.281,54.813c-0.266,3.469-2.469,6.5-5.688,7.828 l-43.531,18.047c-3.219,1.328-6.906,0.75-9.563-1.516l-41.797-35.75c-6.875-5.891-17.125-5.484-23.547,0.922l-29.25,29.25 c-6.406,6.406-6.797,16.656-0.922,23.547l35.75,41.813c2.25,2.641,2.844,6.328,1.5,9.547l-18.031,43.516 c-1.313,3.234-4.359,5.422-7.813,5.688L16,218c-9.031,0.719-16,8.25-16,17.313v41.359c0,9.063,6.969,16.609,16,17.313l54.844,4.266 c3.453,0.281,6.5,2.484,7.813,5.703l18.031,43.516c1.344,3.219,0.75,6.922-1.5,9.563l-35.75,41.813 c-5.875,6.875-5.484,17.125,0.922,23.547l29.25,29.25c6.422,6.406,16.672,6.797,23.547,0.906l41.797-35.75 c2.656-2.25,6.344-2.844,9.563-1.5l43.531,18.031c3.219,1.344,5.422,4.359,5.688,7.844l4.281,54.813 c0.703,9.031,8.234,16.016,17.297,16.016h41.375c9.063,0,16.594-6.984,17.297-16.016l4.266-54.813 c0.281-3.484,2.484-6.5,5.703-7.844l43.531-18.031c3.203-1.344,6.922-0.75,9.547,1.5l41.813,35.75 c6.875,5.891,17.141,5.5,23.547-0.906l29.25-29.25c6.422-6.422,6.797-16.672,0.922-23.547l-35.75-41.813 c-2.25-2.641-2.844-6.344-1.5-9.563l18.031-43.516c1.344-3.219,4.344-5.422,7.828-5.703L496,293.984z M256,342.516 c-23.109,0-44.844-9-61.188-25.328c-16.344-16.359-25.344-38.078-25.344-61.203c0-23.109,9-44.844,25.344-61.172 c16.344-16.359,38.078-25.344,61.188-25.344c23.125,0,44.844,8.984,61.188,25.344c16.344,16.328,25.344,38.063,25.344,61.172 c0,23.125-9,44.844-25.344,61.203C300.844,333.516,279.125,342.516,256,342.516z"></path> </g>
                                                    </g>
                                                </svg>
                                            </div>

                                            <a class="" href="{{ $m->url }}"
                                                style="

                                                font-size: {{ fontsize($m->size) }}em;
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
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>

@endsection
