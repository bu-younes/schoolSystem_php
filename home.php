<!DOCTYPE html>
<html>
<head>
	<title>My School System</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		h1, h2, h3 {
			margin: 0;
		}

		a {
			text-decoration: none;
			color: #333;
		}

		header {
			background-color: #333;
			color: #fff;
			padding: 10px;
		}

		nav ul {
			margin: 0;
			padding: 0;
			list-style: none;
		}

		nav li {
			display: inline-block;
			margin: 0 10px;
		}

		nav a {
			color: #fff;
		}

		.banner {
			background-image: url('https://cdn.pixabay.com/photo/2017/08/07/19/44/book-2608889_1280.jpg');
			background-size: cover;
			background-position: center;
			color: #fff;
			text-align: center;
			padding: 100px 0;
		}

		.btn {
			background-color: #fff;
			color: #333;
			padding: 10px 20px;
			border-radius: 5px;
		}

		.services {
			padding: 50px;
			background-color: #f2f2f2;
		}

		.service {
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			margin-bottom: 20px;
		}

		.about {
			background-color: #333;
			color: #fff;
			padding: 50px;
			text-align: center;
		}

		footer {
			background-color: #ccc;
			color: #333;
			padding: 10px;
			text-align: center;
		}

	</style>
</head>
<body>
	<header>
		<h1>My School System</h1>
		<nav>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="courses.php">Courses</a></li>
				<li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>

			</ul>
		</nav>
	</header>
	
	<main>
		<section class="banner">
			<h2 class="btn">Welcome to My School System</h2>
			<p class="btn">Join us to learn and achieve your dreams</p>
			<a href="#" class="btn">Get Started</a>
		</section>
		
		<section class="services">
			<h2>Our Services</h2>
			<div class="service">
				<h3>Online Courses</h3>
				<p>Learn from anywhere with our online courses</p>
			</div>
			<div class="service">
				<h3>Flexible Schedule</h3>
				<p>Choose your own schedule and learn at your own pace</p>
			</div>
			<div class="service">
				<h3>Expert Instructors</h3>
				<p>Learn from experienced and knowledgeable instructors</p>
			</div>
		</section>
		
		<section class="about">
			<h2>About Us</h2>
			<p>We are a leading provider of online education with over 10 years of experience in the industry.
				 Our mission is to make programming education accessible to everyone, regardless of their location or background. 
				 We offer a wide range of courses in various programming languages, including Python, Java, C++, and more.
				  Our instructors are experts in their fields and are passionate about helping students achieve their programming goals.
				   With our flexible schedule and online learning platform, you can learn programming at your own pace and on your own schedule.
				  Join us today and start your journey to becoming a proficient programmer.</p>
</section>
</main>
<footer>
	<p>&copy; 2023 My School System. All rights reserved.</p>
</footer>
</body>
</html>