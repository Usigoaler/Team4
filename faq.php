<?php
include './includes/header.php';
$allFaq = $userObj->allFaq(); 

?>
<style>
body {
background-color: rgb(153, 218, 196);
}
.layout {
width: 600px;
margin: auto;
}
.accordion {
padding: 10px;
margin-top: 10px;
margin-bottom: 10px;
background: rgb(105, 206, 105);
border-radius: 10px;
}
.accordion__question p {
margin: 5px;
padding: 0;
font-family: Verdana;
font-size: 20px;
}
.accordion__answer p {
margin: 5px;
padding: 10px;
font-size: large;
font-family: Verdana, Geneva, Tahoma, sans-serif;
color: rgb(255, 255, 255);
background: rgb(82, 170, 122);
border-radius: 10px;
}
.accordion:hover {
cursor: pointer;
}
.accordion__answer {
display: none;
}
.accordion.active .accordion__answer {
display: block;
}

</style>
<header class = "flex header-sm">
    <div class = "container">
        <div class = "header-title">
            <h1>FAQ</h1>
        </div>
    </div>
</header>
<div class = "container">
    <div class="layout"><?php
    foreach ($allFaq as $faq) {?>
        <div class="accordion">
            <div class="accordion__question">
                <p><?php echo $faq['question'] ?></p>
        
            </div>
            <div class="accordion__answer">
                <p><?php echo $faq['answer'] ?></p>
            </div>
        </div><?php
    }?>
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
            let answers = document.querySelectorAll(".accordion");
answers.forEach((event) => {
  event.addEventListener("click", () => {
    if (event.classList.contains("active")) {
      event.classList.remove("active");
    } else {
      event.classList.add("active");
    }
  });
});
        </script>
    </body>
</html>