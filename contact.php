<!DOCTYPE html>
<html>
<head>
	<title>Contact Us | School System</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		header {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
		}
		nav {
			background-color: #f2f2f2;
			border-bottom: 1px solid #ccc;
			overflow: hidden;
		}
		nav a {
			color: #333;
			display: block;
			float: left;
			font-size: 16px;
			padding: 20px;
			text-decoration: none;
		}
		nav a:hover {
			background-color: #ddd;
		}
		.contact-form {
			background-color: #f2f2f2;
			border: 1px solid #ccc;
			margin: 20px;
			padding: 20px;
		}
		.contact-form label {
			display: block;
			font-weight: bold;
			margin-bottom: 10px;
		}
		.contact-form input[type="text"],
		.contact-form textarea {
			border: 1px solid #ccc;
			box-sizing: border-box;
			font-size: 16px;
			margin-bottom: 10px;
			padding: 10px;
			width: 100%;
		}
		.contact-form input[type="submit"] {
			background-color: #333;
			border: none;
			color: #fff;
			cursor: pointer;
			padding: 10px 20px;
			font-size: 16px;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<header>
		<h1>School System</h1>
	</header>
	<nav>
		<a href="home.php">Home</a>
		<a href="about.php">About</a>
		<a href="courses.php">Courses</a>
		<a href="contact.php">Contact</a>
	</nav>
	<section class="contact">
		<div class="contact-form">
			<h2>Contact Us</h2>
			<form action="submit.php" method="POST">
				<label for="name">Name:</label>
				<input type="text" name="name" id="name" required>
				<label for="email">Email:</label>
				<input type="text" name="email" id="email" required>
				<label for="message">Message:</label>
				<textarea name="message" id="message" rows="5" required></textarea>
				<input type="submit" name="submit" value="Submit">
			</form>
		</div>
	</section>
</body>
</html>
