<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    /* form{
        margin: 0 auto;
        width:80%;
        border: 3px solid red;
    }
    input
    {
        padding: 1rem;
        border:2px solid green;
        margin-top:1rem;
        width:inherit;
        font-size: 1.5rem;
    }
    input:focus
    {
        outline:0;
        border: none;
        border-bottom: 2px solid red;
    }
    label{
            font-weight: bolder;
            font-style:italic;
            font-size: 2rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    input[type="submit"]
    {
        width:10rem;
    }
    input[type="submit"]:hover
    {
        background-color: aqua;
    } */
    form
    {
      margin:0 auto;
    }
  </style>
</head>
<body>
  <div class="container">
    <form action="connect.php" method="post">
        <label for="fullname">Họ và tên</label>
        <input type="text" id="fullname" name="fullname" placeholder="Họ và tên"><br>
        <label for="sex">Giới tính</label>
        <input type="radio" id="male" name="sex" value="male">
        <label for="male">Nam</label>
        <input type="radio" id="female" name="sex" value="female">
        <label for="female">Nữ</label><br>
        <label for="birth">Ngày sinh</label>
        <input type="date" id="birth" name="birth" placeholder="Ngày sinh"><br>
        <label for="address">Địa chỉ</label>
        <input type="text" id="address" name="address" placeholder="Địa chỉ">
      <input type="submit" name="submit">
    </form>
  </div>
</body>
</html>
<?php

?>