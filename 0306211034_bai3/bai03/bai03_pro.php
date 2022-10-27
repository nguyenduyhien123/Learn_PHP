<?php
if(isset($_GET['txt_data']) && !empty($_GET['txt_data']))
{
    echo $_GET['txt_data'];
}
else
{
    header('location: bai03_frm.php');
}
?>