<?php
session_start();

// Redirect if no registration data exists
if (!isset($_SESSION['registration'])) {
    header('Location: register.php');
    exit;
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/global.css">
        <link rel="stylesheet" type="text/css" href="/css/directory.css">
        <link rel="stylesheet" type="text/css" href="/css/facade.css">
        <style>
            .overview-container {
                max-width: 600px;
                margin: 20px auto;
            }
            .overview-container ul {
                list-style: none;
                padding: 0;
            }
            .overview-container li {
                padding: 10px;
                margin: 5px 0;
                background-color: #f5f5f5;
                border-radius: 4px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .edit-link {
                color: #0066cc;
                text-decoration: none;
                margin-left: 10px;
            }
            .edit-link:hover {
                text-decoration: underline;
            }
            .destroy-session {
                display: inline-block;
                margin-top: 20px;
                color: #dc3545;
                text-decoration: none;
            }
            .destroy-session:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div class="overview-container">
            <h1>Overview Page</h1>
            <ul>
                <li>
                    Email: <?php echo htmlspecialchars($_SESSION['registration']['email']); ?>
                    <a href="register.php" class="edit-link">Edit</a>
                </li>
                <li>
                    Nickname: <?php echo htmlspecialchars($_SESSION['registration']['nickname']); ?>
                    <a href="register.php" class="edit-link">Edit</a>
                </li>
                <li>
                    Street: <?php echo htmlspecialchars($_SESSION['registration']['street']); ?>
                    <a href="registration-address.php?focus=street" class="edit-link">Edit</a>
                </li>
                <li>
                    Number: <?php echo htmlspecialchars($_SESSION['registration']['number']); ?>
                    <a href="registration-address.php?focus=number" class="edit-link">Edit</a>
                </li>
                <li>
                    City: <?php echo htmlspecialchars($_SESSION['registration']['city']); ?>
                    <a href="registration-address.php?focus=city" class="edit-link">Edit</a>
                </li>
                <li>
                    Zipcode: <?php echo htmlspecialchars($_SESSION['registration']['zipcode']); ?>
                    <a href="registration-address.php?focus=zipcode" class="edit-link">Edit</a>
                </li>
            </ul>

            <a href="destroy-session.php" class="destroy-session">Destroy Session</a>
        </div>
    </body>
</html> 