<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password']))
{
    $user='duyhien';
    $pass='123';
    if($_POST['username'] == $user && $_POST['password'] == $pass)
    {

        $_SESSION['username']=$_POST['username'];
        if(isset($_POST['save_login']) && $_POST['save_login']='true')
        {
            setcookie('pass',$_POST['username']);
            // mật khẩu sẽ hết hạn trong 24h nữa
        }
        echo 1;
        exit();
    }
    else
    {
        echo 0;
        exit();
    }
}
else
{
    header('location:index.php');
}
