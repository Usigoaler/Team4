<?php
include './includes/header.php';

$allGalleryImages = $userObj->imageListByType(0);
$allPopularImages = $userObj->imageListByType(1);

?>

        <header class = "flex header-sm">
            <div class = "container">
                <div class = "header-title">
                    <h1>Gallery</h1>
                    <p>Welcome to our gallery page! This page is dedicated to showcasing the beauty and excitement of the destinations we offer. Our gallery is a visual journey through some of the most stunning places on earth, and we hope that it inspires you to embark on your own adventure. Each image tells a story and captures the essence of the destination, from breathtaking landscapes and architectural wonders, to bustling cities and charming villages. Whether you're planning your next trip or just looking for inspiration, our gallery is the perfect place to start. So sit back, relax, and let the images transport you to a world of discovery and wonder.</p>
                </div>
            </div>
        </header>

        <div id = "gallery" class = "py-4">
            <div class = "container">
                <div class = "gallery-row"><?php
                foreach ($allGalleryImages as $image) { ?>
                    <div class = "gallery-item shadow">
                        <img src = "uploads/<?php echo $image['path'] ?>" alt = "gallery img">
                        <span class = "zoom-icon">
                            <i class = "fas fa-search-plus"></i>
                        </span>
                    </div><?php
                }?>
                    <!-- <div class = "gallery-item shadow">
                        <img src = "images/gallery-1.jpg" alt = "gallery img">
                        <span class = "zoom-icon">
                            <i class = "fas fa-search-plus"></i>
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/gallery-2.jpg" alt = "gallery img">
                        <span class = "zoom-icon">
                            <i class = "fas fa-search-plus"></i>
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/gallery-3.jpg" alt = "gallery img">
                        <span class = "zoom-icon">
                            <i class = "fas fa-search-plus"></i>
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/gallery-4.jpg" alt = "gallery img">
                        <span class = "zoom-icon">
                            <i class = "fas fa-search-plus"></i>
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/gallery-5.jpg" alt = "gallery img">
                        <span class = "zoom-icon">
                            <i class = "fas fa-search-plus"></i>
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/gallery-6.jpg" alt = "gallery img">
                        <span class = "zoom-icon">
                            <i class = "fas fa-search-plus"></i>
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/gallery-7.jpg" alt = "gallery img">
                        <span class = "zoom-icon">
                            <i class = "fas fa-search-plus"></i>
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/gallery-8.jpg" alt = "gallery img">
                        <span class = "zoom-icon">
                            <i class = "fas fa-search-plus"></i>
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/gallery-9.jpg" alt = "gallery img">
                        <span class = "zoom-icon">
                            <i class = "fas fa-search-plus"></i>
                        </span>
                    </div> -->
                </div>
            </div>
        </div>
        
        <div id = "img-modal-box">
            <div id = "img-modal">
                <button type = "button" id = "modal-close-btn" class = "flex">
                    <i class = "fas fa-times"></i>
                </button>
                <button type = "button" id = "prev-btn" class = "flex">
                    <i class = "fas fa-chevron-left"></i>
                </button>
                <button type = "button" id = "next-btn" class = "flex">
                    <i class = "fas fa-chevron-right"></i>
                </button>
                <img src = "images/gallery-1.jpg">
            </div>
        </div>

        <section id = "popular" class = "py-4">
            <div class = "title-wrap">
                <span class = "sm-title">know about some cool destination</span>
                <h2 class = "lg-title">Popular Places</h2>
            </div>

            <div class = "popular-row"><?php
                foreach ($allPopularImages as $image) { ?>
                    <div class = "popular-item shadow">
                        <img src = "uploads/<?php echo $image['path'] ?>" alt = "">
                        <div>
                            <span><?php echo $image['place'] ?></span>
                            <ul class = "rating flex">
                                <li><i class = "fas fa-star"></i></li>
                                <li><i class = "fas fa-star"></i></li>
                                <li><i class = "fas fa-star"></i></li>
                                <li><i class = "fas fa-star"></i></li>
                                <li><i class = "fas fa-star-half-alt"></i></li>
                                <li>&nbsp;206,324 reviews</li>
                            </ul>
                            <p class = "text"><?php echo $image['description'] ?></p>
                        </div>
                    </div><?php
                }?>
                <!-- <div class = "popular-item shadow">
                    <img src = "images/Lal__kila.jpg" alt = "">
                    <div>
                        <span>Lal Kila, India</span>
                        <ul class = "rating flex">
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star-half-alt"></i></li>
                            <li>&nbsp;206,324 reviews</li>
                        </ul>
                        <p class = "text">The Red Fort or Lal Qila is a historic fort in Old Delhi, Delhi in India that <br> served as the main residence of the Mughal Emperors. Emperor Shah <br> Jahan commissioned construction of the Red Fort on <br> 12 May 1638, when he decided to shift his capital from Agra to Delhi.</p>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/minare__pakistan.jpg" alt = "">
                    <div>
                        <span>Minar-e-Pakistan, Pakistan</span>
                        <ul class = "rating flex">
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star-half-alt"></i></li>
                            <li>&nbsp;238,443 reviews</li>
                        </ul>
                        <p class = "text">Minar E Pakistan is a tower located in Lahore, Pakistan. The tower was <br> built between 1960 and 1968 on the site where the All-India Muslim <br> League passed the Lahore Resolution (which was later called the Pakistan Resolution) on 23 March 1940 - the first official call for a separate and independent homeland for the Muslims of British India, <br> as espoused by the two-nation theory. The resolution eventually helped lead to the creation of <br> Pakistan in 1947.</p>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/Dhaka.jpg" alt = "">
                    <div>
                        <span>Dhaka, Bangladesh</span>
                        <ul class = "rating flex">
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star-half-alt"></i></li>
                            <li>&nbsp;50,435 reviews</li>
                        </ul>
                        <p class = "text">Dhaka is the capital city of Bangladesh, in southern Asia. Set beside the Buriganga River, it’s at the center of national government, trade and <br> culture. The 17th-century old city was the Mughal capital of Bengal, <br> and many palaces and mosques remain. American architect Louis Khan’s National Parliament House complex typifies the huge, fast-growing modern metropolis.</p>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/Australiacity.jpg" alt = "">
                    <div>
                        <span>Sydney, Australia</span>
                        <ul class = "rating flex">
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star-half-alt"></i></li>
                            <li>&nbsp;200,235 reviews</li>
                        </ul>
                        <p class = "text">The Sydney Opera House is a multi-venue performing arts centre in <br> Sydney. Located on the foreshore of Sydney Harbour, it is widely <br> regarded as one of the world's most famous and distinctive buildings and <br> a masterpiece of 20th-century architecture.</p>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/popular-5.jpg" alt = "">
                    <div>
                        <span>Dubai, United Arab Emirates</span>
                        <ul class = "rating flex">
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li>&nbsp;400,834 reviews</li>
                        </ul>
                        <p class = "text">Dubai is a city and emirate in the United Arab Emirates known for luxury shopping, ultramodern architecture and a lively nightlife scene. <br> Burj Khalifa, an 830m-tall tower, dominates the skyscraper-filled skyline. <br> At its foot lies Dubai Fountain, with jets and lights choreographed to music. <br> On artificial islands just offshore is Atlantis, The Palm, a resort with water <br> and marine-animal parks.</p>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/popular-6.jpg" alt = "">
                    <div>
                        <span>Bhutan</span>
                        <ul class = "rating flex">
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star-half-alt"></i></li>
                            <li>&nbsp;80,239 reviews</li>
                        </ul>
                        <p class = "text">Bhutan, a Buddhist kingdom on the Himalayas’ eastern edge, is known for <br> its monasteries, fortresses (or dzongs) and dramatic landscapes that <br> range from subtropical plains to steep mountains and valleys. In the High Himalayas, peaks such as 7,326m Jomolhari are popular trekking <br> destinations. Paro Taktsang monastery (also known as Tiger’s Nest) clings to cliffs above the forested Paro Valley.</p>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/Hagiasophia.jpg" alt = "">
                    <div>
                        <span>Hagia Sophia, Turkey</span>
                        <ul class = "rating flex">
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li>&nbsp;138,956 reviews</li>
                        </ul>
                        <p class = "text">Hagia Sophia officially the Hagia Sophia Grand Mosque is a mosque and major cultural and historical site in Istanbul , Turkey. The mosque was originally built as a Greek Orthodox church which lasted from 360 AD until the conquest of Constantinople by the Ottoman Empire in 1453. It served as a mosque until 1935, when it became a museum. In 2020, the site once <br> again became a mosque.</p>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/niagrafalls.jpg" alt = "">
                    <div>
                        <span>Niagara falls, Canada</span>
                        <ul class = "rating flex">
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li>&nbsp;170,345 reviews</li>
                        </ul>
                        <p class = "text">Niagara Falls is a group of three waterfalls at the southern end of Niagara Gorge, spanning the border between the province of Ontario in <br> Canada and the state of New York in the United States. The largest of the three is Horseshoe Falls, which straddles the international border of the <br> two countries.</p>
                    </div>
                </div> -->
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
            const allGalleryItem = document.querySelectorAll('.gallery-item');
            const imgModalDiv = document.getElementById('img-modal-box');
            const modalCloseBtn = document.getElementById('modal-close-btn');
            const nextBtn = document.getElementById('next-btn');
            const prevBtn = document.getElementById('prev-btn');
            let imgIndex = 0;

            allGalleryItem.forEach((galleryItem) => {
                galleryItem.addEventListener('click', () => {
                    imgModalDiv.style.display = "block";
                    let imgSrc = galleryItem.querySelector('img').src;
                    imgIndex = parseInt(imgSrc.split("-")[1].substring(0, 1));
                    showImageContent(imgIndex);
                })
            });

            
            nextBtn.addEventListener('click', () => {
                imgIndex++;
                if(imgIndex > allGalleryItem.length){
                    imgIndex = 1;
                }
                showImageContent(imgIndex);
            });

            
            prevBtn.addEventListener('click', () => {
                imgIndex--;
                if(imgIndex <= 0){
                    imgIndex = allGalleryItem.length;
                }
                showImageContent(imgIndex);
            });

            function showImageContent(index){
                imgModalDiv.querySelector('#img-modal img').src = `images/gallery-${index}.jpg`;
            }

            modalCloseBtn.addEventListener('click', () => {
                imgModalDiv.style.display = "none";
            })
        </script>
    </body>
</html>