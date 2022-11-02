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
	<link rel="stylesheet" href="../CSS/contact.css">
	<script src="../JS/index.js"></script>
</head>

<body>
	<div id="wrapper">
		<header>
			<div class="topnav">
			  <a href="../HTML/index.html">HOME</a>
			  <a href="../HTML/movies.html">MOVIES</a>
			  <a class="homebutton" href="../HTML/index.html"><strong>MOVIES @ NTU</strong></a>
			  <a href="../HTML/cinemas.html">CINEMAS</a>
			  <a href="../HTML/contact.html" style="text-decoration:underline;">CONTACT</a>
			  <div class="cart-icon" style="position:relative; right:-150px;">
				<span onclick="openNav()"><img src="../Images/cart-icon.png" width="40px"></span>
			  </div>
			</div>

			<div id="myCart" class="cartnav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<div class="cart-content">
					<h2 style="margin-left:10px;">MY CART</h2>
					<hr>
					<div class="item">
						<table id="cart-item">
							<tr>
								<td>Top Gun: Maverick</td>
							</tr>
							<tr>
								<td>3 Nov, 2.30pm</td>
							</tr>
							<tr>
								<td><input type="number" id="number" value="0" min="1" max="5"/></td>
							</tr>
						</table>
						<hr width="80%">
					</div>
				</div>
				<a href="../HTML/cart.html"><input type="submit" value="Checkout now" name="submit_1" class="checkout"></a>
			</div>
		</header>
		
		<div class="banner">
			<div class="banner-text">
			  <h1>ABOUT MOVIES @ NTU</h1>
			</div>
		</div>

		<section class="content">
			<div class="aboutus">
				<h4 style="text-decoration:underline;">About MOVIES @ NTU</h3>
				<p style="inline-size: 450px;">Founded in 2019, MOVIES @ NTU is the leading movie theatre in NTU, offering the widest variety of new and upcoming movie releases with varied cinematic experiences.<br><br>Every week, hundreds of students come together to watch the latest films, engage in deep discussions, and bond over their love for films.</p>
			</div>

			<div class="contactus">
				<h4 style="text-decoration:underline;">Contact Us</h3>
				<p>Dear <?php echo $_SESSION['name'] ?>,</p>
				<p>Your query has been sent! Do give us 1-2 working days to respond to you!</p>
				<p>Thank you!</p>
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