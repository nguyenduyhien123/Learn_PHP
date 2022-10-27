<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phần 2 - Bài 08</title>
    <style>
        table
        {
            border-collapse: collapse;
        }
        td,th
        {
            border:1px solid gray;
            padding:.5rem;
        }
    </style>
</head>
<body>
    <!-- table>((thead>tr>th*3)+tbody>(tr>td*3)*5) -->
    <!-- table>((thead>tr>th*3)) -->
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>slug</th>
            </tr>
        </thead>
    <tbody>
    <?php
    $lst_cat=[['id'=>1,'name'=>'Thời sự','slug'=>'thoi-su'],['id'=>2,'name'=>'Giải trí','slug'=>'giai-tri'],['id'=>3,'name'=>'Thế giới','slug'=>'the-gioi']];
    foreach($lst_cat as $cat)
    {
    ?>
    <tr>
        <td><?php echo $cat['id'] ;?></td>
        <td><?php echo $cat['name'] ;?></td>
        <td><?php echo $cat['slug'] ;?></td>
    </tr>
    <?php
    }
    ?>
    </tbody>
        </table>
</body>
</html>