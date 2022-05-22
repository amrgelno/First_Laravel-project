<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trust</title>
</head>
<body>
    <h2>رسالة الى الموقع</h2>
    <div style="direction: rtl">
        <p><p style="color: rgb(155, 22, 22)"><b>الاسم:</b></p> <?php echo e($name); ?> </p>
        

        <p><p style="color: rgb(155, 22, 22)"><b>البريد الالكتروني</b>:</p> <?php echo e($email); ?></p>
       

        <p><p style="color: rgb(155, 22, 22)"><b>عنوان الرسالة:</b></p> <?php echo e($subject); ?></p>
        

        <p><p style="color: rgb(155, 22, 22)"><b>نص الرسالة:</b></p></p>
        <p><?php echo e($msg); ?></p>                  
    </div>
      
</body>
</html><?php /**PATH /srv/disk1/3779274/www/trustklusbedrijf.nl/resources/views/emails/message.blade.php ENDPATH**/ ?>