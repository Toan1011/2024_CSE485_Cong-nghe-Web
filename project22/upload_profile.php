<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and update user information
    $errors = [];
    $user['name'] = $_POST['name'];

    // Handle avatar upload
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $maxSize = 1048576; // 1MB
    $uploadDirectory = __DIR__ . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR;

    // Create the 'uploads' directory if it doesn't exist
    if (!file_exists($uploadDirectory)) {
        mkdir($uploadDirectory, 0755, true);
    }

    if (!empty($_FILES['avatar']['tmp_name'])) {
        $fileInfo = pathinfo($_FILES['avatar']['name']);

        if (!in_array($fileInfo['extension'], $allowedExtensions)) {
            $errors[] = "Only JPG, JPEG, and PNG files are allowed.";
        } elseif ($_FILES['avatar']['size'] > $maxSize) {
            $errors[] = "File size must be less than 1MB.";
        } else {
            $destination = $uploadDirectory . uniqid() . "." . $fileInfo['extension'];

            session_start();
            $_SESSION['avatar'] = $destination;

            if ($_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
                // Move uploaded file to destination
                move_uploaded_file($_FILES['avatar']['tmp_name'], $destination);
                echo "Profile updated successfully!";
            } else {
                // Handle upload error (e.g., display error message)
                echo 'Error uploading file: ' . $_FILES['avatar']['error'];
            }
        }
    }

    // Handle errors
    if (!empty($errors)) {
        echo "Errors:";
        foreach ($errors as $error) {
            echo "<br> - $error";
        }
    }
}
?>


