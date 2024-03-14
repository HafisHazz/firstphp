<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

main {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    width: 300px;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    width: 100%;
}
    </style>
<body>
    <main>
        <form action="login.php" method="post">
            <h1>Login</h1>
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </div>
            <section>
                <button type="submit">Login</button>
                <a href="register.php">Register</a>
            </section>
            
        </form>
        <?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the credentials (you'll need to connect to your database)
    // If valid, redirect to a protected page; otherwise, show an error message
    // Example: check against a user table in your database
    if ($username === 'your_valid_username' && $password === 'your_valid_password') {
        // Redirect to a dashboard or protected page
        header('Location: dashboard.php');
        exit;
    } else {
        $error_message = 'Invalid username or password. Please try again.';
        // Display the error message on the login form
    }
}
?>

    </main>
    
</body>
</html>
