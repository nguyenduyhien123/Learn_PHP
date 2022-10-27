<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phần 2 - Bài 05</title>
    <style>
        .do
        {
            color:red;
            font-style: italic;
        }
    </style>
</head>
<body>
    <ul>
        <?php
        for($i=1;$i < 6;$i++)
        {
        ?>
        <li <?php if($i%2==0) echo ' class="do"' ;?>>Menu <?php echo $i;?></li>
        <?php
        }
        ?>
    </ul>
</body>
</html>