<!DOCTYPE html>
<html lang="en">
    <?php echo $__env->make('front.include.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <body>
        <div class="wrapper">

        <?php echo $__env->make('front.include.top_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('front.include.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('front.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
        
    <?php echo $__env->make('front.include.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('script'); ?>

    </body>
</html><?php /**PATH E:\Laravel Projects\trustklusbedrijf\resources\views/front/include/layout.blade.php ENDPATH**/ ?>