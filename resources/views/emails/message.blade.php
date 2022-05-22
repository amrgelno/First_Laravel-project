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
        <p><p style="color: rgb(155, 22, 22)"><b>الاسم:</b></p> {{ $name }} </p>
        

        <p><p style="color: rgb(155, 22, 22)"><b>البريد الالكتروني</b>:</p> {{ $email }}</p>
       

        <p><p style="color: rgb(155, 22, 22)"><b>عنوان الرسالة:</b></p> {{ $subject }}</p>
        

        <p><p style="color: rgb(155, 22, 22)"><b>نص الرسالة:</b></p></p>
        <p>{{ $msg }}</p>                  
    </div>
      
</body>
</html>