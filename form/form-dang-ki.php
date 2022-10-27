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
            margin-top:0.5rem;
            font-size:1.25rem;
        }
        #btn
        {
            padding:1rem 2rem;
            margin-top:0.5rem;
            font-size: 1.5rem;
        }
        #btn:hover
        {
            background:#0dba4b
        }
        .header
        {
            text-align:center;
            padding:1rem;
        }
    </style>
</head>
<body>
    <h1 class="header">Trang đăng kí thông tin</h1>
    <div class="container">
    <form action="form-dang-ki.php" method="post">
        <label for="username">Tên người dùng</label>
        <input type="text" name="username" id="username" placeholder="Nhập tên người dùng"><br>
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" id="password" placeholder="Nhập mật khẩu"><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Nhập email"><br>
        <label for="tel">Số điện thoại</label>
        <input type="tel" name="tel" id="tel" placeholder="Nhập số điện thoại"><br>
        <button type="submit" id="btn">Đăng kí</button>
    </form>
    </div>
</body>
<?php
$host="localhost";
$username="duyhien";
$password="duyhien123";
$dbname="user-data";
$conn=new mysqli($host,$username,$password,$dbname);
if($conn->connect_error)
{
    die('Failed connection').$conn->connect_error;
}
echo 'Successfully connection'.'<br>';
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['tel']))
{
    if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['tel']))
    {
        $sql="SELECT username FROM dangnhap";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result))
        {
            if($row == $_POST['username'])
            {
                $error='Tên người dùng đã có, không thể đăng kí được';
                echo $error;
                exit(1);
            }
        }
        $user=$_POST['username'];
        $pass=$_POST['password'];
        $email=$_POST['email'];
        $tel=$_POST['tel'];
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $date_cur=date('d/m/Y H:i:s',time());
        $table='dangnhap';
        $sql="INSERT INTO $table (username,password,email,tel,ngaydangki) VALUES ('$user','$pass','$email','$tel','$date_cur')";
        if($conn->query($sql))
        {
            echo 'Bạn đã đăng kí thành công';
        }
        else
        {
            echo 'Lỗi, vui lòng đăng kí lại';
        }
    }
    else
    {
        echo 'Bạn vui lòng nhập đầy đủ các thông tin';
    }
}
?>
</html>