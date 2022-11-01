<?php
if (!isset($_SESSION))  session_start();
if (!isset($_SESSION['name']) || !isset($_SESSION['email'])) {
    header("Location: booking_service.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>MOVIES @ NTU</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../CSS/cart.css">
	<script src="../JS/cart.js"></script>
</head>

<body>
	<div id="wrapper">
		<header>
			<div class="topnav">
			  <a href="../HTML/index.html" style="text-decoration:underline;">HOME</a>
			  <a href="../HTML/movies.html">MOVIES</a>
			  <a class="homebutton" href="../HTML/index.html"><strong>MOVIES @ NTU</strong></a>
			  <a href="../HTML/cinemas.html">CINEMAS</a>
			  <a href="../HTML/contact.html">CONTACT</a>
			  <div class="cart-icon" style="position:relative; right:-150px;">
				<span onclick="openNav()"><img src="../Images/cart-icon.png" width="40px"></span>
			  </div>
			</div>

			<div id="myCart" class="cartnav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="#">About</a>
			</div>
		</header>

		<section class="content">
			<div class="title">
				<h1>CHECK OUT</h1>
				<hr>
			</div>

			<div class="booking-details">
				<h4 style="text-decoration:underline;">Booking Details</h3>

			</div>
			<div class="contact-details">
				<p>Dear <?php echo $_SESSION['name'] ?>,</p>
				<p>You have purchased:<br><?php echo $_SESSION['numberoftickets...'] ?> tickets for <?php echo $_SESSION['moive'] ?> at <?php echo $_SESSION['movietiming'] ?></p>
				<p>A confirmation email has been sent to:<br><?php echo $_SESSION['email'] ?></p>
				<p>We look forward to seeing you at MOVIES @ NTU!</p>
			</div>
			
	
		</section>
		
		
		<footer>
			<a href="mailto:june@bhar.com">june@bhar.com</a>
			<p>Movies @ NTU &copy; 2022</p>
			<button onclick="BackToTop()" id="bttop">Back to top</button>
		</footer>

	</div>
</body>
</html>


