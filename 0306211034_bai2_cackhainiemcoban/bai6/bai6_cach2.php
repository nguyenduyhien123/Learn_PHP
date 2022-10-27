<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phần 2 - Bài 06</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" id="txt_key" name="txt_key" placeholder="Nhập từ khóa ">
    <select name="ddl_cat" id="ddl_cat">
    <option value="0">Tất cả</option>
    <?php
    $lst_cat=['Thời sự','Giải trí','Thế giới'];
    $len=count($lst_cat);
    for($i=0;$i<$len;$i++)
    {
    ?>
    <option value=""><?php echo $lst_cat[$i] ?></option>
    <?php
    }
    ?>
    </select>
    <button type="submit" name="btn_search">Tìm kiếm</button>
    </form>
</body>
</html>