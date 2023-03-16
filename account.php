<?php
include './includes/header.php';

if (isset($_POST['register'])) {
    $userName = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $userObj->signup($userName, $email, $password); 
    header('location:account.php');
    exit;
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $data = $userObj->login($email, $password);
    if(!empty($data) && is_array($data)) {
        $_SESSION["user_id"] = $data["id"];
        $_SESSION["user_type"] = $data["user_type"];
        if ($data["user_type"] == 1) {
            header('location:allBookings.php');
        } else {
            header('location:index.php');
        }
        exit;
    } else {
        $_SESSION['error']="Invalid Email or Password";
        header('location:account.php');
        exit;
    }
}

?>

        <header class = "flex header-sm">
            <div class = "container">
                <div class = "header-title">
                    <h1>Account</h1>
                    
                </div>
            </div>
        </header>
        
        <section id = "blog" class = "py-4">
            

                  
            <div class="full-page">
                
                <div class="row">
                     <div class="col-1">
                         
                             <div class="form">
                                 <form class="login-form" method="post">
     
                                     <center><h1 class="main-heading">Login</h1></center>
                                     <input type="text" name="email" placeholder="email" required />
                                     <input type="password" name='password' placeholder="password" required />
                                     <button type="submit" name="login">LOGIN</button>
                                     <p class="message">Not Registered? <a href="#">Register</a></p>
                                 </form>
                                 <form class="register-form" method="post">
                                     <center><h1 class="main-heading">Register Form</h1></center>
                                     <input type="text" name="user_name" placeholder="user name" required />
                                     <input type="text" name="email" placeholder="email-id" required />
                                     <input type="password" name="password" placeholder="password" required />
                                     <button type="submit" name="register">REGISTER</button>
                                     <p class="message">Already Registered?<a href="#">Login</a>
                                     </p>
                                 </form>
                              </div>
                         </div>
                     </div>
                    
                 </div>
             </div>
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