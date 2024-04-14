<?php
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit();
}

include("../../assets/php/dbcon.php");

if (isset($_GET['edit'])) {
    $edit_id = $_GET['edit'];

    $sql = "SELECT * FROM `Feedback` WHERE `id` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $edit_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $message = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $sql = "UPDATE `Feedback` SET `Name` = ?, `FavPlace` = ?, `Rating` = ?, `Comment` = ? WHERE `id` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssisi", $_POST['name'], $_POST['FavoritePlace'], $_POST['rating'], $_POST['comment'], $edit_id);
    $stmt->execute();
    header("Location: Feedback.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Edit Comment</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .container {
                background-color: white;
                padding: 2rem;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }
            h1 {
                text-align: center;
            }
            form {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            div {
                margin-bottom: 1rem;
            }
            input[type="submit"] {
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 3px;
                padding: 0.5rem 1rem;
                cursor: pointer;
            }
            input[type="submit"]:hover {
                background-color: #0056b3;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h1>Edit Comment</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>?edit=<?php echo $edit_id; ?>" method="POST">
                <div>
                    Name:
                    <input type="text" name="name" value="<?php echo htmlspecialchars($message['Name']); ?>" required />
                </div>
                <div>
                    Favorite Place:
                    <input type="text" name="FavoritePlace" value="<?php echo htmlspecialchars($message['FavPlace']); ?>" required />
                </div>
                <div>
                    Rating:
                    <input type="number" name="rating" value="<?php echo htmlspecialchars($message['Rating']); ?>" required />
                </div>
                <div>
                    Comment:
                    <input type="text" name="comment" value="<?php echo htmlspecialchars($message['Comment']); ?>" required />
                </div>
                <div>
                    <input type="submit" name="update" value="Update Comment" />
                </div>
            </form>
        </div>
    </body>
</html>