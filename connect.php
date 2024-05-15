<?php
$conn=new mysqli('localhost','root','','php_crud_demo');

if(!$conn)
{
    echo "Connected Successfully";
}
else{
    echo (mysqli_error($conn));
}


?>
