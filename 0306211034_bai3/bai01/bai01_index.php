<?php
$lst_cat = [
    ['id' => 1, 'name' => 'Thời sự', 'slug' => 'thoi-su'],
    ['id' => 2, 'name' => 'Giải trí', 'slug' => 'giai-tri'],
    ['id' => 3, 'name' => 'Thế giới', 'slug' => 'the-gioi']
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phần 03 - Bài 01 - detail</title>
</head>
<body>
    <ul>
        <?php
        foreach ($lst_cat as $cat) {
        ?>
            <li><a href="bai01_detail.php?id=<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></a></li>
        <?php
        }
        ?>
    </ul>
</body>

</html>