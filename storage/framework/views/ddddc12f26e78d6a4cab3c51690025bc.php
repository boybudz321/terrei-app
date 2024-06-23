<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php
                        function random_color_part() {
                            return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
                        }

                        function random_color() {
                            return random_color_part() . random_color_part() . random_color_part();
                        }
                    ?>
                    
                    <div class="container" style="height:800px; width:800px;">
                        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($m->spin == 0): ?>
                            <div class="" >
                                
                                
                                <i class="gear fa fa-<?php echo e($m->size); ?>x fa-gear spin" style="margin-top:<?php echo e($m->y_axis); ?>px; margin-left:<?php echo e($m->x_axis); ?>px;"></i>
                                <strong>
                                    <a href="<?php echo e($m->url); ?>" style="
                                color: rgb(45, 49, 255);
                                position: absolute;
                                margin-top:<?php echo e($m->y_axis + (($m->size * 5) + 5)); ?>px;margin-left:<?php echo e($m->x_axis + (($m->size * 5) - 10)); ?>px;
                                transform: translate(-15%, -15%);"><?php echo e($m->menu_name); ?></a>
                                </strong>
                            </div>
                            
                        <?php else: ?>
                        <div class="" >
                                
                            
                            <i class="gear fa fa-<?php echo e($m->size); ?>x fa-gear spin-back" style="margin-top:<?php echo e($m->y_axis); ?>px;margin-left:<?php echo e($m->x_axis); ?>px;"></i>
                            <strong>
                                <a href="<?php echo e($m->url); ?>" style="
                             color: rgb(45, 49, 255);
                            position: absolute;
                            margin-top:<?php echo e($m->y_axis + (($m->size * 5) + 5)); ?>px;margin-left:<?php echo e($m->x_axis + (($m->size * 5) - 10)); ?>px;
                            transform: translate(-15%, -15%);"><?php echo e($m->menu_name); ?></a>
                            </strong>
                        </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ima_menu2\resources\views/home.blade.php ENDPATH**/ ?>