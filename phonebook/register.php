<?php
// include the database connection file
require_once 'db_connect.php';

session_start();


// check if the form was submitted
if (isset($_POST['submit'])) {

 

    // samitize the user inputs
    $fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);


    // Check if the email already exists in the database
$email_check_query = "SELECT * FROM `user` WHERE `email` = :email";
$stmt = $conn->prepare($email_check_query);
$stmt->bindParam(':email', $email);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    header('Location: register.php');
    $_SESSION['error'] = "Invalid Email Address";
    exit();
}

unset($_SESSION['error']);



    // hash the password using bcrypt algorithm
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    //prepare an sql statement for inserting user data into the database
    $stmt = $conn->prepare("INSERT INTO user (fullname, email, password) VALUES (:fullname, :email, :password)");

    // bind the sanitized user inputs to the sql statement
    $stmt->bindParam(':fullname', $fullname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $passwordHash); // Use the hashed password

    //Execute the SQL statement to insert user data into the database
    $stmt->execute();

    //close the database connection
    $conn = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css" href="style.css">
    <title>Sign up Form</title>
</head>
<body>
    <div class="signup-wrapper">


        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="signup-form">
        <?php
        

        if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
        }
        unset($_SESSION['error']);
        ?>
            <h1>Sign up</h1>
            <div class="form-group">
                <label for="name">Fullname:</label>
                <input type="text" id="name" name="fullname" require>

            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" require>

            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" require>

            </div>
            <div class="form-group">
               <button type="submit" name="submit">Signup</button>

            </div>
            <p>Already have an account?<a href="login.php">login</a>
        </form>

    </div>
</body>
</html>