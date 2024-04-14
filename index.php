<?php
    $page = 'Visit Ocean City';
    $Path = "";

    include('assets/inc/head.php');
?><body onload=displayTime();>
        <!DOCTYPE html>
<html lang="en">
    <head>
        <nav class="navbar">
            <div class="branding">
                <h2><a href="#" class="branding-logo">Visit NJ</a></h2>
            </div>
            <label for="input-hamburger" class="hamburger "></label>
            <input type="checkbox" id="input-hamburger" hidden>
            <ul class="menu">
                <li><a href="#" class="menu-link, highlight">Home</a></li>
                <li class="has-dropdown">
                    <a href="#" class="menu-link">Trip Planner <span class="arrow"></span></a>
                    <ul class="submenu">
                        <li><a href="Pages/Navigation/index.php" class="menu-link">Flights/Directions</a></li>
                        <li><a href="Pages/Place_To_Stay/index.php" class="menu-link">Places To Stay</a></li>
                        <li class="has-dropdown">
                            <a href="#" class="menu-link">Places to Visit <span class="arrow"></span></a>
                            <ul class="submenu">
                                <li><a href="Pages/Place_To_Visit/The_Anchorage/index.php" class="menu-link">The Anchorage</a></li>
                                <li><a href="Pages/Place_To_Visit/The_Beach/index.php" class="menu-link">The Beach</a></li>
                                <li><a href="Pages/Place_To_Visit/The_Boardwalk/index.php" class="menu-link">The Boardwalk</a></li>
                                <li><a href="Pages/Place_To_Visit/The_Cove/index.php" class="menu-link">The Cove</a></li>
                                <li><a href="Pages/Place_To_Visit/The_Crab_Trap/index.php" class="menu-link">The Crab Trap</a></li>
                                <li><a href="Pages/Place_To_Visit/Charlies/index.php" class="menu-link">Charlie's</a></li>
                                <li><a href="Pages/Place_To_Visit/CJs/index.php" class="menu-link">CJ's</a></li>
                                <li><a href="Pages/Place_To_Visit/Deauville/index.php" class="menu-link">Deauville Inn</a></li>
                                <li><a href="Pages/Place_To_Visit/Uncle_Bills/index.php" class="menu-link">Uncle Bills</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#" class="menu-link">Info <span class="arrow"></span></a>
                    <ul class="submenu">
                        <li><a href="Pages/History/index.php" class="menu-link">History</a></li>
                        <li class="has-dropdown">
                            <a href="#" class="menu-link">People <span class="arrow"></span></a>
                            <ul class="submenu">
                                <li><a href="Pages/History/People/Mayor/index.php" class="menu-link">Mayor</a></li>
                                <li><a href="Pages/History/People/Governor/index.php" class="menu-link">Governor</a></li>
                                <li><a href="Pages/History/People/Police/index.php" class="menu-link">Police Chief</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="Pages/Feedback/Feedback.php" class="menu-link">Feedback</a></li>
            </ul>
        </nav>
        
        <header>
            <script src="assets/css_js/startScript.js"></script>
            <h1 class="Title_HomePage">Ocean City, New Jersey</h1>
            <h1 class="SubTitle"> <span id="time"> </span></h1>
            <a class="weatherwidget-io" href="https://forecast7.com/en/39d28n74d57/ocean-city/?unit=us" data-label_1="OCEAN CITY" data-label_2="WEATHER" data-theme="original" >OCEAN CITY WEATHER</a>
            <br><hr>
        </header>
        
        <main>
            <img src="assets/images/OC.png" alt="Picture of Ocean City, NJ" class="HomeImg">   
        </main>

        <footer>
            <div class="FooterNav"> 
                <ul>
                    <li><a href="../index.html">Back To 240 Homepage</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</li>
                    <li><a href="https://docs.google.com/document/d/1pIQL4IkdZc3Hmsg8ScHUD65HHKSFSX9MGGECgEf_YVg/edit?usp=sharing" target="_blank">Go To Citation, Grading/Extra Page</a></li>
                </ul>
            </div>
        </footer>

        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <script src="assets/css_js/scripts.js"></script>
    </body>
</html>