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
                border: 2px solid red;
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
        </style>
</head>
<body>
    <form action="code-table.php" method="GET">
        <h1>Hiển thị thông tin từ CSDL</h1>
        <label for="table">Chọn Bảng dữ liệu</label>
        <select name="table" id="table">
            <option value="dangki">Đăng kí</option>
            <option value="diemso">Điểm số</option>
            <option value="hocsinh">Học sinh</option>
            <option value="monhoc">Môn học</option>
            <option value="sanpham">Sản phẩm</option>
            <option value="thongtincoban">Thông tin cơ bản</option>
        </select>
       <button type="submit" name="btn" id="btn">Hiển thị</button>
    </form>
    <?php
    function ShowTable($dbname,$table){
    $host='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($host,$username,$password,$dbname);
    // if(!$conn)
    // {
    //     die('Failed');
    //     exit(1);
    // }
    // echo 'Successfully';
    $query="SELECT * FROM $table";
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
                echo '<table><tr>';
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
    ?>
    <script>
        document.getElementById('table').onchange=function()
        {
            <?php $a=true?>
        }
    </script>
    <?php
    if($a){
    ShowTable('user-data',$_GET['table']);
    }
    $a=!$a ;
    echo $a;
    ?>
</body>
</html>