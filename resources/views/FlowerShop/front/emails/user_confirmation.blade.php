<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body style = "font-family: Arial, Helvetica, sans-serif;">
    <h3 style = "margin-top: 24px">Xin chào, {{$name}}!</h3>
    <p>Cảm ơn quý khách đã đăng ký tài khoản FlowerShop,</p>
    <p style = "margin-bottom: 12px;">Vui lòng nhấp vào đường link dưới đây để xác nhận đăng ký tài khoản:</p>
    <a href = "{{url('/user/confirm/'.$code)}}">Xác nhận đăng ký tài khoản</a>

    <p style = "margin-top: 12px;"><i>Cảm ơn quý khách!</i></p>
    <p>FlowerShop,</p>
</body>
</html>