<?php
$error_login = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phần 03 - Bài 05 - detail</title>
    <style>
        .title {
            font-size: 2rem;
        }

        #error_login {
            color: red;
            font-style: italic;
        }

        #notification_login {
            font-size: 3rem;
        }
    </style>
</head>

<body>
    <div id="notification_login">Login</div>
    <form action="login.php" id="form_login" method="post">
        <label for="username">Tài khoản</label>
        <input type="text" required name="username" id="username" placeholder="Tên người dùng" autocomplete="off"><br>
        <label for="password">Mật khẩu</label>
        <input type="password" required name="password" id="password" placeholder="Mật khẩu" autocomplete="off"><br>
        <button type="submit" id="btn_login" name="btn_login">Đăng nhập</button><br>
        <input type="checkbox" name="save_password" id="save_password">
        <label for="save_password">Ghi nhớ mật khẩu</label>
    </form>
    <?php
    $username = 'duyhien';
    $password = '123';
    if (isset($_POST['btn_login'])) {
        if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
            if ($_POST['username'] == $username && $_POST['password'] == $password) {
                if (isset($_POST['save_password']) && !empty($_POST['save_password'])) {
                    setcookie('password', $_POST['password']);
                }
                echo '<script>
                        document.getElementsByTagName("form")[0].innerHTML="";
                        document.getElementById("notification_login").innerHTML="Đăng nhập thành công !";
                        </script>';
            } else {
                echo '<div id="error_login">Đăng nhập thất bại</div>';
            }
        }
    }
    ?>
</body>
</html>