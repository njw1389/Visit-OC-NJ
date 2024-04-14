<?php
    $page = 'Police';
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
                                        <li><a href="../Mayor/index.php" class="menu-link">Mayor</a></li>
                                        <li><a href="../Governor/index.php" class="menu-link">Governor</a></li>
                                        <li><a href="#" class="menu-link, highlight">Police Chief</a></li>
                            
                                </ul>
                            
                        </li>
                    </ul>
                </li>
                <li><a href="../../../Feedback/Feedback.php" class="menu-link">Feedback</a></li>
            </ul>
        </nav>

        <main>
            <div class="LocationPages">
                <h1 id="Location_Name">Chief of Police<br>Jay Prettyman</h1>

                <div class="People_Photos">
                    <img class="mage" src="../../../../assets/images/People/medChief_Prettyman.png" alt="Photo of Jay Gillian." ><br>
                </div>
    
    
                <div class="Location_Des">
                    <p class="text">
                        Chief Jay Prettyman is the 12th Police Chief to serve in the Ocean City Police Department since it was established in 1887. As the current Chief, he is responsible for ensuring the safety and well-being of residents and visitors to the City of Ocean City.
                        Chief Prettyman began his career as a part-time Seasonal Law Enforcement Officer in 1992, working two summers before joining the Haddon Heights Police Department in Camden County, NJ, as a full-time Police Officer. He returned to the Ocean City Police Department in September 1995 as a full-time Police Officer.
                        Chief Prettyman oversees a full-time sworn staff of 60 officers, 14 full-time civilian staff, and approximately 15 part-time civilian staff members. In addition to these employees, he hires about 50 additional Seasonal Law Enforcement Officers during the summer due to the population increase.
                        Under Chief Prettyman's leadership, the Ocean City Police Department is organized into three Divisions: the Patrol Operations Division, the Special Services Division, and the Professional Standards Division. The Department's philosophy is based on Community Oriented Policing and Police Accreditation, which has resulted in positive changes throughout the City. These changes include increased community involvement with local schools and civic organizations and the Department's accreditation through the New Jersey State Association of Chiefs of Police.
                        Chief Prettyman is highly accomplished, having received numerous awards and achievements throughout his career. He is a graduate of the FBI's National Academy Session #237. He is also active in many community organizations, including the Ocean City Yacht Club, the Ocean City Fishing Club, VFW Post #6650, and St. Damiens Parish.
                        He is a member of the FBI National Academy Associates. Chief Prettyman resides in Ocean City with his wife, Tiffany, and their two daughters, Phoebe and Chloe.
                    </p>
                </div>


                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3088.427632996214!2d-74.57712064920018!3d39.27855147941307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c0eab470b8a20d%3A0xd22073ddabdb3776!2sOcean%20City%20Police%20Department!5e0!3m2!1sen!2sus!4v1676609665241!5m2!1sen!2sus" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </main>

<?php
    include('../../../../assets/inc/footer.php');
?>