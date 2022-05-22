<?php $__env->startComponent('mail::message'); ?>
# Introduction

**From:** <?php echo e($contact->name); ?> <br>
**Email:** <?php echo e($contact->email); ?> <br>
**Subject:** <?php echo e($contact->subject); ?> <br>
**message:** $<?php echo e($contact->message); ?> <br>

<?php $__env->startComponent('mail::button', ['url' => '']); ?>
Button Text
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH E:\Laravel Projects\trustklusbedrijf\resources\views/emails/message.blade.php ENDPATH**/ ?>