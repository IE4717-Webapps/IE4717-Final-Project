<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="../../CSS/movie-page.css"/>
  <link rel="stylesheet" href="confirm.css" />
  <title>MOVIES@NTU: Showtimes</title>
</head>

<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movies@ntu";

$tableName = '';
$orderID = $_SESSION['orderID'];
$movie = $_SESSION['movieName'];

switch ($movie) {
  case 'Top Gun: Maverick':
    $tableName = 'topgun';
    break;
  case 'The Worst Person In The World':
    $tableName = 'theworst';
    break;
  case 'Licorice Pizza':
    $tableName = 'licorice';
    break;
  case 'Turning Red':
    $tableName = 'turningred';
    break;
  case 'Everything Everywhere All At Once':
    $tableName = 'eeaao';
    break;
  case 'Doctor Strange In The Multiverse Of Madness':
    $tableName = 'drstrange';
    break;
  case 'Fantastic Beasts: The Secrets Of Dumbledore':
    $tableName = 'fantastic';
    break;
  case 'Decision To Leave':
    $tableName = 'decision';
    break;
}

// Create connection
@$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM " . $tableName . " WHERE OrderID = '" . $orderID . "';";
$stmt = $db->prepare($query);
$stmt->execute();

$result = $stmt->get_result();
$num_results = $result->num_rows;

for ($i = 0; $i < $num_results; $i++) {
  $row = $result->fetch_assoc();
  //$movie = $row['Movie'];
  $date = $row['BookingDate'];
  $time = $row['BookingTime'];
}
session_destroy();

?>

<body>
  <div id="wrapper">
  <header>
                <div class="topnav">
                <a href="../../HTML/index.html" style="text-decoration:underline;">HOME</a>
                <a href="../../HTML/movies.html">MOVIES</a>
                <a class="homebutton" href="../../HTML/index.html"><strong>MOVIES @ NTU</strong></a>
                <a href="../../HTML/cinemas.html">CINEMAS</a>
                <a href="../../HTML/contact.html">CONTACT</a>
                <div class="cart-icon" style="position:relative; right:-150px;">
                    <span onclick="openNav()"><img src="../../Images/cart-icon.png" width="40px"></span>
                </div>
                </div>

                <div id="myCart" class="cartnav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="#">About</a>
                </div>
        </header> 


  <main class="confirmation-container">
    <div class="confirmation-content">
      <div class="ticket-steps">
        <div class="ticket-steps-details">
          <div class="ticket-step-number">1</div>
          <h2 class="ticket-step-text">Seat & Personal Info</h2>
        </div>
        <div class="ticket-steps-details">
          <div class="ticket-step-number">2</div>
          <h2 class="ticket-step-text">Price & Payment Selection</h2>
        </div>
        <div class="ticket-steps-details current">
          <div class="ticket-step-number">3</div>
          <h2 class="ticket-step-text">Confirmation</h2>
        </div>
      </div>
      <div class="confirmation-text">
        <p>
          You have booked <span class="underline"><?php echo $movie ?></span> for
          <span class="underline"><?php echo $date ?></span> at
          <span class="underline"><?php echo $time ?></span>. <br />
        </p>
        <p>
          A confirmation e-mail has been sent to your inbox. Please refer to
          the e-mail for more information or make changes to your booking.
          <br />
        </p>
        <p>Thank you! <br /></p>
        <p class="small">You may leave this page now.</p>
      </div>
      <a href="../index.html" class="home-button">Back to Home</a>
    </div>
  </main>
</div>
</body>

</html>