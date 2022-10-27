<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phần 2 - Bài 07</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" id="txt_key" name="txt_key" placeholder="Nhập từ khóa ">
    <select name="ddl_cat" id="ddl_cat">
    <option value="0">Tất cả</option>
    <?php
    $lst_cat=[['id'=>1,'name'=>'Thời sự','slug'=>'thoi-su'],['id'=>2,'name'=>'Giải trí','slug'=>'giai-tri'],['id'=>3,'name'=>'Thế giới','slug'=>'the-gioi']];
    foreach($lst_cat as $cat)
    {
    ?>
    <option value="<?php echo $cat['slug'];?>"><?php echo $cat['name'];?></option>
    <?php
    }
    ?>
    </select>
    <button type="submit" name="btn_search">Tìm kiếm</button>
    </form>
</body>
</html>