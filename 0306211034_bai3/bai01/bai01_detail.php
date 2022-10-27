<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
}
else
{
    header('location: bai01_index.php');
}
$lst_cat = [
    ['id' => 1, 'name' => 'Thời sự', 'slug' => 'thoi-su'],
    ['id' => 2, 'name' => 'Giải trí', 'slug' => 'giai-tri'],
    ['id' => 3, 'name' => 'Thế giới', 'slug' => 'the-gioi']
];
$search_cat;
foreach($lst_cat as $cat)
{
    if($cat['id'] == $id)
    {
        $search_cat=$cat;
        break;
    }
}
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
    <h1><?php 
    if(isset($search_cat))
    {
        print_r($search_cat);
    }
    else
    {
        echo 'Không tìm thấy';
    }
    ;?>
</h1>
</body>
</html>