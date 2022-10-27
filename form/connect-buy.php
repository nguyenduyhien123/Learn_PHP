<?php
$host='localhost';
$username='duyhien';
$password='duyhien123';
$dbname='user-data';
$conn=new mysqli($host,$username,$password,$dbname);
$table='sanpham';
$sql1="SELECT * FROM $table";
$result=$conn->query($sql1);
$i=0;
while($row=mysqli_fetch_assoc($result))
{
    $arr[$i]['MASP']=$row['MASP'];
    $arr[$i]['TENSP']=$row['TENSP'];
    $arr[$i]['SOLUONG']=$row['SOLUONG'];
    $arr[$i]['DONGIA']=$row['DONGIA'];
    $i++;
    // echo $row['MASP'].' '.$row['TENSP'].' '.$row['SOLUONG'].' '.$row['DONGIA'];
}
?>