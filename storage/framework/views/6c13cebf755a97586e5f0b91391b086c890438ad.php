<!-- Top Bar Start -->
<div class="top-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="logo">
                    <a href="<?php echo e(route('home')); ?>">
                        <h1>Trust Klusbedrijf</h1>
                        <!-- <img src="img/logo.jpg" alt="Logo"> -->
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 d-none d-lg-block">
                <div class="row">
                    <div class="col-4">
                        <div class="top-bar-item" style="justify-content: left;">
                            
                            <img src="<?php echo e(asset('img/logo_dark.png')); ?>" width="40%" style="float: left">
                        </div>
                    </div>
                    <div class="col-4" style="display: flex; align-items: center;">
                        <div class="top-bar-item" >
                            <div class="top-bar-icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3><?php echo e(__('lang.call_us')); ?></h3>
                                <p>+031 6 3333 0410</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4" style="display: flex; align-items: center;">
                        <div class="top-bar-item" >
                            <div class="top-bar-icon">
                                <i class="flaticon-send-mail"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3><?php echo e(__('lang.email_us')); ?></h3>
                                <p>info@trsutklusbedrijif.nl</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar End --><?php /**PATH E:\Laravel Projects\trustklusbedrijf\resources\views/front/include/top_bar.blade.php ENDPATH**/ ?>