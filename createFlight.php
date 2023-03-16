<?php
include './includes/adminHeader.php';
if (isset($_POST['book'])) {
  $trip = $_POST['trip'];
  $flying_from = $_POST['flying_from'];
  $flying_to = $_POST['flying_to'];
  $departure = $_POST['departure'];
  $return_date = $_POST['return_date'];
  $flight = $_POST['flight'];

  $userObj->saveFlight(
      $trip,
      $flying_from,
      $flying_to,
      $departure,
      $return_date,
      $flight
  ); 
  header('location:index.php');
  exit;
}
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

<header class = "flex">
            <div class = "container">
                <!-- <div class = "header-title">
                    <h1>Fly to Freedom</h1>
                    <p>Our airline is a leading provider of air transportation services, offering international flights to a diverse range of destinations. With a modern fleet of aircraft, a commitment to safety and comfort, and a team of experienced pilots and flight attendants, we provide a premium travel experience to our passengers. We strive to make air travel accessible, convenient, and enjoyable, and we are constantly exploring new ways to enhance our services and exceed customer expectations.</p>
                </div> -->

                <?php
                if(isset($_SESSION['user_id'])) { ?>
                <div class = "header-form">
                    <h2>Create Travel location:</h2>
                    <section class="header">
                        <form method="post">
                            
                        <div class="booking__form">
                            <div class="form__inputs">
                                <div class="radio__btn">
                                    <input type="radio" class="btn" name="trip" value="One Way" checked="checked"><span>One Way</span>
                                    <input type="radio" class="btn" name="trip" value="Round Trip"><span>Round Trip</span>
                                </div>
                
                                <div class="booking__forminfo">
                                    <label for="Airport">Flying From</label>
                                    <input type="text" name="flying_from" id="Airport" list="Airport__List" placeholder="Enter City/Airport" size="26" required>
                                    <datalist id="Airport__List">
                                        <option value="Heathrow (LHR)">London</option>
                                        <option value="Islamabad (ISB)">Pakistan</option>
                                        <option value="Jinnah international (KHI)">Pakistan</option>
                                        <option value="Allama Iqbal (LHE)">Pakistan</option>
                                        <option value="Indira Gandhi (DEL)">India</option>
                                        <option value="Chhatrapati Shivaji Maharaj (BOM)">India</option>
                                        <option value="Chennai International (MAA)">India</option>
                                        <option value="King Abdulaziz (JED)">Saudi Arabia</option>
                                        <option value="King Khalid (RUH)">Saudi Arabia</option>
                                        <option value="Osmani international (ZYL)">Bangladesh</option>
                                        <option value="Hazarat Shahjalal (DAC)">Bangladesh</option>
                                        <option value="Cairo (CAI)">Egypt</option>
                                        <option value="luxor (LXR)">Egypt</option>
                                        <option value="Herat (HEA)">Afghanistan</option>
                                        <option value="Kandahar (KDH)">Afghanistan</option>
                                        <option value="Sydney (SYD)">Australia</option>
                                        <option value="Brisbane (BNE)">Australia</option>
                                        <option value="Melbourne (MEL)">Australia</option>
                                        <option value="Calgary (YYC)">Canada</option>
                                        <option value="Edmonton international (YEG)">Canada</option>
                                        <option value="Fredericton (YFC)">Canada</option>
                                        <option value="Istanbul (IST)">Turkey</option>
                                        <option value="Antalya (AYT)">Turkey</option>
                                        <option value="Imam Khomeni international (IKA)">Iran</option>
                                        <option value="Mashhad (MHD)">Iran</option>
                                    </datalist>
                
                                    <label for="Airport">Flying To</label>
                                    <input type="text" name="flying_to" id="Airport" list="Airport__List" placeholder="Enter City/Airport" size="26" required>
                                    <datalist id="Airport__List">
                                        <option value="Heathrow (LHR)">London</option>
                                        <option value="Islamabad (ISB)">Pakistan</option>
                                        <option value="Jinnah international (KHI)">Pakistan</option>
                                        <option value="Allama Iqbal (LHE)">Pakistan</option>
                                        <option value="Indira Gandhi (DEL)">India</option>
                                        <option value="Chhatrapati Shivaji Maharaj (BOM)">India</option>
                                        <option value="Chennai International (MAA)">India</option>
                                        <option value="King Abdulaziz (JED)">Saudi Arabia</option>
                                        <option value="King Khalid (RUH)">Saudi Arabia</option>
                                        <option value="Osmani international (ZYL)">Bangladesh</option>
                                        <option value="Hazarat Shahjalal (DAC)">Bangladesh</option>
                                        <option value="Cairo (CAI)">Egypt</option>
                                        <option value="luxor (LXR)">Egypt</option>
                                        <option value="Herat (HEA)">Afghanistan</option>
                                        <option value="Kandahar (KDH)">Afghanistan</option>
                                        <option value="Sydney (SYD)">Australia</option>
                                        <option value="Brisbane (BNE)">Australia</option>
                                        <option value="Melbourne (MEL)">Australia</option>
                                        <option value="Calgary (YYC)">Canada</option>
                                        <option value="Edmonton international (YEG)">Canada</option>
                                        <option value="Fredericton (YFC)">Canada</option>
                                        <option value="Istanbul (IST)">Turkey</option>
                                        <option value="Antalya (AYT)">Turkey</option>
                                        <option value="Imam Khomeni international (IKA)">Iran</option>
                                        <option value="Mashhad (MHD)">Iran</option>
                                    </datalist>
                                </div>
                
                                <div class="input__grp">
                                    <label>Departure</label>
                                    <input type="date" name="departure" class="form-control select-date" required>
                                </div>
                
                                <div class="input__grp">
                                    <label>Return</label>
                                    <input type="date" name="return_date" class="form-control select-date" required>
                                </div>
                                <div class="input__grp">
                                    <label>Flight Name</label>
                                    <input type="text" name="flight" class="form-control select-date" required>
                                </div>
<!--                 
                                <div class="input__grp">
                                    <label>Children</label>
                                    <input type="number" name="childrens" class="form-control" value="0" required>
                                </div>
                
                                <div class="input__grp">
                                    <label>Adults</label>
                                    <input type="number" name="adults" class="form-control" value="0" required>
                                </div>
                                <div class="input__grp">
                                    <label>Class</label>
                                    <select class="custom-select" name="class" required>
                                        <option value="Economy Class">Economy Class</option>
                                        <option value="Buisness Class">Buisness Class</option>
                                        <option value="First Class">First Class</option>
                                    </select>
                                </div> -->
                
                                <div class="input__grp">
                                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>">
                                    <button type="submit" name="book" class="btn btn-primary flight">save</button>
                                    <!-- <input type="text" id="search-input">
                                    <button id="search-button">Search</button>
                                    <script src="search.js"></script> -->
                                </div>
                            </div>
                            
                        </div> 
                    </form><?php
                }?>
            </div>
        </header>
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