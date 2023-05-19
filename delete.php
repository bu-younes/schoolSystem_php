<?php
include_once('db_config.php');
//function sets the error_reporting directive at runtime. PHP has many levels of errors, using this function sets that level for the duration (runtime) of your script. If the optional error_level is not set, error_reporting() will just return the current error reporting level.
error_reporting(-1);

if(isset($_GET['id'])){

    //print_r($_POST);
    //exit();
     $sql = "DELETE FROM `register` WHERE  id='".$_GET['id']."'";
    //exit();
    $data = $conn->query($sql);
    if($data){
        echo "Deleted succesfully";
        header('Location: '."/user_registration/index.php");
    }else{
        echo "Something went wrong please try again";
    }
}
?>



