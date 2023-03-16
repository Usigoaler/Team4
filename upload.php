<?php
include './includes/adminHeader.php';
if (isset($_POST['image'])) {
    $path =  $_FILES["file"]["name"];
    move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/" . $_FILES["file"]["name"]);			
    $type = $_POST['type'];
    $place = $_POST['place'];
    $description =htmlspecialchars($_POST['description'], ENT_QUOTES);
    $userObj->saveImage($path, $type, $place, $description); 
    header('location:upload.php');
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
<header class = "flex header-sm">
    <div class = "container">
        <div class = "header-title">
            <h1>upload image</h1>
        </div>
    </div>
</header>
<div class = "container">
    <div class="full-page">
        <div class="row">
            <div class="col-1">
                <div class="form">
                    <form class="login-form" method="post" enctype="multipart/form-data">
                        <center><h1 class="main-heading">Upload Image</h1></center>
                        <input type="file" name="file" accept=" .png, .jpg, .jpeg" required />
                        <select name="type" style="width: 100%; margin-bottom: 5px;"  required>
                            <option value="0">Gallery Image</option>
                            <option value="1">Popular Place</option>
                            <option value="2">Featured Place</option>
                        </select>
                        <input type="text" name="place" placeholder="enter place name" id="">
                        <textarea rows = "4" name="description" style="color: black;" class = "form-control" placeholder="Enter description"></textarea>
                        <button type="submit" name="image">save</button>
                    </form>
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