<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phần 03 - Bài 05 - detail</title>
    <script src="jquery.min.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <style>
        .title
        {
            font-size: 2rem;
        }
        #error_login
        {
            color:red;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="title">Login</div>
    <form id="form_login" method="post" onsubmit="return false">
        <label for="username">Tài khoản</label>
        <input type="text" required name="username" id="username" placeholder="Tên người dùng"><br>
        <label for="password">Mật khẩu</label>
        <input type="password" required name="password" id="password" placeholder="Mật khẩu"><br>
        <button type="submit" id="btn_login" name="btn_login">Đăng nhập</button><br>
        <input type="checkbox" name="save_login" id="save_login">
        <label for="save_login">Ghi nhớ mật khẩu</label>
        <div id="error_login"></div>
    </form>
    <script>
        function LogIn()
        {
            var user=document.getElementById('username').value;
            var pass=document.getElementById('password').value;
            var save_login=document.getElementById('save_login').value;
            $.ajax(
                {
                    url: 'connect_login.php',
                    type: 'POST',
                    data:
                    {
                        username:user,
                        password:pass,
                        save_login: save_login,
                    },
                    success: function(response)
                    {
                        if(response == '0')
                        {
                            document.getElementById('error_login').innerHTML='Đăng nhập thất bại';
                        }
                        else if(response == '1')
                        {
                            window.location.href='index.php'
                         }
                    }
                });
        }
        document.getElementById('btn_login').onclick=LogIn;
    </script>
</body>
</html>