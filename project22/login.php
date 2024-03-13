<?php
    $user = isset($user) ? $user : ['name' => '', 'email' => '']; 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<div class="container">
    <form action="upload_profile.php" method="post" enctype="multipart/form-data">
        <h2>Profile Information</h2>
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $user['name']; ?>" required>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo isset($user['email']) ? $user['email'] : ''; ?>" disabled>
        <label for="avatar">Avatar:</label>
        <input type="file" name="avatar" accept="image/*">
        <button type="submit">Update Profile</button>
    </form>
</div>
</body>
</html>
<?php
    require 'upload_profile.php';
?>




