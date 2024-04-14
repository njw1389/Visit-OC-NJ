<?php
    session_start();

    include("../../assets/php/dbcon.php");

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === 'njw1389' && $password === 'Ombees#1') {
            $_SESSION['admin_logged_in'] = true;
            header("Location: Feedback.php");
            exit();
        } else {
            $error_message = "Invalid credentials. Please try again.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Admin Login</title>
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
            .error-message {
                color: red;
                text-align: center;
                margin-bottom: 1rem;
            }
        </style>
    </head>

    <body>
        <div class="container">
        <h1>Admin Login</h1>
        <?php if (isset($error_message)) : ?>
            <p class="error-message"><?php echo $error_message; ?></p>
        <?php endif; ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div>
                    Username:
                    <input type="text" name="username" required />
                </div>
                <div>
                    Password:
                    <input type="password" name="password" required />
                </div>
                <div>
                    <input type="submit" value="Login" />
                </div>
            </form>
        </div>
    </body>
</html>