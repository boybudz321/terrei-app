<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('css'); ?>
    <link type="text/css" href="<?php echo e(asset('assets/vendor/toastr.min.css')); ?>" rel="stylesheet">
    <style>
        .bg-gradient-primary {
            box-shadow: 0 3px 3px 0 rgba(64, 147, 255, 0.15), 0 3px 1px -2px rgba(7, 58, 136, 0.2), 0 1px 5px 0 rgba(64, 147, 255, 0.15) !important;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>
    
    <div class="row">
        <div class="col-12">
            <div class="card bg-gradient-primary">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-info shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">menu</i>
                    </div>
                    <div class="text-end pt-1">
                        
                        <h4 class="mb-0">Sample Menu</h4>
                    </div>
                </div>
                <div class="card-body">
                    <?php
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
                    ?>

                    <div class="container" style="height:800px; width:800px;">
                        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($m->spin == 0): ?>
                                <div class="">
                                    
                                    <i class="gear fa fa-<?php echo e($m->size); ?>x fa-gear spin"
                                        style="
                                        color: <?php echo e($m->color == null ? '#596CFF' : $m->color); ?> !important;
                                        margin-top:<?php echo e($m->y_axis); ?>px;
                                        margin-left:<?php echo e($m->x_axis); ?>px;"></i>

                                    <a class="h<?php echo e(fontsize($m->size)); ?>" href="<?php echo e($m->url); ?>"
                                        style="
                                        position: absolute;
                                        margin-top:<?php echo e($m->y_axis + ypos($m->size)); ?>px;
                                        margin-left:<?php echo e($m->x_axis + xpos($m->size, strlen($m->menu_name))); ?>px;
                                        "><?php echo e($m->menu_name); ?></a>

                                </div>
                            <?php else: ?>
                                <div class="">

                                    
                                    <i class="gear fa fa-<?php echo e($m->size); ?>x fa-gear spin-back"
                                        style="
                                        color: <?php echo e($m->color == null ? '#596CFF' : $m->color); ?> !important;
                                        margin-top:<?php echo e($m->y_axis); ?>px;
                                        margin-left:<?php echo e($m->x_axis); ?>px;
                                        "></i>

                                    <a class="h<?php echo e(fontsize($m->size)); ?>" href="<?php echo e($m->url); ?>"
                                        style="
                                        position: absolute;
                                        margin-top:<?php echo e($m->y_axis + ypos($m->size)); ?>px;
                                        margin-left:<?php echo e($m->x_axis + xpos($m->size, strlen($m->menu_name))); ?>px;
                                        "><?php echo e($m->menu_name); ?></a>

                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts2.admincp.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ima_menu2\resources\views/home2.blade.php ENDPATH**/ ?>