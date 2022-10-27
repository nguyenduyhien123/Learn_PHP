<?php
//Lấy phần mở rộng của file (txt, jpg, png,...)
$fileType = pathinfo($target_file, PATHINFO_EXTENSION);
//Những loại file được phép upload
$allowtypes   = array('txt', 'dat', 'data');
//Kiểm tra loại file upload có được phép không?
if (!in_array($fileType, $allowtypes )) {
   echo "<br>Only allow for uploading .txt, .dat or .data files.";
   $allowUpload = false;
}
?>