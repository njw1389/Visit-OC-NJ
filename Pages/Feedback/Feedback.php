<?php
	include("../../assets/php/dbcon.php");
	session_start();
	$limit = 5;
	$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
	$offset = ($page - 1) * $limit;

	if (!empty($_POST['name']) && !empty($_POST['comment'])) {
        $sql = "INSERT INTO `Feedback` (`Name`, `Email`, `FavPlace`, `Rating`, `Comment`, `VisitDate`) VALUES (?, ?, ?, ?, ?, NOW())";
        $stmt = $conn->prepare($sql);
		$name = htmlspecialchars(strip_tags(trim($_POST['name'])));
        $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
        $favoritePlace = htmlspecialchars(strip_tags(trim($_POST['FavoritePlace'])));
        $rating = (int) $_POST['rating'];
        $comment = htmlspecialchars(strip_tags(trim($_POST['comment'])));

        $stmt->bind_param("sssis", $name, $email, $favoritePlace, $rating, $comment);
		$stmt->execute();
	}

	if (isset($_GET['logout'])) {
		unset($_SESSION['admin_logged_in']);
	}

	if (isset($_GET['delete']) && isset($_SESSION['admin_logged_in'])) {
        $delete_id = $_GET['delete'];
        $sql = "DELETE FROM `Feedback` WHERE `id` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $delete_id);
        $stmt->execute();
    
        // Call the reorderIDs function after deletion
        reorderIDs($conn);
    }
    

	$sql = "SELECT * FROM `Feedback` ORDER BY `VisitDate` DESC LIMIT ? OFFSET ?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("ii", $limit, $offset);
	$stmt->execute();
	$result = $stmt->get_result();
	$messages = $result->fetch_all(MYSQLI_ASSOC);

	$sql = "SELECT COUNT(*) as total_comments FROM `Feedback`";
	$result = $conn->query($sql);
	$total_comments = $result->fetch_assoc()['total_comments'];
	$total_pages = ceil($total_comments / $limit);

    function reorderIDs($conn) {
        $sql = "SET @count = 0";
        $conn->query($sql);
    
        $sql = "UPDATE `Feedback` SET `Feedback`.`id` = @count:= @count + 1";
        $conn->query($sql);
    
        $sql = "ALTER TABLE `Feedback` AUTO_INCREMENT = 1";
        $conn->query($sql);
    }

    
    $page = 'Feedback';
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
                    <a href="#" class="menu-link">Trip Planner <span class="arrow"></span></a>
                    <ul class="submenu">
                        <li><a href="../Navigation/index.php" class="menu-link">Flights/Directions</a></li>
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
                            </ul>
                        </li>
                    <li><a href="#" class="highlight">Feedback</a></li>
            </ul>
        </nav>

        <div class="FeedBody">
            <div><h2 class="FormTit2">Feedback</h2></div>
            <img class="FeedPic" src="../../assets/images/Feedback.png" alt="Feedback Picture"><br>
            <div><h2 class="FormTit">Please fill out this form it would be greatly appreciated</h2></div>
        </div>

        <main class="FeedbackMain">
            <!-- Start of Form -->
            <form id="my-form" name="Form" class="centered-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <!-- Name Form -->
                <div class="ttt">
                    <label class="num" for="name">What's Your Name?</label><br>
                    <input class="num2" type="text" id="name" name="name" placeholder="John Doe"> <br><br>
                </div>
                <!-- Email Form -->
                <div class="ttt">
                    <label class="num" for="email">What's Your Email?</label><br>
                    <input class="num2" type="email" id="email" name="email" placeholder="JohnDoe@icloud.com"> <br><br>
                </div><br>
                <!-- Favorite Place Form -->
                <fieldset>
                    <legend>Favorite Place</legend>
                    <table>
                        <TR>
                            <TD>
                                <input class="rad2" type="radio" id="fav_place" name="FavoritePlace" value="The Anchorage">
                                <label class="rad" for="fav_place"><b>The Anchorage</b></label> <br>

                                <input class="rad2" type="radio" name="FavoritePlace" value="The Beach">
                                <label class="rad" for="fav_place"><b>The Beach</b></label> <br>

                                <input class="rad2" type="radio" name="FavoritePlace" value="The Boardwalk">
                                <label class="rad" for="fav_place"><b>The Boardwalk</b></label> <br>

                                <input class="rad2" type="radio" name="FavoritePlace" value="The Cove">
                                <label class="rad" for="fav_place"><b>The Cove</b></label> <br>

                                <input class="rad2" type="radio" name="FavoritePlace" value="The Crab Trap">
                                <label class="rad" for="fav_place"><b>The Crab Trap</b></label> <br>

                                <input class="rad2" type="radio" name="FavoritePlace" value="Charlie's">
                                <label class="rad" for="fav_place"><b>Charlie's</b></label> <br>

                                <input class="rad2" type="radio" name="FavoritePlace" value="CJ's">
                                <label class="rad" for="fav_place"><b>CJ's</b></label> <br>

                                <input class="rad2" type="radio" name="FavoritePlace" value="Deauville Inn">
                                <label class="rad" for="fav_place"><b>Deauville Inn</b></label> <br>

                                <input class="rad2" type="radio" name="FavoritePlace" value="Uncle Bills">
                                <label class="rad" for="fav_place"><b>Uncle Bills</b></label> <br>
                            </TD>
                        </TR>
                    </table>
                </fieldset> <br>
                <!-- Rating Form -->
                <p class="rantitl">Please Rate your time Here!</p>
                <div class="ranDiv">
                    <label class="ran2" for="rating"><b>1</b></label>
                    <input type="range" id="rating" name="rating" min="1" max="10">
                    <label class="ran" for="rating"><b>10</b></label><br><br><br>
                </div>
                <!-- Comment Form -->
                <label class="Sugg" for="commentBox"><b>Please Enter Any Suggestions You Have:</b></label>
                <textarea id="commentBox" name="comment" rows="10" cols="75" class="CommentArea">N/A</textarea><br><br>
                <!-- Submit Button -->
                <button class="formSub" type="submit" id="submit"> Submit </button>
            </form>
        </main>
            
        <hr>
        <div class="CommentList">
            <h1 class="CommTitle">Comments</h1>
            <ul class="comment-list">
                <?php foreach ($messages as $message): ?>
                <li class="comment-item">
                    <strong><?php echo htmlspecialchars($message['Name']); ?></strong>
                    <p><?php echo htmlspecialchars($message['FavPlace']); ?></p>
                    <p><?php echo htmlspecialchars($message['Rating']); ?></p>
                    <p><?php echo htmlspecialchars($message['Comment']); ?></p>
                    <small><?php echo htmlspecialchars($message['VisitDate']); ?></small>

                    <?php if (isset($_SESSION['admin_logged_in'])) : ?>
                        <a href="<?php echo $_SERVER['PHP_SELF']; ?>?delete=<?php echo $message['id']; ?>">Delete</a>
                        <a href="edit_comment.php?edit=<?php echo $message['id']; ?>">Edit</a>
                    <?php endif; ?>
                </li>
                <?php endforeach; ?>
            </ul>
            <div class="pagination">
                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=<?php echo $i; ?>" class="pagination-link"><?php echo $i; ?></a>
                <?php endfor; ?>
            </div>
        </div>


        <footer>
            <div class="FooterNav"> 
                <ul>
                    <li><a href="../../index.php">Go To Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</li>
                    <li><a href="https://docs.google.com/document/d/1pIQL4IkdZc3Hmsg8ScHUD65HHKSFSX9MGGECgEf_YVg/edit?usp=sharing" target="_blank">Go To Citation, Grading/Extra Page</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</li>
                    <li>
                        <?php if (!isset($_SESSION['admin_logged_in'])) : ?>
                            <p><a href="admin_login.php">Admin Login</a></p>
                        <?php else: ?>
                            <p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?logout=true">Logout</a></p>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </footer>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <script src="../../assets/css_js/scripts.js"></script>
    </body>
</html>