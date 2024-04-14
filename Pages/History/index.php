<?php
    $page = 'History';
    $Path = "../../";

    include('../../assets/inc/head.php');
?> <body>
        <!-- Nav Bar -->
        <nav class="navbar">
            <div class="branding">
                <h2><a href="../../IndivProject/index.php" class="branding-logo">Visit NJ</a></h2>
            </div>
            <label for="input-hamburger" class="hamburger "></label>
            <input type="checkbox" id="input-hamburger" hidden>
            <ul class="menu">
                <li><a href="../../index.php" class="menu-link">Home</a></li>
                <li class="has-dropdown">
                    <a href="#" class="menu-link">Trip Planner <span class="arrow"></span></a>
                    <ul class="submenu">
                        <li><a href="../Navigation/index.php" class="menu-link">Flights/Directions</a></li>
                        <li><a href="../Place_To_Stay/index.php" class="menu-link">Places To Stay</a></li>
                        <li class="has-dropdown">
                            <a href="#" class="menu-link">Places to Visit
                                <span class="arrow"></span>
                            </a>
                            <ul class="submenu">
                                <li><a href="../Place_To_Visit/The_Anchorage/index.php" class="menu-link">The Anchorage</a></li>
                                <li><a href="../Place_To_Visit/The_Bay/index.php" class="menu-link">The Bay</a></li>
                                <li><a href="../Place_To_Visit/The_Beach/index.php" class="menu-link">The Beach</a></li>
                                <li><a href="../Place_To_Visit/The_Boardwalk/index.php" class="menu-link">The Boardwalk</a></li>
                                <li><a href="../Place_To_Visit/The_Cove/index.php" class="menu-link">The Cove</a></li>
                                <li><a href="../Place_To_Visit/The_Crab_Trap/index.php" class="menu-link">The Crab Trap</a></li>
                                <li><a href="../Place_To_Visit/The_Inlet/index.php" class="menu-link">The Inlet</a></li>
                                <li><a href="../Place_To_Visit/Charlies/index.php" class="menu-link">Charlie's</a></li>
                                <li><a href="../Place_To_Visit/CJs/index.php" class="menu-link">CJ's</a></li>
                                <li><a href="../Place_To_Visit/Deauville/index.php" class="menu-link">Deauville Inn</a></li>
                                <li><a href="../Place_To_Visit/Park/index.php" class="menu-link">John F Kennedy Park</a></li>
                                <li><a href="../Place_To_Visit/Uncle_Bills/index.php" class="menu-link">Uncle Bills</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#" class="menu-link, highlight">Info
                    <span class="arrow"></span>
                    </a>
                    <ul class="submenu">
                        <li><a href="#" class="menu-link, highlight">History</a></li>
                        <li class="has-dropdown">
                            <a href="#" class="menu-link">People
                                <span class="arrow"></span>
                            </a>
                            <ul class="submenu">
                                <li><a href="People/Mayor/index.php" class="menu-link">Mayor</a></li>
                                <li><a href="People/Governor/index.php" class="menu-link">Governor</a></li>
                                <li><a href="People/Police/index.php" class="menu-link">Police Chief</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="../Feedback/Feedback.php" class="menu-link">Feedback</a></li>
            </ul>
        </nav>

        <main>
            <div class="HistoryPage">
                <h1 id="History_Name">The History of Ocean City, NJ</h1>

                <div class="History_Des">
                    <img class="HISImage" src="../../assets/images/History/oldbeach.png" alt="Photo of The Beach in the Past">
                </div>

                <div class="History_Des">
                    <p class="HIStext"> 
                        In 1700, John Peck, a whaler, began using a barrier island as a storage place for freshly caught whales. The island, later known as Peck's Beach, had various purposes. It served as an Indian summer fishing camp 
                        and a cattle-grazing area. Sometimes mainlanders would boat over for a picnic or to hunt. The first year-round resident, Parker Miller, and his family arrived in the mid-19th century. They lived at what is now
                        the corner of Seventh Street and Asbury Avenue. Parker worked as an agent for marine insurance companies, raising cattle and farming. In 1879, four Methodist ministers (Ezra B. Lake, James Lake, S. Wesley Lake, 
                        and William Burrell) purchased Peck's Beach to establish a Christian seaside resort and camp meeting place. The men formed the Ocean City Association under a cedar tree (which still stands at 6th and Asbury), 
                        built streets, and sold commercial and residential lots. They also made the Tabernacle, which remains between 5th and 6th Streets and Asbury Avenue. Camp meetings began the following summer, and residents 
                        built homes, hotels, bridges, railroads, and schools. The boardwalk was rebuilt several times due to damage from natural disasters. In 1901, the legendary Sindia ship came close to shore and sank. Part of 
                        its mast remained above the ocean, delighting onlookers. The Sindia recently sank entirely underwater. The original four's wish that Ocean City remains a pure retreat that exemplified the Christian mindset 
                        still remains today as strong as the cedar tree they first met under. Historically, Ocean City has been a dry town, and there is no public drinking anywhere on the island, but that's not truly the case. Some 
                        residents and tourists appreciate this law that sets the island apart from its surrounding towns. For a complete history of Ocean City, visit the Ocean City Historical Museum at the Community Center, 17th & 
                        Simpson, or go to www.ocnjmuseum.org.
                    </p>
                </div>
                
                <div class="History_Photos">
                    <img class="HISImage" src="../../assets/images/History/OldBoardwalk.png" alt="Photo of The Boardwalk in the Past">
                </div>
            </div>
        </main>

<?php
    include('../../assets/inc/footer.php');
?>