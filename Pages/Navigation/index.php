<?php
    $page = 'Navigation';
    $Path = "../../";


    include('../../assets/inc/head.php');
?> <body>
        <!-- Nav Bar -->
        <nav class="navbar">
            <div class="branding">
                <h2><a href="../../index.php" class="branding-logo">Visit NJ</a></h2>
            </div>
            <label for="input-hamburger" class="hamburger "></label>
            <input type="checkbox" id="input-hamburger" hidden>
            <ul class="menu">
                <li><a href="../../index.php" class="menu-link">Home</a></li>
                <li class="has-dropdown">
                    <a href="#" class="menu-link, highlight">Trip Planner <span class="arrow"></span></a>
                    <ul class="submenu">
                        <li><a href="../Navigation/index.php" class="menu-link, highlight">Flights/Directions</a></li>
                        <li><a href="../Place_To_Stay/index.php" class="menu-link">Places To Stay</a></li>
                        <li class="has-dropdown">
                            <a href="#" class="menu-link">Places to Visit <span class="arrow"></span></a>
                            <ul class="submenu">
                                <li><a href="../Place_To_Visit/The_Anchorage/index.php" class="menu-link">The Anchorage</a></li>
                                <li><a href="../Place_To_Visit/The_Beach/index.php" class="menu-link">The Beach</a></li>
                                <li><a href="../Place_To_Visit/The_Boardwalk/index.php" class="menu-link">The Boardwalk</a></li>
                                <li><a href="../Place_To_Visit/The_Cove/index.php" class="menu-link">The Cove</a></li>
                                <li><a href="../Place_To_Visit/The_Crab_Trap/index.php" class="menu-link">The Crab Trap</a></li>
                                <li><a href="../Place_To_Visit/Charlies/index.php" class="menu-link">Charlie's</a></li>
                                <li><a href="../Place_To_Visit/CJs/index.php" class="menu-link">CJ's</a></li>
                                <li><a href="../Place_To_Visit/Deauville/index.php" class="menu-link">Deauville Inn</a></li>
                                <li><a href="../Place_To_Visit/Uncle_Bills/index.php" class="menu-link">Uncle Bills</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#" class="menu-link">Info <span class="arrow"></span></a>
                    <ul class="submenu">
                        <li class="has-dropdown">
                            <li><a href="../History/index.php" class="menu-link">History</a></li>
                            <li class="has-dropdown">
                                <a href="#" class="menu-link">People <span class="arrow"></span></a>
                                <ul class="submenu">
                                    <li class="has-dropdown">
                                        <li><a href="../History/People/Mayor/index.php" class="menu-link">Mayor</a></li>
                                        <li><a href="../History/People/Governor/index.php" class="menu-link">Governor</a></li>
                                        <li><a href="../History/People/Police/index.php" class="menu-link">Police Chief</a></li>
                                </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="../Feedback/Feedback.php" class="menu-link">Feedback</a></li>
            </ul>
        </nav>
        <br>

        <main class="NAVCENTER">
            <h1 id="mapTitle">Flights & Directions</h1>

            <h1 id="mapName">Map Of Ocean City, NJ</h1>
            <div id="map">
                <iframe src="https://www.google.com/maps/d/u/1/embed?mid=1czsiFbsBdrRBhKXqQBZrZr3H08TGJGA&ehbc=2E312F" width="800" height="600"></iframe>
            </div>

            <h1 id="flightPlanning">Here are some option of flights for you to choose from!</h1>
            <div class="flights">
                <a class="boxes" href="https://www.delta.com">
                    <div class="Delta">
                        <h2>Delta</h2>
                    </div>
                </a>
                <a class="boxes" href="https://www.united.com/en/us">
                    <div class="United">
                        <h2>United</h2>
                    </div>
                </a>
                <a class="boxes" href="https://www.spirit.com">
                    <div class="Spirit">
                        <h2>Spirit</h2>
                    </div>
                </a>
                <a class="boxes" href="https://www.aa.com/homePage.do">
                    <div class="American">
                        <h2>American</h2>
                    </div>
                </a>
                <a class="boxes" href="https://www.southwest.com">
                    <div class="Southwest">
                        <h2>Southwest</h2>
                    </div>
                </a>
                <a class="boxes" href="https://www.alaskaair.com">
                    <div class="Alaska_Airlines">
                        <h2>Alaska Airline</h2>
                    </div>
                </a>
                <a class="boxes" href="https://www.aircanada.com/us/en/aco/home.html">
                    <div class="Air_Canada">
                        <h2>Air Canada</h2>
                    </div>
                </a>
                <a class="boxes" href="https://www.flyfrontier.com">
                    <div class="Frontier_Airlines">
                        <h2>Frontier Airlines</h2>
                    </div>
                </a>
            </div>
        </main>

<?php
    include('../../assets/inc/footer.php');
?>