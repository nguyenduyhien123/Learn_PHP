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
echo '<form action="connect-buy.php" method="POST">';
for($a=0;$a < $i;$a++)
{
    $ID=$arr[$a]['MASP'];
    $A1=$arr[$a]['TENSP'];
    $B1=$arr[$a]['SOLUONG'];
    $C1=$arr[$a]['DONGIA'];
    echo '<div class="container">';
    echo "<h1 class=\"product\"> $A1</h1>";
    echo "<h3 class=\"count\">Số lượng : $B1</h3>";
    echo "<input type=\"number\" class=\"price\" id=\"price$ID\" value=\"$C1\" hidden >";
    echo "<h2>Đơn giá: $C1</h2>";
    echo "<span>Chọn số lượng mua :</span><input type=\"range\" name=\"$ID\" min=\"0\" max=\"1000\" step=\"1\" value=\"0\" id=\"$ID\"><span id=\"display$ID\" >0</span>";
    echo "<h2 id=\"total$ID\">Thành tiền: 0 VND</h2>";
    echo '</div>';
}
echo '<button type="submit">Mua hàng</button>';
echo '</form>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web mua hàng online</title>
    <style>
        *
        {
            border:0;
            padding:0;
            box-sizing: border-box;
            font-family: 'Times New Roman', Times, serif;
            text-align: center;
        }
        .container
        {
            border:2px solid red;
            width:50%;
            text-align:center;
            float:left;
        }
        .product
        {
            color:green;
        }
        .count
        {
            color:blue
        }
        .price
        {
            color:deeppink;
        }
        span{
            font-size: 1.25rem;
            color:red;
        }
        button
        {
            width:10rem;
            font-size:2rem;
            border:2px solid red;
        }
        button:hover{
            opacity: 0.6;
        }
    </style>
</head>
<body>
    <script>
        document.getElementById('1').onchange=function()
        {
            document.getElementById('display1').innerHTML=document.getElementById('1').value;
            var price=document.getElementById('price1').value;
            var count=document.getElementById('1').value;
            var total=price*count;
            document.getElementById('total1').innerHTML='Đơn giá:'+total+' VND';
        }
        document.getElementById('2').onchange=function()
        {
            document.getElementById('display2').innerHTML=document.getElementById('2').value;
            var price=document.getElementById('price2').value;
            var count=document.getElementById('2').value;
            var total=price*count;
            document.getElementById('total2').innerHTML='Đơn giá:'+total+' VND';
        }
        document.getElementById('3').onchange=function()
        {
            document.getElementById('display3').innerHTML=document.getElementById('3').value;
            var price=document.getElementById('price3').value;
            var count=document.getElementById('3').value;
            var total=price*count;
            document.getElementById('total3').innerHTML='Đơn giá:'+total+' VND';
        }
        document.getElementById('4').onchange=function()
        {
            document.getElementById('display4').innerHTML=document.getElementById('4').value;
            var price=document.getElementById('price4').value;
            var count=document.getElementById('4').value;
            var total=price*count;
            document.getElementById('total4').innerHTML='Đơn giá:'+total+' VND';
        }
    </script>
</body>
</html>