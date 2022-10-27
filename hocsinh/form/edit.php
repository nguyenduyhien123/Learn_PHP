<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="edit.css">
    <link rel="stylesheet" href="detail.css">
    <link rel="stylesheet" href="delete.css">
</head>
<div id="show-btn-edit">Sửa dữ liệu</div>
    <div class="container_button">
    <div id="modal-edit">
    <div id="hide-btn-edit">Đóng</div>
        <div class="title">Sửa Thông tin</div>
        <form method="POST">
            <?php
            include '../vendor/connect.php';
            include '../vendor/convert_name.php';
            $MAHS='010001';
            $query = "SELECT MAHS , TENHS AS 'HỌ TÊN', PHAI AS 'PHÁI', DATE_FORMAT(NGAYSINH,'%d/%m/%Y') AS 'NGÀY SINH', LOP AS 'LỚP', TRUONG AS 'TRƯỜNG', DIACHI AS 'ĐỊA CHỈ', SDT, EMAIL FROM $table WHERE MAHS='$MAHS'";
            $result = mysqli_query($conn, $query);
            $flag = true;
            if (mysqli_query($conn, $query)) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $arr_key;
                    if ($flag) {
                        $arr_key = array_keys($row);
                        foreach ($arr_key as $val) {
                            if (!$flag) {
                                break;
                            }
                            if ($val == 'MAHS') {
                            }
                            else if($val == 'NGÀY SINH')
                            {
                                $val_html = convert_name($val);
                                echo "<label for=\"$val_html\">$val</label><br>";
                                $row[$val]=str_replace('/', '-',$row[$val]);
                                $row[$val]=strtotime($row[$val]);
                                $value=date("Y-m-d", $row[$val]);
                                echo "<input type=\"date\" name=\"$val_html\" value=\"$value\" autocomplete=\"off\"><br>";
                            }
                            else {
                                $val_html = convert_name($val);
                                echo "<label for=\"$val_html\">$val</label><br>";
                                echo "<input type=\"text\" name=\"$val_html\" value=\"$row[$val]\" autocomplete=\"off\"><br>";
                            }
                        }
                        $flag = !$flag;
                    }
                }
            }
            ?>
            <button type="submit" id="btn" name="btn">Cập nhật</button>
        </form>
    </div>
</div>
<div id="nofication-edit"></div>
    <script src="edit.js"></script>