<?php $__env->startSection('content'); ?>
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
                                    <th></th>
                                </tr>
                                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <input type="text" class="edits_menu_name" value="<?php echo e($m->menu_name); ?>"
                                                data-id="<?php echo e($m->id); ?>" data-type="menu">
                                        </td>
                                        <td>
                                            <input type="text" class="edits_size" value="<?php echo e($m->size); ?>"
                                                data-id="<?php echo e($m->id); ?>" data-type="size">
                                        </td>
                                        <td>
                                            <input type="text" class="edits_y_axis" value="<?php echo e($m->y_axis); ?>"
                                                data-id="<?php echo e($m->id); ?>" data-type="y_axis">
                                        </td>
                                        <td>
                                            <input type="text" class="edits_x_axis" value="<?php echo e($m->x_axis); ?>"
                                                data-id="<?php echo e($m->id); ?>" data-type="x_axis">
                                        </td>
                                        <td>
                                            <input type="text" class="edits_spin" value="<?php echo e($m->spin); ?>"
                                                data-id="<?php echo e($m->id); ?>" data-type="spin">
                                        </td>
                                        <td>
                                            <input type="text" class="edits_url" value="<?php echo e($m->url); ?>"
                                                data-id="<?php echo e($m->id); ?>" data-type="url">
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger deluser"
                                                            data-id="<?php echo e($m->id); ?>"><i
                                                                class="material-icons icon-16pt">delete</i></button>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="menu_name"
                                    value="<?php echo e(old('name')); ?>" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="size" class="col-md-4 control-label">Size</label>
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <select name="size">
                                        
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
                        <div class="form-group">
                            <label for="y_axis" class="col-md-4 control-label">Y-Axis</label>
                            <div class="col-md-12">
                                <input id="y_axis" type="text" class="form-control" name="y_axis"
                                    value="<?php echo e(old('y_axis')); ?>" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="x_axis" class="col-md-4 control-label">X-Axis</label>
                            <div class="col-md-12">
                                <input id="x_axis" type="text" class="form-control" name="x_axis"
                                    value="<?php echo e(old('x_axis')); ?>" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="spin" class="col-md-4 control-label">Spin</label>
                            <div class="col-md-12">
                                <select name="spin">
                                    <option value="0">Normal Spin</option>
                                    <option value="1">Back Spin</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="url" class="col-md-4 control-label">URL</label>
                            <div class="col-md-12">
                                <input id="url" type="text" class="form-control" name="url"
                                    value="<?php echo e(old('url')); ?>" required autofocus>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ima_menu2\resources\views/menu.blade.php ENDPATH**/ ?>