<?php
    $page = 'The Anchorage';
    $Path = "../../../";

    include('../../../assets/inc/head.php');
?>  <body>
        <!-- Nav Bar -->
        <nav class="navbar">
            <div class="branding">
            <h2><a href="../../../index.php" class="branding-logo">Visit NJ</a></h2>
            </div>
            <label for="input-hamburger" class="hamburger "></label>
            <input type="checkbox" id="input-hamburger" hidden>
            <ul class="menu">
                <li><a href="../../../index.php" class="menu-link">Home</a></li>
                <li class="has-dropdown">
                    <a href="#" class="menu-link, highlight">Trip Planner <span class="arrow"></span></a>
                    <ul class="submenu">
                        <li><a href="../../Navigation/index.php" class="menu-link">Flights/Directions</a></li>
                        <li><a href="../../Place_To_Stay/index.php" class="menu-link">Places To Stay</a></li>
                        <li class="has-dropdown">
                            <a href="#" class="menu-link, highlight">Places to Visit
                                <span class="arrow"></span>
                            </a>
                            <ul class="submenu">
                                <li><a href="#" class="menu-link, highlight">The Anchorage</a></li>
                                <li><a href="../The_Beach/index.php" class="menu-link">The Beach</a></li>
                                <li><a href="../The_Boardwalk/index.php" class="menu-link">The Boardwalk</a></li>
                                <li><a href="../The_Cove/index.php" class="menu-link">The Cove</a></li>
                                <li><a href="../The_Crab_Trap/index.php" class="menu-link">The Crab Trap</a></li>
                                <li><a href="../Charlies/index.php" class="menu-link">Charlie's</a></li>
                                <li><a href="../CJs/index.php" class="menu-link">CJ's</a></li>
                                <li><a href="../Deauville/index.php" class="menu-link">Deauville Inn</a></li>
                                <li><a href="../Uncle_Bills/index.php" class="menu-link">Uncle Bills</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#" class="menu-link">Info <span class="arrow"></span></a>
                    <ul class="submenu">
                        <li class="has-dropdown">
                            <li><a href="../../History/index.php" class="menu-link">History</a></li>
                            <li class="has-dropdown">
                                <a href="#" class="menu-link">People <span class="arrow"></span></a>
                                <ul class="submenu">
                                    <li class="has-dropdown">
                                        <li><a href="../../History/People/Mayor/index.php" class="menu-link">Mayor</a></li>
                                        <li><a href="../../History/People/Governor/index.php" class="menu-link">Governor</a></li>
                                        <li><a href="../../History/People/Police/index.php" class="menu-link">Police Chief</a></li>
                                </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="../../Feedback/Feedback.php" class="menu-link">Feedback</a></li>
            </ul>
        </nav>

        <main>
            <div class="LocationPages">
                <h1 id="Location_Name">The Anchorage</h1>

                <div class="overlay"></div>
                <div class="gallery-container">
                    <div class="image-wrapper">
                        <img class="gallery-image" src="/" alt="Gallery Image">
                        <div class="image-description">Image description</div>
                    </div>
                    <button class="prev-btn">‹</button>
                    <button class="next-btn">›</button>
                    <button class="close-btn">×</button>
                </div>
                <script>
                    // Image paths and descriptions
                    const images = [
                        {
                            path: "../../../assets/images/Anchorage/Front.png",
                            description: "Photo of the front of The Anchorage"
                        },
                        {
                            path: "../../../assets/images/Anchorage/Food.png",
                            description: "Photo of the food at The Anchorage"
                        }
                    ];

                    let currentIndex = 0;

                    const imageWrapper = document.querySelector(".image-wrapper");
                    const galleryImage = document.querySelector(".gallery-image");
                    const imageDescription = document.querySelector(".image-description");

                    function showImage(index) {
                        // Fade out the image wrapper
                        imageWrapper.style.opacity = 0;
                        
                        // Wait for 0.5 seconds for the fade out to complete
                        setTimeout(() => {
                            // Update the image source and description
                            galleryImage.src = images[index].path;
                            imageDescription.textContent = images[index].description;
                            
                            // Fade in the image wrapper
                            imageWrapper.style.opacity = 1;
                        }, 500);
                    }


                    function closeImage() {
                        imageWrapper.style.opacity = 0;
                    }

                    function showNextImage() {
                        currentIndex = (currentIndex + 1) % images.length;
                        showImage(currentIndex);
                    }

                    function showPrevImage() {
                        currentIndex = (currentIndex - 1 + images.length) % images.length;
                        showImage(currentIndex);
                    }

                    showImage(currentIndex);

                    document.querySelector(".next-btn").addEventListener("click", showNextImage);
                    document.querySelector(".prev-btn").addEventListener("click", showPrevImage);
                    document.querySelector(".close-btn").addEventListener("click", closeImage);

                    // Allow keyboard navigation
                    document.addEventListener("keydown", (event) => {
                        if (event.key === "ArrowRight") {
                            showNextImage();
                        } else if (event.key === "ArrowLeft") {
                            showPrevImage();
                        } else if (event.key === "Escape") {
                            closeImage();
                        }
                    });
                </script>

                <div class="Location_Des">
                    <p class="text"> 
                        Bar fare & seafood entrees served in a circa-1900 wooden tavern with a bustling bar & quaint porch.<br>
                        Service Options: Dine-in · Takeout · No delivery<br>
                        Phone: <a href="tel:6099261776">(609) 926-1776</a>
                    </p>
                </div>


                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3087.0060935925844!2d-74.596974484555!3d39.31078537950906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c0c0284aaf0d7b%3A0xdeebc6382d681e6b!2sAnchorage%20Tavern%20Restaurant!5e0!3m2!1sen!2sus!4v1676588183161!5m2!1sen!2sus" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </main>

<?php
    include('../../../assets/inc/footer.php');
?>