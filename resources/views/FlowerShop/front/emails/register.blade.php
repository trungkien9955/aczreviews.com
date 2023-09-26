<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body style = "font-family: Arial, Helvetica, sans-serif;">
    <h3 style = "margin-top: 24px">Xin chào, {{$name}}!</h3>
    <p>Chào mừng quý khách đến với FlowerShop,</p>
    <p style = "margin-bottom: 12px;">Tài khoản của quý khách đã được tạo thành công. Thông tin tài khoản của quý khách như sau:</p>
    <table style = "width: 50%;">
        <tr>
            <td><b>Tên:</b></td>
            <td>{{$name}}</td>
        </tr>
        <tr >
            <td><b>Email:</b></td>
            <td>{{$email}}</td>
        </tr>
        <tr>
            <td><b>Điện thoại:</b></td>
            <td>{{$mobile}}</td>
        </tr>
    </table>
    <p style = "margin-top: 12px;"><i>Cảm ơn quý khách!</i></p>
    <p>FlowerShop,</p>
</body>
</html>