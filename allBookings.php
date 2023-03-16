<?php
include './includes/adminHeader.php';
$allBookings = $userObj->allBookings(); 

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
</style>
<header class = "flex header-sm">
    <div class = "container">
        <div class = "header-title">
            <h1>All bookings</h1>
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
            <th>Childerns</th>
            <th>Adults</th>
            <th>Class</th>
            <th>User name</th>
            <th>Flight name</th>
        </tr><?php
        if (count($allBookings) > 0) {
            foreach ($allBookings as $booking){?>
                <tr>
                    <td><?php echo $booking['trip'] ?></td>
                    <td><?php echo $booking['flying_from'] ?></td>
                    <td><?php echo $booking['flying_to'] ?></td>
                    <td><?php echo $booking['departure'] ?></td>
                    <td><?php echo $booking['return_date'] ?></td>
                    <td><?php echo $booking['childerns'] ?></td>
                    <td><?php echo $booking['adults'] ?></td>
                    <td><?php echo $booking['class'] ?></td>
                    <td><?php echo $booking['user_name'] ?></td>
                    <td><?php echo $booking['flight'] ?></td>
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