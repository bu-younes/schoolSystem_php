<?php

//function sets the error_reporting directive at runtime. PHP has many levels of errors,
// using this function sets that level for the duration (runtime) of your script.
// If the optional error_level is not set, error_reporting() will just return the current error reporting level.
error_reporting(-1);
?>

<style>
    form {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        padding: 20px;
        border-radius: 10px;
        max-width: 500px;
        margin: 0 auto;
    }
    input {
        padding: 10px;
        margin-bottom: 10px;
        border: none;
        border-radius: 5px;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #3e8e41;
    }
</style>

<form action="index.php" method="POST">
    Name : <input name="name" value="" id="" class="" placeholder="enter the name"><br>
    Phone: <input name="phone" value="" id="" class="" placeholder="enter the phone"><br>
    Email: <input name="email" value="" id="" class="" placeholder="enter the email"><br>
    Password: <input name="password" value="" id="" class="" placeholder="enter the password"><br>
    Confirm Password: <input name="cpassword" value="" id="" class="" placeholder="enter the Confirm Password"><br>
    Designation: 
    <select name="designation">
        <option value="teacher">Teacher</option>
        <option value="admin">Admin</option>
    </select><br>

    <input type="submit" name="submit" value="Submit">  
</form>





<?php

include_once 'db_config.php';

function closeCon($conn)
{
    $conn->close();
}

function testInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = isset($_POST['cpassword']) ? $_POST['cpassword'] : '';
    $designation = $_POST['designation'];

    $errMsg = '';

    if (empty($name)) {
        $errMsg = "Error! You didn't enter the Name.";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $errMsg = "Only alphabets and whitespace are allowed in the Name field.";


    } elseif (empty($phone)) {
        $errMsg = "Error! You didn't enter the phone.";
    } elseif (!preg_match("/^\d{8}$/", $phone)) {
        $errMsg = "Error! phone must have 8 digits.";


    } elseif (empty($email)) {
        $errMsg = "Error! You didn't enter the Email.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errMsg = "Error! You entered an invalid Email address.";


    } elseif (empty($designation)) {
        $errMsg = "Error! You didn't enter the Designation.";


    } elseif (empty($password)) {
        $errMsg = "Error! You didn't enter the Password.";
    } elseif ($password !== $cpassword) {
        $errMsg = "Password and confirm password should match.";
    } elseif (strlen($password) < 8 || !preg_match("#[0-9]+#", $password) || !preg_match("#[A-Z]+#", $password) || !preg_match("#[a-z]+#", $password) || !preg_match("#[^\w]+#", $password)) {
        $errMsg = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';



        //password('".$password."')
        //'".$cpassword."'

    } else {
        $sql = "SELECT phone FROM register WHERE phone = '".$phone."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $errMsg = "Phone number already exists in the database.";


        } else {
            $sql = "INSERT INTO register (name, phone, email, password, cpassword, designation) VALUES ('".$name."', '".$phone."', '".$email."', password('".$password."'),  password('".$cpassword."'), '".$designation."')";
            $query = $conn->query($sql);
            if ($query) {
                echo "Inserted Successfully";
            } else {
                $errMsg = "Something went wrong please try again";
            }
        }
    }

    if (!empty($errMsg)) {
        echo $errMsg;
    }
}

?>



<?php 
 
$query = "SELECT * FROM register";


echo '<table border="1" cellspacing="2" cellpadding="2" style="font-family: Arial; border-collapse: collapse;">
      <tr> 
          <td style="font-weight: bold;">SNo.</td> 
          <td style="font-weight: bold;">Name</td> 
          <td style="font-weight: bold;">Phone</td> 
          <td style="font-weight: bold;">Email</td>
          <td style="font-weight: bold;">Password</td>
          <td style="font-weight: bold;">Cpassword</td>
          <td style="font-weight: bold;">Designation</td> 
          <td style="font-weight: bold;">Actions</td> 
      </tr>';


if ($result = $conn->query($query)) {
    $i=1;
    while ($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $phone = $row["phone"];
        $email = $row["email"];
        $password = $row["password"];
        $cpassword = $row["cpassword"];
        $designation = $row["designation"];




        echo '<tr> 
                  <td>'.$i.'</td>
                  <td>'.$name.'</td> 
                  <td>'.$phone.'</td> 
                  <td>'.$email.'</td>
                  <td>'.$password.'</td>
                  <td>'.$cpassword.'</td>
                  <td>'.$designation.'</td> 
 



                  <td><a href="edit.php?id='.$row["id"].'" target="_blank"><input type="button" name=""Edit" value="Edit"></a>
                  <a href="delete.php?id='.$row["id"].'" target="_blank">
                  <input type="button" name="Delete" value="Delete"></td> 
              </tr>';
              $i++;
    }
    $result->free();
} 
?>








