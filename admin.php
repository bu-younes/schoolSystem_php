<?php 
session_start();
if(!isset($_SESSION['user'])){
  header("Location: login.php");
  exit();
}


?>
<!DOCTYPE html>
<html>
  <head>
    <title>School System Admin Page</title>
    <style>
      /* CSS styles */
      body {
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
      }

      #header {
        background-color: #333;
        color: white;
        padding: 20px;
        text-align: center;
      }

      #content {
        background-color: white;
        padding: 20px;
        margin: 20px;
        border: 1px solid #ccc;
      }

      #register-link {
        display: block;
        margin: 20px;
        text-align: center;
      }

      #register-link a {
        color: blue;
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <div id="header">
      <h1>School System Admin Page</h1>
      <a href="<?php echo "logout.php"; ?>"><input type="button" name="logout" value="Logout"></a>
    </div>
    <div id="content">
      <p>Welcome to the school system admin page.</p>
      <p>You can manage students, teachers, classes, and more from here.</p>
      <p>Click the link below to register techer:</p>
      <div id="register-link">
        <a href="index.php">Register Techer</a>
      </div>
    </div>
  </body>
</html