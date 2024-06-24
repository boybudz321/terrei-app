<aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl  fixed-start ms-3 bg-gradient-dark"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="#">
                <img src="<?php echo e(asset('r34l/assets/img/logo-ct-dark.png')); ?>" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Terrei App</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">

        <div class="collapse navbar-collapse w-auto h-75" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo e(route('home')); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-gear "></i><span class="text-xs"></span>
                        </div>
                        <span class="nav-link-text"><?php echo e(('Home')); ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo e(route('edit')); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-gear "></i><span class="text-xs"></span>
                        </div>
                        <span class="nav-link-text"><?php echo e(('Edit')); ?></span>
                    </a>
                </li>

            </ul>
        </div>
        <div class="sidenav-footer position-absolute w-100 bottom-0 ">
            <div class="mx-3">
                <div class="d-flex justify-content-center">
                    
                </div>
            </div>
        </div>
    </aside>
<?php /**PATH C:\xampp\htdocs\ima_menu2\resources\views/layouts2/admincp/sidepanel.blade.php ENDPATH**/ ?>