<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #btn
        {
            border:1px solid blue;
            border-radius:5px;
            background-color: #abcdef;
            display:inline-block;
            cursor:pointer;
            padding:.5rem;
        }
    </style>
</head>
<body>
    <div id="btn">Xin chào</div>
    <script>
        document.getElementById('btn').onclick=function()
        {
            alert('<?php echo 'Xin chào' ;?>')
        }
    </script>
</body>
</html>