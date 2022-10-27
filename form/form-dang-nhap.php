<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng kí thông tin tài khoản</title>
    <style>
        *
        {
            padding:0;
            margin:0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container
        {
            border:2px solid red;
            width:50%;
            margin:0 auto;
        }
        form
        {
            width:100%;
            margin:2rem;
        }
        input
        {
            padding:1rem;
        }
        label,input
        {
            width:90%;
        }
        #btn
        {
            padding:1rem 2rem;
        }
        #btn:hover
        {
            background:#0dba4b
        }
    </style>
</head>
<body>
    <h1>Trang đăng kí thông tin</h1>
    <div class="container">
    <form action="form-dang-nhap.php" method="post">
        <label for="username">Tên người dùng</label>
        <input type="text" name="username" id="username" placeholder="Nhập tên người dùng"><br>
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" id="password" placeholder="Nhập mật khẩu"><br>
        <button type="submit" id="btn">Đăng nhập</button>
    </form>
    </div>
    
</body>
</html>