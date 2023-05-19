<?php

//function sets the error_reporting directive at runtime. PHP has many levels of errors, using this function sets that level for the duration (runtime) of your script. If the optional error_level is not set, error_reporting() will just return the current error reporting level.
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

<form action="rStudent.php" method="POST">
    Name : <input name="name" value="" id="" class="" placeholder="enter the student name"><br>
    Email: <input name="email" value="" id="" class="" placeholder="enter the student email"><br>
    Choose a course: 
    <select name="courses">
    <option value="javascript">JavaScript</option>
    <option value="php">PHP</option>
    <option value="java">Java</option>
    <option value="c++">C++</option>
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
    $email = $_POST['email'];
    $courses = isset($_POST['courses']) ? $_POST['courses'] : '';


    $errMsg = '';

    if (empty($name)) {
        $errMsg = "Error! You didn't enter the Name.";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $errMsg = "Only alphabets and whitespace are allowed in the Name field.";

    } elseif (empty($email)) {
        $errMsg = "Error! You didn't enter the Email.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errMsg = "Error! You entered an invalid Email address.";
        
    } elseif (empty($courses)) {
        $errMsg = "Error! You didn't enter the courses.";
    
        } else {
            $sql = "INSERT INTO registerS (name, email, courses) VALUES ('".$name."', '".$email."', '".$courses."')";
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


?>



<?php 
 
$query = "SELECT * FROM registerS";


echo '<table border="1" cellspacing="2" cellpadding="2" style="font-family: Arial; border-collapse: collapse;">
      <tr> 
          <td style="font-weight: bold;">SNo.</td> 
          <td style="font-weight: bold;">Name</td> 
          <td style="font-weight: bold;">Email</td>
          <td style="font-weight: bold;">courses</td> 
      </tr>';


if ($result = $conn->query($query)) {
    $i=1;
    while ($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $email = $row["email"];
        $courses = $row["courses"];




        echo '<tr> 
                  <td>'.$i.'</td>
                  <td>'.$name.'</td> 
                  <td>'.$email.'</td>
                  <td>'.$courses.'</td> 
 




              </tr>';
              $i++;
    }
    $result->free();
} 
?>








