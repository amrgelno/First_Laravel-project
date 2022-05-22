<!-- Nav Bar Start -->
<div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="<?php echo e(route('home')); ?>" class="nav-item nav-link"><?php echo e(__('lang.home')); ?></a>
                    <a href="<?php echo e(route('about')); ?>" class="nav-item nav-link"><?php echo e(__('lang.about')); ?></a>
                    
                    <a href="<?php echo e(route('projects')); ?>" class="nav-item nav-link"><?php echo e(__('lang.projects_gallery')); ?></a>            
                    <a href="<?php echo e(route('contact')); ?>" class="nav-item nav-link"><?php echo e(__('lang.contact')); ?></a>
                </div>
              
            </div>
            
            <div class="nav-item dropdown">
                                
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
                
                <img src="<?php echo e(asset('img/'.Config::get('languages')[App::getLocale()]['flag-icon'].'.svg')); ?>" width="25px" >
                 <?php echo e(Config::get('languages')[App::getLocale()]['display']); ?>

                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <?php $__currentLoopData = Config::get('languages'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($lang != App::getLocale() && $lang != 'ar'): ?>
                            <a class="dropdown-item" href="<?php echo e(route('lang.switch', $lang)); ?>"><img src="<?php echo e(asset('img/'.$language['flag-icon'].'.svg')); ?>" width="25px" > <?php echo e($language['display']); ?></a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>          
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End --><?php /**PATH /srv/disk1/3779274/www/trustklusbedrijf.nl/resources/views/front/include/navigation.blade.php ENDPATH**/ ?>