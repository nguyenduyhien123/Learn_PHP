<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="detail.css">
</head>
<body>
<div id="show-btn-detail">Chi tiết</div>
    <div class="container_button">
    <div id="modal-detail">
    <div id="modal-detail-content">
    <div id="hide-btn-detail">Đóng</div>
<div style="text-align:center;margin-top:3rem"><a class="redirect" href="hocsinh.php">Quay lại trang chủ</a></div>
    <div class="container">
        <?php
        function DiemSo($dbname, $table, $MAHS)
        {
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $conn = mysqli_connect($host, $username, $password, $dbname);
            $query = "SELECT MONHOC AS 'MÔN HỌC',DIEMMIENG AS 'MIỆNG',DIEM15PHUT AS '15 PHÚT', DIEMGIUAKY AS 'GIỮA KỲ',DIEMCUOIKY AS 'CUỐI KÌ',ROUND((DIEMMIENG+DIEM15PHUT+DIEMGIUAKY*2+DIEMCUOIKY*3)/7,2) AS 'ĐIỂM TRUNG BÌNH' FROM MONHOC MH,DIEMSO DS WHERE MH.MAMH=DS.MAMH AND MAHS=$MAHS";
            $result = mysqli_query($conn, $query);
            $flag = true;
            if (mysqli_query($conn, $query)) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // $arr_key;
                    if ($flag) {
                        $arr_key = array_keys($row);
                        echo '<table class="table-score"><tr>';
                        foreach ($arr_key as $val) {
                            if (!$flag) {
                                break;
                            }
                            echo "<th>$val</th>";
                        }
                        $flag = !$flag;
                        echo '</tr>';
                    }
                    echo '<tr>';
                    foreach ($arr_key as $val) {
                        echo "<td>$row[$val]</td>";
                    }
                    echo '</tr>';
                }
                echo '</table>';
            }
        }
        function ThongTin($dbname, $table, $MAHS)
        {
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $conn = mysqli_connect($host, $username, $password, $dbname);
            $query = "SELECT MAHS,TENHS,LOP,DATE_FORMAT(NGAYSINH,'%d/%m/%Y') AS 'NGÀY SINH',TRUONG,DIACHI FROM $table where MAHS=$MAHS";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<table  class="table-score">';
                echo '<tr><td>Mã học sinh</td>';
                echo '<td>' . $row['MAHS'] . '</td></tr>';
                echo '<tr><td>Tên</td>';
                echo '<td>' . $row['TENHS'] . '</td></tr>';
                echo '<tr><td>Lớp</td>';
                echo '<td>' . $row['LOP'] . '</td></tr>';
                echo '<tr><td>Ngày sinh</td>';
                echo '<td>' . $row['NGÀY SINH'] . '</td></tr>';
                echo '<tr><td>Trường</td>';
                echo '<td>' . $row['TRUONG'] . '</td></tr>';
                echo '<tr><td>Địa chỉ</td>';
                echo '<td>' . $row['DIACHI'] . '</td></tr>';
                echo '</table>';
            }
        }
        ?>
        <?php
        if (isset($_GET['MAHS'])) {
            $_SESSION['MAHS']=$_GET['MAHS'];
            $MAHS=$_SESSION['MAHS'];
            ThongTin('website', 'hocsinh', $MAHS);
            echo '<h1 id="title-table">Bảng điểm </h1><br>';
            DiemSo('website', 'hocsinh',$MAHS);
        }
        ?>
    </div>
    </div>
    </div>
    </div>
    <script src="detail.js"></script>
    </body>
</html>