<?php $__env->startSection('content'); ?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php echo e(__('lang.contact')); ?></h2>
            </div>            
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="contact wow fadeInUp">
    <div class="container">

        <div class="text-center">
            <?php if(\Session::has('message')): ?>
                <div class="alert alert-success text-center">                            
                    <?php echo \Session::get('message'); ?></li>                            
                </div>
            <?php endif; ?>

            <?php if($errors->any()): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-danger text-center">                            
                        <?php echo $error; ?></li>                            
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        </div>


        <div class="section-header text-center">
            <p><?php echo e(__('lang.get_in_touch')); ?></p>
            <h2><?php echo e(__('lang.for_query')); ?></h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="flaticon-address"></i>
                        <div class="contact-text">
                            <h2><?php echo e(__('lang.location')); ?></h2>
                            <p>Jagrskamp 15 - 6932BV Westervoort - Nederland</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="flaticon-call"></i>
                        <div class="contact-text">
                            <h2><?php echo e(__('lang.phone')); ?></h2>
                            <p>+31 6 3333 0410</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="flaticon-send-mail"></i>
                        <div class="contact-text">
                            <h2><?php echo e(__('lang.email')); ?></h2>
                            <p>info@trsutklusbedrijif.nl</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-form">
                    <div id="success"></div>
                    <form action="<?php echo e(route('send_message')); ?>" method="POST" name="sentMessage" id="contactForm" >
                        <?php echo csrf_field(); ?>
                        <div class="control-group">
                            <input type="text" class="form-control" name="name" id="name"  placeholder="<?php echo e(__('lang.your_name')); ?>"  data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo e(__('lang.your_mail')); ?>"  data-validation-required-message="Please enter your email" required />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="<?php echo e(__('lang.subject')); ?>"  data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" name="message" id="message" placeholder="<?php echo e(__('lang.message')); ?>" data-validation-required-message="Please enter your message" required ></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn" type="submit" id="sendMessageButton"><?php echo e(__('lang.send_message')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.include.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/disk1/3779274/www/trustklusbedrijf.nl/resources/views/front/contact.blade.php ENDPATH**/ ?>