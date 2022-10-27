<?php
if(isset($_POST['txt_data']) && !empty($_POST['txt_data']))
{
    echo $_POST['txt_data'];
}
else
{
    header('location: bai03_frm.php');
}
?>