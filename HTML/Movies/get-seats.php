<!-- get-seats.php -->
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movies@ntu";

// Create connection
@$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

for ($i = 0; $i < 4; $i++) {
    if (isset($_POST["submit_" . ($i + 1)])) {
      $location = $_POST["location_" . ($i + 1)];
      $time = $_POST["submit_" . ($i + 1)];
    }
    $movie = $_POST["movie"];
    $date = date('d-m-Y', strtotime($_REQUEST["date"]));
  }

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

$selectedSeats = array();

$query = "SELECT * FROM " . $tableName . " WHERE BookingDate = '" . $date . "' AND BookingTime = '" . $time . "';";
$stmt = $db->prepare($query);
$stmt->execute();

$result = $stmt->get_result();
$num_results = $result->num_rows;

if ($num_results > 0) {
  for ($i = 0; $i < $num_results; $i++) {
    $row = $result->fetch_assoc();
    $selectedSeats[] = $row['SelectedSeats'];
  }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../../CSS/movie-page.css">
	<link rel="stylesheet" href="buy-tickets.css">
	<script src="../../JS/movie-page.js"></script>
	

    <title>MOVIES@NTU: Buy Ticket</title>
    </head>

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
            <main class="ticket-container">
                <div class="ticket-content">
                    <div class="ticket-steps">
                        <div class="ticket-steps-details current">
                        <div class="ticket-step-number">1</div>
                        <h2 class="ticket-step-text">Seat & Personal Info</h2>
                        </div>
                        <div class="ticket-steps-details">
                        <div class="ticket-step-number">2</div>
                        <h2 class="ticket-step-text">Price & Payment Selection</h2>
                        </div>
                        <div class="ticket-steps-details">
                        <div class="ticket-step-number">3</div>
                        <h2 class="ticket-step-text">Confirmation</h2>
                        </div>
                    </div>
                <div class="ticket-seat-selection">
                    <div class="ticket-poster-container">
                    <img src="" alt="" id="movie-poster" />
                    </div>
                    <div class="ticket-seat-selection-content">
                    <h3 class="ticket-instruction">
                        Please select your seat(s). <br />
                        You will receive a confirmation number at the end of the
                        transaction.
                    </h3>
                    <form action="save-info.php" class="ticket-customer-form" method="post" onsubmit="return checkValue();">
                        <div class="ticket-seating-plan">
                        <ul class="ticket-showcase">
                            <li>
                            <div class="ticket-seat not-available"></div>
                            <p>N/A</p>
                            </li>
                            <li>
                            <div class="ticket-seat available"></div>
                            <p>Available</p>
                            </li>
                            <li>
                            <div class="ticket-seat occupied"></div>
                            <p>Occupied</p>
                            </li>
                            <li>
                            <div class="ticket-seat selected"></div>
                            <p>Selected</p>
                            </li>
                        </ul>
                        <div class="ticket-seating-plan-container">
                            <div class="ticket-screen"></div>
                            <div class="ticket-seat-row">
                            <div class="ticket-seat-number">1</div>
                            <div class="ticket-seat-number">2</div>
                            <div class="ticket-seat-number">3</div>
                            <div class="ticket-seat-number">4</div>
                            <div class="ticket-seat-number">5</div>
                            <div class="ticket-seat-number">6</div>
                            <div class="ticket-seat-number">7</div>
                            <div class="ticket-seat-number">8</div>
                            </div>
                            <div class="ticket-seat-row">
                            <div class="ticket-seat-letter">A</div>
                            <div class="ticket-seat" data-value="A01"></div>
                            <div class="ticket-seat" data-value="A02"></div>
                            <div class="ticket-seat" data-value="A03"></div>
                            <div class="ticket-seat" data-value="A04"></div>
                            <div class="ticket-seat" data-value="A05"></div>
                            <div class="ticket-seat" data-value="A06"></div>
                            <div class="ticket-seat" data-value="A07"></div>
                            <div class="ticket-seat" data-value="A08"></div>
                            <div class="ticket-seat-letter">A</div>
                            </div>
                            <div class="ticket-seat-row">
                            <div class="ticket-seat-letter">B</div>
                            <div class="ticket-seat" data-value="B01"></div>
                            <div class="ticket-seat " data-value="B02"></div>
                            <div class="ticket-seat" data-value="B03"></div>
                            <div class="ticket-seat" data-value="B04"></div>
                            <div class="ticket-seat" data-value="B05"></div>
                            <div class="ticket-seat " data-value="B06"></div>
                            <div class="ticket-seat" data-value="B07"></div>
                            <div class="ticket-seat" data-value="B08"></div>
                            <div class="ticket-seat-letter">B</div>
                            </div>
                            <div class="ticket-seat-row">
                            <div class="ticket-seat-letter">C</div>
                            <div class="ticket-seat" data-value="C01"></div>
                            <div class="ticket-seat" data-value="C02"></div>
                            <div class="ticket-seat" data-value="C03"></div>
                            <div class="ticket-seat " data-value="C04"></div>
                            <div class="ticket-seat " data-value="C05"></div>
                            <div class="ticket-seat" data-value="C06"></div>
                            <div class="ticket-seat" data-value="C07"></div>
                            <div class="ticket-seat" data-value="C08"></div>
                            <div class="ticket-seat-letter">C</div>
                            </div>
                            <div class="ticket-seat-row">
                            <div class="ticket-seat-letter">D</div>
                            <div class="ticket-seat" data-value="D01"></div>
                            <div class="ticket-seat" data-value="D02"></div>
                            <div class="ticket-seat" data-value="D03"></div>
                            <div class="ticket-seat" data-value="D04"></div>
                            <div class="ticket-seat" data-value="D05"></div>
                            <div class="ticket-seat" data-value="D06"></div>
                            <div class="ticket-seat " data-value="D07"></div>
                            <div class="ticket-seat" data-value="D08"></div>
                            <div class="ticket-seat-letter">D</div>
                            </div>
                            <div class="ticket-seat-row">
                            <div class="ticket-seat-letter">E</div>
                            <div class="ticket-seat" data-value="E01"></div>
                            <div class="ticket-seat" data-value="E02"></div>
                            <div class="ticket-seat" data-value="E03"></div>
                            <div class="ticket-seat " data-value="E04"></div>
                            <div class="ticket-seat " data-value="E05"></div>
                            <div class="ticket-seat" data-value="E06"></div>
                            <div class="ticket-seat" data-value="E07"></div>
                            <div class="ticket-seat" data-value="E08"></div>
                            <div class="ticket-seat-letter">E</div>
                            </div>
                            <div class="ticket-seat-row">
                            <div class="ticket-seat-number">1</div>
                            <div class="ticket-seat-number">2</div>
                            <div class="ticket-seat-number">3</div>
                            <div class="ticket-seat-number">4</div>
                            <div class="ticket-seat-number">5</div>
                            <div class="ticket-seat-number">6</div>
                            <div class="ticket-seat-number">7</div>
                            <div class="ticket-seat-number">8</div>
                            </div>
                        </div>
                        <p class="ticket-seat-info">
                            You have selected
                            <!-- prettier-ignore --><input type="text" name="seat-count" id="seat-count" class="information center" size="1" value="0" readonly onfocus="this.blur();" />seat(s).
                            <!-- with seat number(s): <span id="seat-number"></span>. -->
                        </p>
                        </div>
                        <div class="ticket-details-box">
                        <p class="ticket-details-text">
                            You have selected
                            <input type="text" name="movie-name" id="movie-name" class="information ticket-underline" value="<?php echo $movie ?>" size="" readonly onfocus="this.blur();" />at
                            <span class="ticket-underline" id="cinema-branch"><?php echo $location; ?></span>.
                        </p>
                        <div class="ticket-details">
                            <div class="ticket-details-first-row">
                            <div class="ticket-date">
                                <p class="ticket-date-text">
                                Date:
                                <!-- prettier-ignore --><input type="text" name="ticket-date-selected" id="ticket-date-selected" class="information" size="" value="<?php echo $date;?>" readonly onfocus="this.blur();" />
                                </p>
                            </div>
                            <div class="ticket-cinema-hall">
                                <p class="ticket-cinema-hall-text">
                                Cinema Hall:
                                <!-- prettier-ignore --><input type="text" name="ticket-cinema-hall-selected" id="ticket-cinema-hall-selected" class="information" size="" value="<?php echo $location; ?>" readonly onfocus="this.blur();" />
                                </p>
                            </div>
                            </div>
                            <div class="ticket-details-second-row">
                            <div class="ticket-time">
                                <p class="ticket-time-text">
                                Time:
                                <!-- prettier-ignore --><input type="text" name="ticket-time-selected" id="ticket-time-selected" class="information" size="" value="<?php echo $time; ?>" readonly onfocus="this.blur();" />
                                </p>
                            </div>
                            <div class="ticket-cinema-seat">
                                <p class="ticket-cinema-seat-text">
                                Selected Seats:
                                <!-- prettier-ignore --><input type="text" name="ticket-cinema-seat-selected" id="ticket-cinema-seat-selected" class="information" size="" readonly onfocus="this.blur();" />
                                </p>
                            </div>
                            </div>
                        </div>
                        </div>
                        <p class="ticket-total">
                        Total Amount: S$<span id="ticket-price"></span>
                        </p>
                        <h3 class="ticket-customer-info-heading">Customer Information</h3>
                        <div class="ticket-customer-info">
                        <label for="customer-name" class="customer-name">Name: </label>
                        <input type="text" name="customer-name" id="customer-name" class="customer-name" required />
                        <label for="customer-mobileno" class="customer-mobileno">Mobile-No:
                        </label>
                        <input type="text" name="customer-mobileno" id="customer-mobileno" class="customer-mobileno" required />
                        <label for="customer-email" class="customer-email">Email:
                        </label>
                        <input type="email" name="customer-email" id="customer-email" class="customer-email" required />
                        </div>

                        <input type="submit" value="Proceed to Payment" class="payment-button" />
                        <!-- <a
                            href="ticket-price-&-payment-options.html"
                    class="payment-button"
                    >Proceed to Payment</a
                > -->
                    </form>
                </div>
                </div>
                </div>
            </main>
            <footer>
                <a href="mailto:june@bhar.com">june@bhar.com</a>
                <p>Movies @ NTU &copy; 2022</p>
                <button onclick="BackToTop()" id="bttop">Back to top</button>
            </footer>
        </div>
        <script src="seats.js" ></script>
        <script type="text/javascript">
            // var selectedSeats =
            <?php // echo '["' . implode('", "', $selectedSeats) . '"]' 
            ?>;

            var selectedSeats = [];
            <?php
            foreach ($selectedSeats as $val) {
            echo "selectedSeats.push('" . $val . "');";
            }
            ?>

            var splitSelectedSeats = [];
            selectedSeats.forEach((seat) => {
            if (seat.length > 3) {
                var splits = seat.split(",");
                splits.forEach((split) => {
                splitSelectedSeats.push(split);
                })
            } else {
                splitSelectedSeats.push(seat);
            }

            })

            const seatsContainer = document.querySelectorAll('.ticket-seat');
            seatsContainer.forEach((seat) => {
            splitSelectedSeats.forEach((data) => {
                if (data == seat.dataset.value) {
                seat.classList.toggle('occupied');
                }
            })
            })
        </script>
    </body>
</html>