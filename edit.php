<?php
include_once('db_config.php');
error_reporting(-1);

if(isset($_POST['update'])) {
    $sql = "UPDATE `register` SET `name`='".$_POST['name']."',`phone`='".$_POST['phone']."',`email`='".$_POST['email']."',`designation`='".$_POST['designation']."' WHERE id='".$_POST['id']."'";
    $data = $conn->query($sql);
    if($data){
        echo "Updated succesfully";
        header('Location: '."/user_registration/index.php");
        exit();
    }else{
        echo "Something went wrong please try again";
    }
}

$id = isset($_GET['id']) ? $_GET['id'] : '';
$sql = "SELECT * FROM register WHERE id='$id'";
$data = $conn->query($sql);
$result = $data->fetch_assoc();
?>

<form action="edit.php" method="POST" style="text-align:center;">
<input type="hidden" name="id" value="<?php echo $id; ?>" style="margin-bottom:10px;">
<label for="name" style="margin-bottom:10px; display:block;">Name :</label>
<input name="name" value="<?php echo $result['name'] ?? ''; ?>" id="name" class="input-field" placeholder="Enter the name" style="margin-bottom:10px;">
<br>
<label for="phone" style="margin-bottom:10px; display:block;">Phone:</label>
<input name="phone" value="<?php echo $result['phone'] ?? ''; ?>" id="phone" class="input-field" style="margin-bottom:10px;">
<br>
<label for="email" style="margin-bottom:10px; display:block;">Email:</label>
<input name="email" value="<?php echo $result['email'] ?? ''; ?>" id="email" class="input-field" style="margin-bottom:10px;">
<br>
<label for="designation" style="margin-bottom:10px; display:block;">Designation:</label>
<input name="designation" value="<?php echo $result['designation'] ?? ''; ?>" id="designation" class="input-field" style="margin-bottom:10px;">
<br>
<input type="submit" name="update" value="Submit" style="background-color: blue; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">  
</form>



<?php 









?>