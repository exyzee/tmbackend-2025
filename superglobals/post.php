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
                padding: 20px;
                background-color: #f5f5f5;
                border-radius: 5px;
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
            input[type="password"] {
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
            .message {
                margin: 20px;
                padding: 10px;
                border-radius: 4px;
            }
            .error {
                background-color: #ffebee;
                color: #c62828;
            }
            .success {
                background-color: #e8f5e9;
                color: #2e7d32;
            }
        </style>
    </head>
    <body>
        <?php
        // Initialize variables
        $username = 'stijn';
        $password = 'azerty';
        $message = '';

        // Check if form is submitted
        if (isset($_POST['submit'])) {
            // Check if username and password match
            if (isset($_POST['username']) && isset($_POST['password'])) {
                if ($_POST['username'] === $username && $_POST['password'] === $password) {
                    $message = 'Welcome';
                } else {
                    $message = 'There was an error logging in, please try again';
                }
            }
        }
        ?>

        <h1>Login</h1>

        <form method="POST">
            <ul>
                <li>
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">
                </li>
                <li>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                </li>
            </ul>
            <input type="submit" name="submit" value="Login">
        </form>

        <?php if ($message): ?>
            <div class="message <?php echo $message === 'Welcome' ? 'success' : 'error'; ?>">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>
    </body>
</html> 