<?php
    $page = 'Mayor';
    $Path = "../../../../";


    include('../../../../assets/inc/head.php');
?> <body>
        <!-- Nav Bar -->
        <nav class="navbar">
            <div class="branding">
                <h2><a href="../../../../index.php" class="branding-logo">Visit NJ</a></h2>
            </div>
            <label for="input-hamburger" class="hamburger "></label>
            <input type="checkbox" id="input-hamburger" hidden>
            <ul class="menu">
                <li><a href="../../../../index.php" class="menu-link">Home</a></li>
                <li class="has-dropdown">
                    <a href="#" class="menu-link">Trip Planner <span class="arrow"></span></a>
                    <ul class="submenu">
                        <li><a href="../../../Navigation/index.php" class="menu-link">Flights/Directions</a></li>
                        <li><a href="../../../Place_To_Stay/index.php" class="menu-link">Places To Stay</a></li>
                        <li class="has-dropdown">
                            <a href="#" class="menu-link">Places to Visit
                                <span class="arrow"></span>
                            </a>
                            <ul class="submenu">
                                <li><a href="../../../Place_To_Visit/The_Anchorage/index.php" class="menu-link">The Anchorage</a></li>
                                <li><a href="../../../Place_To_Visit/The_Beach/index.php" class="menu-link">The Beach</a></li>
                                <li><a href="../../../Place_To_Visit/The_Boardwalk/index.php" class="menu-link">The Boardwalk</a></li>
                                <li><a href="../../../Place_To_Visit/The_Cove/index.php" class="menu-link">The Cove</a></li>
                                <li><a href="../../../Place_To_Visit/The_Crab_Trap/index.php" class="menu-link">The Crab Trap</a></li>
                                <li><a href="../../../Place_To_Visit/Charlies/index.php" class="menu-link">Charlie's</a></li>
                                <li><a href="../../../Place_To_Visit/CJs/index.php" class="menu-link">CJ's</a></li>
                                <li><a href="../../../Place_To_Visit/Deauville/index.php" class="menu-link">Deauville Inn</a></li>
                                <li><a href="../../../Place_To_Visit/Uncle_Bills/index.php" class="menu-link">Uncle Bills</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#" class="menu-link, highlight">Info <span class="arrow"></span></a>
                    <ul class="submenu">
                        <li class="has-dropdown">
                            <li><a href="../../index.php" class="menu-link">History</a></li>
                            <li class="has-dropdown">
                                <a href="#" class="menu-link, highlight">People <span class="arrow"></span></a>
                                <ul class="submenu">
                                    <li class="has-dropdown">
                                        <li><a href="#" class="menu-link, highlight">Mayor</a></li>
                                        <li><a href="../Governor/index.php" class="menu-link">Governor</a></li>
                                        <li><a href="../Police/index.php" class="menu-link">Police Chief</a></li>
                                </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="../../../Feedback/Feedback.php" class="menu-link">Feedback</a></li>
            </ul>
        </nav>

        <main>
            <div class="LocationPages">
                <h1 id="Location_Name">Mayor Jay Gillian</h1>

                <div class="People_Photos">
                    <img class="mage" src="../../../../assets/images/People/medJayGillian_2015.png" alt="Photo of Jay Gillian." ><br>
                    <img class="mage" src="../../../../assets/images/People/1.4-Mayor-Jay-Gillian-640x428.jpg" alt="Photo of Jay Gillian." ><br>
                </div>
    
    
                <div class="Location_Des">
                    <p class="text">
                        Jay Gillian is the current Mayor of Ocean City, New Jersey, having taken office on July 1, 2010. He was re-elected to a fourth term in 2021. Gillian was born and raised in Ocean City and graduated from Ocean City 
                        High School. He then earned his Bachelor's degree in Business Administration from Villanova University. Before becoming Mayor, Gillian was a successful businessman, serving as the president of his family's  
                        construction company, Gillian's Wonderland Pier, a staple in the Ocean City community for over 90 years. He also served as the Director of the Ocean City Regional Chamber of Commerce, where he was instrumental in 
                        promoting local businesses and tourism. As Mayor, Gillian has focused on improving the quality of life for Ocean City residents and visitors alike. He has led efforts to improve the city's infrastructure, including 
                        constructing a new city hall, public safety building, and boardwalk. He has also worked to strengthen the city's economy by promoting local businesses and tourism. Under his leadership, Ocean City has been named 
                        one of the best beach towns in America by Coastal Living magazine. Mayor Gillian has also been committed to improving the city's environmental sustainability, implementing measures to reduce waste, and promoting 
                        clean energy. He has overseen the construction of a new wastewater treatment plant and implemented a successful recycling program. In addition to his work as Mayor, Gillian is actively involved in the Ocean City 
                        community, serving on the board of several local organizations, including the Ocean City Education Foundation and the Ocean City Free Public Library. He is also a member of the Knights of Columbus and the 
                        Ocean City Exchange Club. Gillian is married to his wife, Michele, and they have three children. He enjoys spending time with his family, boating, and fishing in his free time.
                        <br><br>
                        Phone: <a href="tel:6095259333">609-525-9333</a><br>
                        Email: <a href="mailto:mayor@ocnj.us">mayor@ocnj.us</a>
                    </p>
                </div>


                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d197710.91660822195!2d-74.70171259956975!3d39.26027802616382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c0eab3897f9d1d%3A0x3389b240c65f9404!2sCity%20of%20Ocean%20City%2C%20City%20Hall!5e0!3m2!1sen!2sus!4v1676609398932!5m2!1sen!2sus" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </main>

<?php
    include('../../../../assets/inc/footer.php');
?>