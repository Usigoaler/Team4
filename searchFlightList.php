<?php
include './includes/header.php';
$trip = $_POST['trip'];
$flying_from = $_POST['flying_from'];
$flying_to = $_POST['flying_to'];
$departure = $_POST['departure'];
$returnDate = $_POST['return_date'];
$childrens = $_POST['childrens'];
$adults = $_POST['adults'];
$class = $_POST['class'];
$userId = $_POST['user_id'];
$allBookings = $userObj->searchFligts($trip, $flying_from, $flying_to, $departure, $returnDate); 
?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 20px;
  margin-bottom: 20px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 12px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
<header class = "flex header-sm">
    <div class = "container">
        <div class = "header-title">
            <h1>My bookings</h1>
        </div>
    </div>
</header>
<div class = "container">
    <table>
        <tr>
            <th>Trip</th>
            <th>Flying From</th>
            <th>Flying To</th>
            <th>Departure</th>
            <th>Return Date</th>
            <th>flight name</th>
            <th>action</th>
        </tr><?php
        if (count($allBookings) > 0) {
            foreach ($allBookings as $booking){?>
                <tr>
                    <td><?php echo $booking['trip'] ?></td>
                    <td><?php echo $booking['flying_from'] ?></td>
                    <td><?php echo $booking['flying_to'] ?></td>
                    <td><?php echo $booking['departure'] ?></td>
                    <td><?php echo $booking['return_date'] ?></td>
                    <td><?php echo $booking['flight'] ?></td>
                    <td>
                      <form action="myBookings.php" method="post">
                        <input type="hidden" name="flight_id" value="<?php echo $booking['id'] ?>">
                        <input type="hidden" name="childrens" value="<?php echo $childrens ?>">
                        <input type="hidden" name="adults" value="<?php echo $adults ?>">
                        <input type="hidden" name="class" value="<?php echo $class ?>">
                        <input type="hidden" name="user_id" value="<?php echo $userId ?>">
                        <Button type="submit" class="button">Book</Button>
                      </form>
                    </td>
                </tr><?php
            }
        }?>
    </table>
</div>
<footer class = "py-4">
            <div class = "container footer-row">
                <div class = "footer-item">
                    <a href = "index.html" class = "site-brand">
                        ASTON<span>AIR</span>
                    </a>
                    <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptates maiores nam vitae iusto. Placeat rem sint voluptas natus exercitationem autem quod neque, odit laudantium reiciendis ipsa suscipit veritatis voluptate.</p>
                </div>

                <div class = "footer-item">
                    <h2>Follow us on: </h2>
                    <ul class = "social-links">
                        <li>
                            <a href = "https://www.facebook.com/people/Aston-Air/100088863734295/">
                                <i class = "fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "https://twitter.com/astonair1337">
                                <i class = "fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "https://www.linkedin.com/in/aston-air-10156925b">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>


                <div class = "footer-item">
                    <h2>Popular Places:</h2>
                    <ul>
                        <li><a href = "#">Thailand</a></li>
                        <li><a href = "#">Australia</a></li>
                        <li><a href = "#">Maldives</a></li>
                        <li><a href = "#">Switzerland</a></li>
                        <li><a href = "#">Germany</a></li>
                    </ul>
                </div>

                <div class = "subscribe-form footer-item">
                    <h2>Subscribe for Newsletter!</h2>
                    <form class = "flex">
                        <input type = "email" placeholder="Enter Email" class = "form-control">
                        <input type = "submit" class = "btn" value = "Subscribe">
                    </form>
                </div>
            </div>
        </footer>
        
        <script src='https://code.jquery.com/jquery-3.2.1.min.js'>
        </script>
        <script>
            $('.message a').click(function(){$('form').animate({height: "toggle",opacity: "toggle"},"slow");});
        </script>
    </body>
</html>