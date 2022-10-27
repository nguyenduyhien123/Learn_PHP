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
        $sql="SELECT username FROM dang-nhap";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result))
        {
            if($row == $_POST['username'])
            {
                $error='Tên người dùng đã có, không thể đăng kí được';
                exit(1);
            }
        }
        $user=$_POST['username'];
        $pass=$_POST['password'];
        $email=$_POST['email'];
        $tel=$_POST['tel'];
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $date_cur=date('L,d/m/Y H:i:s',time());
        $table='dangki';
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