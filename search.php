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

// Check if a course was selected
if (isset($_POST['submit']) && isset($_POST['courses'])) {
    $selected_course = testInput($_POST['courses']);

    // Select data from the registers table for the selected course
    $sql = "SELECT id, name, email, courses FROM registers WHERE courses = '$selected_course'";
    $result = mysqli_query($conn, $sql);

    // Check if there are any rows returned from the query
    if (mysqli_num_rows($result) > 0) {
        // Output the table header
        echo '<table border="1" cellspacing="2" cellpadding="2" style="font-family: Arial; border-collapse: collapse;">
              <tr> 
                  <td style="font-weight: bold;">SNo.</td> 
                  <td style="font-weight: bold;">Name</td> 
                  <td style="font-weight: bold;">Email</td>
                  <td style="font-weight: bold;">Courses</td>
              </tr>';

        // Initialize the row number counter
        $row_number = 1;

        // Output the table rows
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr> 
                      <td>' . $row_number . '</td> 
                      <td>' . $row['name'] . '</td> 
                      <td>' . $row['email'] . '</td> 
                      <td>' . $row['courses'] . '</td> 
                  </tr>';

            // Increment the row number counter
            $row_number++;
        }

        // Output the table footer
        echo '</table>';
    } else {
        echo "0 results";
    }
}

// Close the database connection
mysqli_close($conn);
?>

<form action="search.php" method="POST">
    Choose a course to view the students details: 
    <select name="courses">
        <option value="javascript">JavaScript</option>
        <option value="php">PHP</option>
        <option value="java">Java</option>
        <option value="c++">C++</option>
    </select><br>
    <input type="submit" name="submit" value="Submit">  
</form>
