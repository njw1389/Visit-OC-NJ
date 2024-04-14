<?php
    $page = 'Governor';
    $Path = "../../../../";


    include('../../../../assets/inc/head.php');
?>  <body>
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
                                        <li><a href="#" class="menu-link, highlight">Governor</a></li>
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
                <h1 id="Location_Name">Governor Phil Murphy</h1>

                <div class="People_Photos">
                    <img class="mage" src="../../../../assets/images/People/PMurphy_sm.png" alt="Photo of Governor Murphy." ><br>
                </div>
    
    
                <div class="Location_Des">
                    <p class="text">
                        On January 18, 2022, Philip D. Murphy was inaugurated for a second term as the 56th governor of New Jersey. He is the first Democratic governor to serve two terms in 44 years. He is currently the Vice-Chair of the National Governors Association. Additionally, Governor Murphy was the Chairman of the Democratic Governors Association in 2020.
                        Since assuming office in 2018, Governor Murphy has focused on building a more robust, fairer, affordable New Jersey. Under his leadership, the state has made significant progress in growing the economy, creating new economic opportunities, and reducing long-standing inequities. He has restored fiscal responsibility to state government, expanded critical investments, and implemented tax fairness and relief, including 14 tax cuts for the middle class and seniors in New Jersey. Moreover, Governor Murphy led the state through the COVID-19 pandemic by spearheading vaccination efforts and facilitating a robust economic recovery. Over two years, his administration has provided billions of dollars in state and federal relief to small businesses, schools, homeowners, tenants, landlords, and middle-class families.
                        Governor Murphy has also emphasized creating a more welcoming environment for high-tech enterprises and start-ups in the innovation economy. He introduced a new set of state economic incentives to promote the growth of new small businesses and innovative start-ups, including the state's first tax credits for historic preservation and the expansion of credits for brownfields reclamation and redevelopment. Under his leadership, New Jersey has become a leader in deploying clean energy technologies, including one of the most ambitious proposals for offshore wind development in the nation.
                        In addition to economic and environmental issues, Governor Murphy has made significant strides on social justice issues. For instance, he has focused on eliminating stigma and promoting a compassionate approach to addressing opioid misuse, raised the minimum wage to $15 per hour to uphold the dignity of working families, and expanded protections for the state's immigrant and LGBTQIA+ communities. Additionally, he has implemented numerous rules to foster environmental justice, restore voting rights, and expunge the records of non-violent offenders.
                        Before becoming governor, Philip D. Murphy was appointed by President Obama as the United States Ambassador to The Federal Republic of Germany from 2009 to 2013. He has been actively involved in civic life and philanthropic pursuits, including serving on the national Board of the NAACP and founding New Start New Jersey.
                        Murphy and his wife, Tammy Snyder Murphy, live in Middletown, Monmouth County, and have four children: Josh, Emma, Charlie, and Sam. Before entering public life, Governor Murphy worked for Goldman Sachs for over 20 years, beginning as an intern in 1982 and ending in 2003 as a member of the firm's management committee.
                    </p>
                </div>


                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d824.7983070356235!2d-74.77440272596702!3d40.22203755155086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c159d1c586c895%3A0x86d3a04f8b013c56!2sGovernor%20Phil%20Murphy&#39;s%20Office!5e0!3m2!1sen!2sus!4v1676609756986!5m2!1sen!2sus" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </main>

<?php
    include('../../../../assets/inc/footer.php');
?>