<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $course = htmlspecialchars($_POST['course']);
} else {
    echo "Invalid request!";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Registration Successful</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Registration Successful 🎉</h2>
    <p><strong>Full Name:</strong> <?= $fullname ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Phone:</strong> <?= $phone ?></p>
    <p><strong>Gender:</strong> <?= $gender ?></p>
    <p><strong>Course:</strong> <?= $course ?></p>
    <a href="index.html"><button>Back to Form</button></a>
  </div>
</body>
</html>
