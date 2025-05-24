<?php
session_start();

// Redirect if no registration data exists
if (!isset($_SESSION['registration'])) {
    header('Location: register.php');
    exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['registration']['street'] = $_POST['street'] ?? '';
    $_SESSION['registration']['number'] = $_POST['number'] ?? '';
    $_SESSION['registration']['city'] = $_POST['city'] ?? '';
    $_SESSION['registration']['zipcode'] = $_POST['zipcode'] ?? '';
    header('Location: registration-overview.php');
    exit;
}

// Get field to focus (if any)
$focusField = $_GET['focus'] ?? '';
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
            input[type="text"],
            input[type="number"] {
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
            .registration-details {
                background-color: #f5f5f5;
                padding: 15px;
                margin-bottom: 20px;
                border-radius: 4px;
            }
            .registration-details ul {
                list-style: none;
                padding: 0;
                margin: 0;
            }
            .registration-details li {
                margin: 5px 0;
            }
            .emphasize {
                border: 2px solid #4CAF50 !important;
                box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
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
        <h1>Registration Details</h1>
        <div class="registration-details">
            <ul>
                <li>Email: <?php echo htmlspecialchars($_SESSION['registration']['email']); ?></li>
                <li>Nickname: <?php echo htmlspecialchars($_SESSION['registration']['nickname']); ?></li>
            </ul>
        </div>

        <h1>Part 2: Address</h1>
        <form method="POST" action="registration-overview.php">
            <ul>
                <li>
                    <label for="street">Street</label>
                    <input type="text" id="street" name="street" 
                           value="<?php echo htmlspecialchars($_SESSION['registration']['street'] ?? ''); ?>"
                           <?php echo $focusField === 'street' ? 'class="emphasize" autofocus' : ''; ?>>
                </li>
                <li>
                    <label for="number">Number</label>
                    <input type="number" id="number" name="number" 
                           value="<?php echo htmlspecialchars($_SESSION['registration']['number'] ?? ''); ?>"
                           <?php echo $focusField === 'number' ? 'class="emphasize" autofocus' : ''; ?>>
                </li>
                <li>
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" 
                           value="<?php echo htmlspecialchars($_SESSION['registration']['city'] ?? ''); ?>"
                           <?php echo $focusField === 'city' ? 'class="emphasize" autofocus' : ''; ?>>
                </li>
                <li>
                    <label for="zipcode">Zipcode</label>
                    <input type="text" id="zipcode" name="zipcode" 
                           value="<?php echo htmlspecialchars($_SESSION['registration']['zipcode'] ?? ''); ?>"
                           <?php echo $focusField === 'zipcode' ? 'class="emphasize" autofocus' : ''; ?>>
                </li>
            </ul>
            <input type="submit" value="Next">
        </form>

        <a href="destroy-session.php" class="destroy-session">Destroy Session</a>
    </body>
</html> 