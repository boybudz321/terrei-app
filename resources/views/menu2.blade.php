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
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <h5>Menu</h5>
                            </div>
                            <div class="col-12">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Add Menu
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>Menu</th>
                                <th>Size</th>
                                <th>Y-Axis</th>
                                <th>X-Axis</th>
                                <th>Spin</th>
                                <th>URL</th>
                                <th>Color</th>
                                <th></th>
                            </tr>
                            @foreach ($menus as $m)
                                <tr>
                                    <td>
                                        <input type="text" class="edits_menu_name" value="{{ $m->menu_name }}"
                                            data-id="{{ $m->id }}" data-type="menu">
                                    </td>
                                    <td>
                                        <input type="text" class="edits_size" value="{{ $m->size }}"
                                            data-id="{{ $m->id }}" data-type="size">
                                    </td>
                                    <td>
                                        <input type="text" class="edits_y_axis" value="{{ $m->y_axis }}"
                                            data-id="{{ $m->id }}" data-type="y_axis">
                                    </td>
                                    <td>
                                        <input type="text" class="edits_x_axis" value="{{ $m->x_axis }}"
                                            data-id="{{ $m->id }}" data-type="x_axis">
                                    </td>
                                    <td>
                                        <input type="text" class="edits_spin" value="{{ $m->spin }}"
                                            data-id="{{ $m->id }}" data-type="spin">
                                    </td>
                                    <td>
                                        <input type="text" class="edits_url" value="{{ $m->url }}"
                                            data-id="{{ $m->id }}" data-type="url">
                                    </td>
                                    <td>
                                        <input type="text" class="edits_color" value="{{ $m->color }}"
                                            data-id="{{ $m->id }}" data-type="color">
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger deluser"
                                                        data-id="{{ $m->id }}"><i
                                                            class="material-icons icon-16pt">delete</i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="userform">
            <div class="modal-body">

                    {{ csrf_field() }}
                    <div class="input-group input-group-outline my-3">
                        <label for="name" class="col-md-4 control-label">Name</label>
                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control" name="menu_name"
                                value="{{ old('name') }}" required autofocus>
                        </div>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label for="size" class="col-md-4 control-label">Size</label>
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <select name="size">
                                    {{-- <option value="1">fa-1x</option>
                                    <option value="2">fa-2x</option>
                                    <option value="3">fa-3x</option>
                                    <option value="4">fa-4x</option> --}}
                                    <option value="5">fa-5x</option>
                                    <option value="6">fa-6x</option>
                                    <option value="7">fa-7x</option>
                                    <option value="8">fa-8x</option>
                                    <option value="9">fa-9x</option>
                                    <option value="10">fa-10x</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label for="y_axis" class="col-md-4 control-label">Y-Axis</label>
                        <div class="col-md-12">
                            <input id="y_axis" type="text" class="form-control" name="y_axis"
                                value="{{ old('y_axis') }}" required autofocus>
                        </div>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label for="x_axis" class="col-md-4 control-label">X-Axis</label>
                        <div class="col-md-12">
                            <input id="x_axis" type="text" class="form-control" name="x_axis"
                                value="{{ old('x_axis') }}" required autofocus>
                        </div>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label for="spin" class="col-md-4 control-label">Spin</label>
                        <div class="col-md-12">
                            <select name="spin">
                                <option value="0">Normal Spin</option>
                                <option value="1">Back Spin</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label for="url" class="col-md-4 control-label">URL</label>
                        <div class="col-md-12">
                            <input id="url" type="text" class="form-control" name="url"
                                value="{{ old('url') }}" required autofocus>
                        </div>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label for="color" class="col-md-4 control-label">Color #FFFFF (hex format)</label>
                        <div class="col-md-12">
                            <input id="color" type="text" class="form-control" name="color"
                                value="{{ old('color') }}" required autofocus>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
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
            $('body').on('keyup', '.edits_color', function(e) {
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
