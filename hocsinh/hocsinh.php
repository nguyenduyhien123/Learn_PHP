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

<body>
    <div class="main">
        <div class="title">Danh sách các học sinh</div>
        <?php
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'website';
        $table = 'hocsinh';
        $conn = mysqli_connect($host, $username, $password, $dbname);
        $aa = true;
        $tbody = true;
        $query = "SELECT MAHS , TENHS AS 'HỌ TÊN', PHAI AS 'PHÁI', DATE_FORMAT(NGAYSINH,'%d/%m/%Y') AS 'NGÀY SINH', LOP AS 'LỚP', TRUONG AS 'TRƯỜNG', DIACHI AS 'ĐỊA CHỈ', SDT, EMAIL FROM $table";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $arr_key;
            if ($aa) {
                $arr_key = array_keys($row);
                $len_col = count($arr_key);
                $cur_col = 1;
        ?>
                <table>
                    <thead>
                        <tr>
                            <?php
                            foreach ($arr_key as $value) {
                                if (!$aa) {
                                    break;
                                }
                            ?>
                                <th>
                                    <?php echo $value; ?>
                                </th>
                            <?php
                            }
                            $aa = !$aa;
                            $permis = true;
                            if ($permis) {
                            }
                            ?>
                            <th colspan="3">Permission</th>
                        <?php $permis = false;
                    } ?>
                        </tr>
                    </thead>
                    <?php
                    if ($tbody) {
                        echo '<tbody>';
                        $tbody = false;
                    }
                    ?>
                    <tr>
                        <?php
                        foreach ($arr_key as $val) {
                        ?>
                            <td>
                                <?php echo $row[$val] ?>
                            </td>
                        <?php
                        }
                        $arr_link = array('detail.php', 'edit.php', 'delete.php');
                        $arr_content = array('Chi tiết', 'Sửa', 'Xóa');
                        $arr_button = array('detail', 'edit', 'delete');
                        $len = count($arr_link);
                        for ($i = 0; $i < $len; $i++) {
                        ?>
                            <td>
                                <div class="<?php echo 'show-btn-' . $arr_button[$i] ?>"> <?php echo  $arr_content[$i]; ?></div><iframe class="<?php
                                                                                                                                                // echo 'hide-btn-'.$arr_button[$i]
                                                                                                                                                ?>" src="<?php echo $arr_link[$i] . '?MAHS=' . $row['MAHS']; ?>">
                                </iframe>
                            </td>
                        <?php
                        }
                        ?>
                    </tr>
                <?php
            }
                ?>
                </tbody>
                </table>
    </div>
    <script src="delete.js"></script>
    <script src="detail.js"></script>
    <script src="edit.js"></script>
</body>

</html>
</body>

</html>