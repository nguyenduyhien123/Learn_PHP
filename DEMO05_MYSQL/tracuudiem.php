<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            *
            {
                padding: 0;
                margin:0;
                box-sizing: border-box;
            }
            .container {
                margin:4rem auto;
                width:50%;
            }
            table
            {
                border-collapse:collapse ;
            }
            th {
                color: white;
                background-color: deepskyblue;
                width:fit-content;
                text-align: center;
                padding:.5rem;
                border:1px solid #007BBF;
                
            }
            td
            {
                width:fit-content;
                border:1px solid #CCC;
                text-align: center;
                padding:.5rem;
            }
            tr:nth-child(even)
            {
                background-color: #eee;
            }
            tr:hover{
                background-color: #ddd ;
            }
            .header
            {
                width:50%;
                
            }
            label{
                font-size:3rem;
                color:aqua
            }
            #MAHS
            {
                width:100%;
                height:3rem;
                padding:1rem;
                font-size: 1.5rem;
            }
            #MAHS::placeholder
            {
                color:red;
                font-size: 1.5rem;
            }
            #btn
            {
                display:block;
                width: 25%;
                font-size:1.25rem;
                width: fit-content;
                color:turquoise;
                margin:0 auto;
                margin-top:1rem;
                padding:0.5rem;
            }
            #title-table
            {
                font-size:3rem;
                margin:0 auto;
                margin-top:3rem;
                color:red;
                text-align:center;
            }
            .table-score
            {
                margin:0 auto;
                width:50%;
            }
        </style>
</head>
<body>
    <div class="container">
        <div class="header">
    <form action="tracuudiem.php" method="GET">
        <h1>Tra c???u ??i???m </h1>
            <!-- <label for="MAHS">M?? h???c sinh</label><br> -->
            <input type="text" name="MAHS" placeholder="Nh???p m?? h???c sinh" id="MAHS" autocomplete="off"><br>
       <button type="submit" name="btn" id="btn">Tra c???u</button>
    </form>
    </div>
    <?php
    function DiemSo($dbname,$table,$MAHS){
    $host='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($host,$username,$password,$dbname);
    $MAHS=$_GET['MAHS'];
    $query="SELECT MONHOC AS 'M??N H???C',DIEMMIENG AS 'MI???NG',DIEM15PHUT AS '15 PH??T', DIEMGIUAKY AS 'GI???A K???',DIEMCUOIKY AS 'CU???I K??',ROUND((DIEMMIENG+DIEM15PHUT+DIEMGIUAKY*2+DIEMCUOIKY*3)/7,2) AS '??I???M TRUNG B??NH' FROM MONHOC MH,DIEMSO DS WHERE MH.MAMH=DS.MAMH AND MAHS=$MAHS";
    $result=mysqli_query($conn,$query);
    $flag=true;
    if(mysqli_query($conn,$query))
    {
        while($row=mysqli_fetch_assoc($result))
        {
            $arr_key;
            if($flag)
            {
                $arr_key=array_keys($row);
                echo '<table class="table-score"><tr>';
                foreach($arr_key as $val)
                {
                    if(!$flag){
                        break;
                    }
                    echo "<th>$val</th>";
                }
                $flag=!$flag;
                echo '</tr>';     
            }
            echo '<tr>';
            foreach($arr_key as $val)
            {
                echo "<td>$row[$val]</td>";
            }
            echo '</tr>';
        }
        echo '</table>';
    }
}
function ThongTin($dbname,$table,$MAHS)
{
    $host='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($host,$username,$password,$dbname);
    $query="SELECT MAHS,TENHS,LOP,DATE_FORMAT(NGAYSINH,'%d/%m/%Y') AS 'NG??Y SINH',TRUONG,DIACHI FROM $table where MAHS=$MAHS";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($result))
    {
        echo '<table  class="table-score">';
        echo '<tr><td>M?? h???c sinh</td>';
        echo '<td>'.$row['MAHS'].'</td></tr>';
        echo '<tr><td>T??n</td>';
        echo '<td>'.$row['TENHS'].'</td></tr>';
        echo '<tr><td>L???p</td>';
        echo '<td>'.$row['LOP'].'</td></tr>';
        echo '<tr><td>Ng??y sinh</td>';
        echo '<td>'.$row['NG??Y SINH'].'</td></tr>';
        echo '<tr><td>Tr?????ng</td>';
        echo '<td>'.$row['TRUONG'].'</td></tr>';
        echo '<tr><td>?????a ch???</td>';
        echo '<td>'.$row['DIACHI'].'</td></tr>';
        echo '</table>';
    }
}
    ?>
    <?php
    if(isset($_GET['MAHS']) && !empty($_GET['MAHS']))
    {
        ThongTin('website','hocsinh',$_GET['MAHS']);
        echo '<h1 id="title-table">B???ng ??i???m </h1><br>';
        DiemSo('website','hocsinh',$_GET['MAHS']);
    }
    ?>
    </div>
</body>
</html>