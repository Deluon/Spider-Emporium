<?php
$message ="";
$db = new mysqli ('mysql.joelssimmons.com','joels941','Cthulhu8u!','joelw15_php');
if ($db->connect_error){
    $message = $db->connect_error;
}else{
    $message = 'You\'re connected!';
}
echo $message;

