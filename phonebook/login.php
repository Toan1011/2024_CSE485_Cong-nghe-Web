<?php
require_once 'db_connect.php';

session_start();

// // Redirect if user is already logged in
// if(isset($_SESSION['user_id'])){
//     header("Location: contacts.php");
//     exit();
// }

$error_msg = "";

// Check if the form was submitted
if (isset($_POST['submit'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    $stmt = $conn->prepare("SELECT * FROM `user` WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        if (password_verify($password, $result['password'])) {
            session_start();
            $_SESSION['user_id'] = $result['id'];
            header("Location: contacts.php");
            exit();
        } else {
            $error_msg = "Incorrect email or password";
        }
    } else {
        $error_msg = "Incorrect email or password";
    }

    // Close the database connection
    $conn = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css" href="style.css">
    <title>Login Form</title>
</head>
<body>
    <div class="signup-wrapper">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="signup-form">
            <h1>Sign In</h1>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" require>

            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" require>

            </div>
            <?php echo "<p style ='color:red; margin-top:10px; margin-bottom:10px;'>".$error_msg."</p>"?>
            <div class="form-group">
               <button type="submit" name="submit">Login</button>

            </div>
            <p>Don't have an account yet?<a href="register.php">signup</a>
        </form>

    </div>
</body>
</html>