<?php
$host="localhost";
$username="duyhien";
$password="duyhien123";
$dbname="user-data";
$conn=new mysqli($host,$username,$password,$dbname);
if($conn->connect_error)
{
    die('Failed connection ').$conn->connect_error;
}
echo "Successful connection".'<br>';
if(!empty($_POST['fullname']) && !empty($_POST['sex']) && !empty($_POST['birth']) && !empty($_POST['address']))
{
    $fullname=$_POST['fullname'];
    $sex=$_POST['sex'];
    $birth=$_POST['birth'];
    $address=$_POST['address'];
    $table='thongtincoban';
    $sql="INSERT INTO $table (fullname,sex,birth,address) VALUES ('$fullname','$sex','$birth','$address')";
    if($conn->query($sql)=== true)
    {
        echo 'Save information successfully';
    }
    else
    {
        echo 'Save information failed'.$conn->error;
    }
}
else{
    echo 'Bạn vui lòng nhập đầy đủ dữ liệu nha';
}
?>