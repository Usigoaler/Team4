<?php
include './includes/header.php';

if (isset($_POST['contact_us'])) {
    $userName = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $userObj->contactUs($userName, $email, $message); 
    header('location:contact.php');
    exit;
}
?>
        

        <header class = "flex header-sm">
            <div class = "container">
                <div class = "header-title">
                    <h1>Contact</h1>
                    <p>Welcome to our contact page, where we are always eager to hear from you! Our goal is to provide excellent customer service and support, and we are here to assist you with any questions or concerns you may have. Whether you need help with booking a flight, have a question about your itinerary, or would like to provide feedback on your recent travel experience, we are here to help. Our friendly and knowledgeable team is available to assist you by phone, email, or through our online contact form. So don't hesitate to reach out to us today. We look forward to hearing from you soon!</p>
                </div>
            </div>
        </header>
        

        <section id = "contact" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">get in touch with us</span>
                    <h2 class = "lg-title">contact us</h2>
                </div>

                <div class = "contact-row">
                    <div class = "contact-left">
                        <form class = "contact-form" method="post">
                            <input type = "text" name="name" class = "form-control" placeholder="Your name" required>
                            <input type = "email"name='email' class = "form-control" placeholder="Your email" required>
                            <textarea rows = "4" name="message" class = "form-control" placeholder="Your message" style = "resize: none;" required></textarea>
                            <input type = "submit" name='contact_us' class = "btn" value = "Send message">
                        </form>
                    </div>
                    <div class = "contact-right my-2">
                        <div class = "contact-item">
                            <span class = "contact-icon flex">
                                <i class = "fa fa-phone-alt"></i>
                            </span>
                            <div>
                                <span>Phone</span>
                                <p class = "text">+01-0000000000</p>
                            </div>
                        </div>
                        <div class = "contact-item">
                            <span class = "contact-icon flex">
                                <i class = "fa fa-map-marked-alt"></i>
                            </span>
                            <div>
                                <span>Address</span>
                                <p class = "text">ASTON UNIVERSITY, BIRMINGHAM, UNITED KINGDOM</p>
                            </div>
                        </div>
                        <div class = "contact-item">
                            <span class = "contact-icon flex">
                                <i class = "fa fa-envelope"></i>
                            </span>
                            <div>
                                <span>Message</span>
                                <p class = "text">astonair@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
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
            
        </script>
    </body>
</html>