<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="delete.css">
</head>
<body>
<?php
    include 'vendor/connect.php';
    $_SESSION['MAHS']=$_GET['MAHS'];
    $MAHS=$_SESSION['MAHS'];
?>
<div id="show-btn-delete">Xóa</div>
    <div class="container_button">
    <div id="modal-delete">
    <div id="modal-delete-content">
    <div id="hide-btn-delete">Đóng</div>
    <div class="container" id="delete"> 
    <form method="POST">
        <div class="notification">Bạn có muốn xóa học sinh có MAHS là <span style="color:red;font-weight:bolder;"><?php echo $_SESSION['MAHS']?></span> ? </div><br>
        <button type="submit" value="yes" name="btn_yes" id="btn_yes" class="btn">Có</button>
        <button type="submit" value="no" name="btn_no" id="btn_no" class="btn">Không</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    <script src="delete.js"></script>
    <?php
    if(isset($_POST['btn_yes'])){
    $query="DELETE FROM $table WHERE MAHS=\"$MAHS\"";
    mysqli_query($conn,$query);
    }
?>
</body>
</html>