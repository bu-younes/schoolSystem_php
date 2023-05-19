<?php
include_once('db_config.php');
error_reporting(-1);

if(isset($_GET['id'])){

    //print_r($_POST);
    //exit();
     $sql = "DELETE FROM `registers` WHERE  id='".$_GET['id']."'";
    //exit();
    $data = $conn->query($sql);
    if($data){
        echo "Deleted succesfully";
        header('Location: '."/user_registration/rStudent.php");
    }else{
        echo "Something went wrong please try again";
    }
}
?>