<?php
include './includes/header.php';

$allFeaturedImages = $userObj->imageListByType(2);


if (isset($_POST['book'])) {
    $trip = $_POST['trip'];
    $flying_from = $_POST['flying_from'];
    $flying_to = $_POST['flying_to'];
    $departure = $_POST['departure'];
    $return_date = $_POST['return_date'];
    $childrens = $_POST['childrens'];
    $adults = $_POST['adults'];
    $class = $_POST['class'];
    $userId = $_POST['user_id'];
    $userObj->saveBooking(
        $trip,
        $flying_from,
        $flying_to,
        $departure,
        $return_date,
        $childrens,
        $adults,
        $class,
        $userId
    ); 
    header('location:index.php');
    exit;
}
?>

        <header class = "flex">
            <div class = "container">
                <div class = "header-title">
                    <h1>Fly to Freedom</h1>
                    <p>Our airline is a leading provider of air transportation services, offering international flights to a diverse range of destinations. With a modern fleet of aircraft, a commitment to safety and comfort, and a team of experienced pilots and flight attendants, we provide a premium travel experience to our passengers. We strive to make air travel accessible, convenient, and enjoyable, and we are constantly exploring new ways to enhance our services and exceed customer expectations.</p>
                </div>

                <?php
                if(isset($_SESSION['user_id']) && $_SESSION["user_type"] != 1) { ?>
                <div class = "header-form">
                    <h2>Choose your Travel location:</h2>
                    <section class="header">
                        <form method="post" action="searchFlightList.php">
                            
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
                                </div>
                
                                <div class="input__grp">
                                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>">
                                    <button type="submit" name="book" class="btn btn-primary flight">Search</button>
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

        <section id = "featured" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">know about some places before your travel</span>
                    <h2 class = "lg-title">featured places</h2>
                </div>

                <div class = "featured-row"><?php 
                    foreach ($allFeaturedImages as $image) { ?>
                        <div class = "featured-item my-2 shadow">
                            <img src = "uploads/<?php echo $image['path'] ?>" alt = "featured place">
                            <div class = "featured-item-content">
                                <span>
                                    <i class = "fas fa-map-marker-alt"></i>
                                    <?php echo $image['place'] ?>
                                </span>
                                <div>
                                    <p class = "text"><?php echo $image['description'] ?></p>
                                </div>
                            </div>
                        </div><?php
                    }?>
                    
                    <!-- <div class = "featured-item my-2 shadow">
                        <img src = "images/IndiaIN.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Delhi, India
                            </span>
                            <div>
                                <p class = "text">The Taj Mahal is an ivory-white marble mausoleum on the south bank of the Yamuna river in the Indian city of Agra. It was commissioned in 1632 by the Mughal emperor, Shah Jahan (reigned from 1628 to 1658)</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/Pakistancity.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Islamabad, Pakistan
                            </span>
                            <div>
                                <p class = "text">The Faisal Mosque is the largest mosque in Pakistan, located in the national capital city of Islamabad. Completed in 1986, it was designed by Turkish architect Vedat Dalokay, shaped like a desert Bedouin's tent, is an iconic symbol of Islamabad throughout the world.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/Turkeycity.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Istanbul, Turkey
                            </span>
                            <div>
                                <p class = "text">The Blue Mosque in Istanbul, also known by its official name, the Sultan Ahmed Mosque (Turkish: Sultan Ahmet Camii), is an Ottoman-era historical imperial mosque located in Istanbul, Turkey.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/Australia.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Sydney, Australia
                            </span>
                            <div>
                                <p class = "text">The Sydney Opera House is a multi-venue performing arts centre in Sydney. Located on the foreshore of Sydney Harbour, it is widely regarded as one of the world's most famous and distinctive buildings and a masterpiece of 20th-century architecture.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/Egyptcity.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                               Giza, Egypt
                            </span>
                            <div>
                                <p class = "text">The Egyptian pyramids are ancient masonry structures located in Egypt. Sources cite at least 118 identified "Egyptian" pyramids.[1][2] Approximately 80 pyramids were built within the Kingdom of Kush, now located in the modern country of Sudan. Of those located in modern Egypt, most were built as tombs for the country's pharaohs and their consorts during the Old and Middle Kingdom periods.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/SaudiSA.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Medina, Saudi
                            </span>
                            <div>
                                <p class = "text">Medina is a city in western Saudi Arabia. In the city center, the vast Al-Masjid an-Nabawi (Prophet's Mosque) is a major Islamic pilgrimage site. Its striking Green Dome rises above the tombs of the Prophet Muhammad and early Islamic leaders Abu Bakr and Umar. The Masjid al-Qiblatain (Qiblatain Mosque) is known as the site where the Prophet Muhammad received the command to change the direction of prayer to Mecca.</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        
        <section id = "services" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">know about services that we offer</span>
                    <h2 class = "lg-title">Our services</h2>
                </div>

                <div class = "services-row">
                    <div class = "services-item">
                        <span class = "services-icon">
                         </span>
                    </div>

                    <div class = "services-item">
                        <span class = "services-icon">
                            <i class = "fas fa-map-marked-alt"></i>
                        </span>
                        <h3>Travel Guide</h3>
                        <p class = "text">Welcome to our travel guide! We are passionate about travel and love sharing our knowledge and experiences with others. Our guide is designed to provide you with valuable information, tips, and recommendations for your next adventure. From finding the best deals on flights, to discovering must-see destinations and cultural experiences, we have got you covered. Whether you are a seasoned traveler or planning your first trip, our travel guide is a valuable resource to help you make the most of your travels. So, let's start exploring the world together!</p>
                        <a href = "#" class = "btn">Read more</a>
                    </div>

                    <div class = "services-item">
                        <span class = "services-icon">
                        </span>
                    </div>
                </div>
            </div>
        </section>
        
        <section id = "testimonials" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">what our clients say about us</span>
                    <h2 class = "lg-title">testimonials</h2>
                </div>

                <div class = "test-row">
                    <div class = "test-item">
                        <p class = "text">My recent visit to Bangladesh was truly a delightful experience. The country was filled with an energy that was contagious, and I felt a deep connection to the people and the culture. From the bustling cities to the tranquil countryside, I was amazed by the beauty and diversity of the region. The hospitality of the people was heartwarming, and I was continually struck by their kindness and generosity. The food was delicious and I enjoyed trying new dishes, each with its own unique flavor and history. Additionally, visiting the cultural landmarks and monuments was a fascinating and educational experience, and I was amazed by the rich history and heritage of the region. I would highly recommend Bangladesh to anyone looking for an adventure, filled with new experiences and unforgettable memories.</p>
                        <div class = "test-item-info">
                            <img src = "images/test-1.jpg" alt = "testimonial">
                            <div>
                                <h3>Dhruv</h3>
                                <p class = "text">Trip to Bangladesh</p>
                            </div>
                        </div>
                    </div>

                    <div class = "test-item">
                        <p class = "text">My recent trip to Canada was nothing short of breathtaking. From the towering peaks of the Rocky Mountains to the tranquil lakes of the countryside, the country is a visual feast. The friendly and welcoming people made me feel right at home, and I was constantly amazed by their kindness and hospitality. I was also fortunate enough to try some of the delicious local cuisine, which was a fusion of traditional and contemporary flavors. The cities were vibrant and alive with a unique energy, and I was able to visit some of the country's iconic landmarks and attractions, such as the CN Tower and Niagara Falls. Overall, my trip to Canada was a wonderful and unforgettable experience, and I would highly recommend it to anyone looking for a blend of natural beauty, friendly people, and rich cultural experiences.</p>
                        <div class = "test-item-info">
                            <img src = "images/test-2.jpg" alt = "testimonial">
                            <div>
                                <h3>Usman</h3>
                                <p class = "text">Trip to Canada</p>
                            </div>
                        </div>
                    </div>

                    <div class = "test-item">
                        <p class = "text">My recent visit to Iran was a truly eye-opening experience. The country is steeped in history and culture, and I was constantly discovering new and fascinating things. The people were warm and welcoming, and I was struck by their hospitality and kindness. I was able to visit some of the country's historic landmarks and monuments, such as the Nasir al-Mulk Mosque and the Golestan Palace, and was amazed by the intricate designs and rich history of these sites. The local cuisine was delicious, with flavors that were both bold and comforting, and I had the opportunity to try some traditional dishes that I will never forget. Overall, my trip to Iran was a wonderful and enriching experience, and I would highly recommend it to anyone looking for a cultural adventure that is both fascinating and unforgettable.</p>
                        <div class = "test-item-info">
                            <img src = "images/test-3.jpg" alt = "testimonial">
                            <div>
                                <h3>Daisy</h3>
                                <p class = "text">Trip to Iran</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id = "video">
            <div class = "video-wrapper flex">
                <video loop>
                    <source src = "videos/mainpage.mp4" type = "video/mp4">
                </video>
                <button type = "button" id = "play-btn">
                    <i class = "fas fa-play"></i>
                </button>
            </div>
        </section>
       
        <footer class = "py-4">
            <div class = "container footer-row">
                <div class = "footer-item">
                    <a href = "index.html" class = "site-brand">
                        ASTON<span>AIR</span>
                    </a>
                    <p class = "text">We are a leading airline company dedicated to providing safe, comfortable, and enjoyable air travel. Our modern fleet and experienced team ensure a premium travel experience for all passengers. Our goal is to make air travel accessible and convenient for everyone.</p>
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
                        <li><a href = "#">Pakistan</a></li>
                        <li><a href = "#">India</a></li>
                        <li><a href = "#">Canada</a></li>
                        <li><a href = "#">Afghanistan</a></li>
                        <li><a href = "#">Turkey</a></li>
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

        <script src = "js/script.js"></script>
        <script>
            
            let video = document.querySelector('.video-wrapper video');
            document.getElementById('play-btn').addEventListener('click', () => {
                if(video.paused){
                    video.play();
                } else {
                    video.pause();
                }
            });
        </script>
    </body>
</html>