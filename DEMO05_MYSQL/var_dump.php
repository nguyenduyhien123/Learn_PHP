<?php
    $host='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($host,$username,$password);
    if(!$conn)
    {
        die('Failed');
        exit(1);
    }
    echo 'Successfully';
    echo mysqli_sqlstate($conn);
?>