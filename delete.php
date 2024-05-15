<?php
include 'connect.php';

if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid']; //Acceess by url
    $sql="delete from `student_tbl` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "Deleted Successfully";
        header('location:view.php');
    }
    else{
        die(mysqli_error($conn));
    }
}

?>
