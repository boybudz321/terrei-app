@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @php
                        function random_color_part() {
                            return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
                        }

                        function random_color() {
                            return random_color_part() . random_color_part() . random_color_part();
                        }
                    @endphp

                    <div class="container" style="height:800px; width:800px;">
                        @foreach ($menus as $m)
                        @if ($m->spin == 0)
                            <div class="" >
                                {{-- <i class="gear fa fa-{{ $m->size }}x fa-gear spin" style="margin-top:{{ $m->y_axis }}px; margin-left:{{ $m->x_axis }}px; color: #{{ random_color() }} !important;"></i> --}}
                                <i class="gear fa fa-{{ $m->size }}x fa-gear spin" style="margin-top:{{ $m->y_axis }}px; margin-left:{{ $m->x_axis }}px;"></i>
                                <strong>
                                    <a href="{{ $m->url }}" style="
                                color: rgb(45, 49, 255);
                                position: absolute;
                                margin-top:{{ $m->y_axis + (($m->size * 5) + 5)}}px;margin-left:{{ $m->x_axis + (($m->size * 5) - 10)}}px;
                                transform: translate(-15%, -15%);">{{ $m->menu_name }}</a>
                                </strong>
                            </div>

                        @else
                        <div class="" >

                            {{-- <i class="gear fa fa-{{ $m->size }}x fa-gear spin" style="margin-top:{{ $m->y_axis }}px;margin-left:{{ $m->x_axis }}px; color: #{{ random_color() }};"></i> --}}
                            <i class="gear fa fa-{{ $m->size }}x fa-gear spin-back" style="margin-top:{{ $m->y_axis }}px;margin-left:{{ $m->x_axis }}px;"></i>
                            <strong>
                            <a href="{{ $m->url }}" style="
                            color: rgb(45, 49, 255);
                            position: absolute;
                            margin-top:{{ $m->y_axis + (($m->size * 5) + 5)}}px;margin-left:{{ $m->x_axis + (($m->size * 5) - 10)}}px;
                            transform: translate(-15%, -15%);">{{ $m->menu_name }}</a>
                            </strong>
                        </div>
                        @endif
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
