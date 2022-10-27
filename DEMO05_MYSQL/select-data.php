<?php
$host='localhost';
$username='root';
$password='';
$dbname='user-data';
$conn=mysqli_connect($host,$username,$password,$dbname);
if(!$conn)
{
    die('Failed');
    exit(1);
}
echo 'Successfully';
$table='hocsinh';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tra cứu điểm học sinh</title>
    <style>
        .container {
            border: 2px solid red;
        }
        table
        {
            border-collapse:collapse ;
        }
        th {
            color: white;
            background-color: deepskyblue;
            width:7.5rem;
        }
        td
        {
            width:7.5rem;
            border:2px solid red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tra cứu điểm của học sinh</h2>
        <form action="select-data.php" method="GET">
            <label for="MAHS">Nhập mã học sinh</label>
            <input type="text" name="MAHS" id="MAHS" placeholder="Nhập mã học sinh"><br>
            <button type="submit">Tra cứu</button>
        </form>
        <?php
    if(isset($_GET['MAHS']))
    {
        if(empty($_GET['MAHS']))
        {
            die('Chưa nhập mã học sinh');
            exit(1);
        }
        $MAHS=$_GET['MAHS'];
        $query="SELECT MONHOC AS 'MÔN HỌC',DIEMMIENG AS 'MIỆNG',DIEM15PHUT AS '15 PHÚT', DIEMGIUAKY AS 'GIỮA KỲ',DIEMCUOIKY AS 'CUỐI KÌ',ROUND((DIEMMIENG+DIEM15PHUT+DIEMGIUAKY*2+DIEMCUOIKY*3)/7,2) AS 'ĐIỂM TRUNG BÌNH' FROM MONHOC MH,DIEMSO DS WHERE MH.MAMH=DS.MAMH AND MAHS=$MAHS";
        $result=mysqli_query($conn,$query);
        $aa =true;
        while($row=mysqli_fetch_assoc($result)){
            $arr_key;
            if($aa){
        $arr_key=array_keys($row);
        ?>
                <table>
                    <tr>
                        <?php
        foreach($arr_key as $value)
        {
            if(!$aa){
                break;
            }
    ?>
                <th>
                    <?php echo $value;?>
                </th>
        <?php
        }
        $aa=!$aa;
}
?>
</tr>
        <tr>
            <?php
foreach($arr_key as $val)
        {
            ?>
            <td>
                <?php echo $row[$val] ?>
            </td>
            <?php
    }
    ?>
        </tr>
        <?php
        }
        }
        ?>
 </table>
    </div>
</body>
</html>