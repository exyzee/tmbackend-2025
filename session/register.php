<?php
session_start();

// Initialize session variables if they don't exist
if (!isset($_SESSION['registration'])) {
    $_SESSION['registration'] = [];
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['registration']['email'] = $_POST['email'] ?? '';
    $_SESSION['registration']['nickname'] = $_POST['nickname'] ?? '';
    header('Location: registration-address.php');
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
            form {
                max-width: 400px;
                margin: 20px auto;
            }
            form ul {
                list-style: none;
                padding: 0;
            }
            form li {
                margin-bottom: 15px;
            }
            label {
                display: block;
                margin-bottom: 5px;
            }
            input[type="text"] {
                width: 100%;
                padding: 8px;
                border: 1px solid #ddd;
                border-radius: 4px;
            }
            input[type="submit"] {
                background-color: #4CAF50;
                color: white;
                padding: 10px 15px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            input[type="submit"]:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>
        <h1>Part 1: Registration Details</h1>
        <form method="POST" action="registration-address.php">
            <ul>
                <li>
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($_SESSION['registration']['email'] ?? ''); ?>">
                </li>
                <li>
                    <label for="nickname">Nickname</label>
                    <input type="text" id="nickname" name="nickname" value="<?php echo htmlspecialchars($_SESSION['registration']['nickname'] ?? ''); ?>">
                </li>
            </ul>
            <input type="submit" value="Next">
        </form>
    </body>
</html> 