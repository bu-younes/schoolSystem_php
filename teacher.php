





<!DOCTYPE html>
<html>
<head>
	<title>Teacher Page</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		header {
			background-color: #0074D9;
			color: #FFFFFF;
			padding: 20px;
			text-align: center;
		}
		h1 {
			margin: 0;
			font-size: 36px;
		}
		main {
			padding: 20px;
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			align-items: flex-start;
		}
		.card {
			background-color: #F2F2F2;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			margin-bottom: 20px;
			padding: 20px;
			width: calc(50% - 10px);
		}
		.card h2 {
			margin: 0;
			font-size: 24px;
			margin-bottom: 10px;
		}
		.card p {
			margin: 0;
			font-size: 16px;
			line-height: 1.5;
		}
		button {
			background-color: #DDDDDD;
			border: none;
			color: #333333;
			font-size: 16px;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.2s ease-in-out;
			margin-top: 20px;
		}
		button:hover {
			background-color: #CCCCCC;
		}
		a {
			color: #0074D9;
			text-decoration: none;
			font-weight: bold;
			transition: color 0.2s ease-in-out;
		}
		a:hover {
			color: #004080;
		}
	</style>
</head>
<body>
<div class="container">
      <p>Here you can access your teaching resources and manage your classes.</p>
      <!-- add your content here -->

    </div>
	<header>
		<h1>Teacher Page</h1>
		<div>
    <a href="view.php"><input type="button" name="view" value="View Students"></a> | <a href="search.php"><input type="button" name="search" value="Search Students"></a> |  <a href="rStudent.php"><input type="button" name="rstudent" value="Add Students"></a> |       <a href="<?php echo "logout.php"; ?>"><input type="button" name="logout" value="Logout"></a>
      
      
		</div>
	</header>
	<main>
		<div class="card">
			<h2>Classes</h2>
			<p>You have classes today:</p>
			<ul>
				<li>Class 1</li>
				<li>Class 2</li>
				<li>Class 3</li>
			</ul>
		</div>
		<div class="card">
			<h2>Assignments</h2>
			<p>You have assignments due:</p>
			<ul>
				<li>Assignment 1</li>
				<li>Assignment 2</li>
				<li>Assignment 3</li>
			</ul>
		</div>
	</main>
  

</body>
</html>
