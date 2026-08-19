<?php
include('db_connect.php');
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $phone = $_POST['phone'];

    $sql = "INSERT INTO users (name, email, password, phone) VALUES ('$name', '$email', '$password', '$phone')";
    if (mysqli_query($conn, $sql)) {
        $message = "Account created! <a href='login.php'>Login here</a>";
    } else {
        $message = "Error: Email already registered.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup - PG Finder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container my-5" style="max-width: 450px;">
    <div class="card p-4 shadow">
        <h4 class="mb-3 text-center">Student Signup</h4>
        <?php if($message) echo "<div class='alert alert-info'>$message</div>"; ?>
        <form method="POST">
            <div class="mb-3"><label>Full Name</label><input type="text" name="name" class="form-control" required></div>
            <div class="mb-3"><label>Email</label><input type="email" name="email" class="form-control" required></div>
            <div class="mb-3"><label>Phone</label><input type="text" name="phone" class="form-control" required></div>
            <div class="mb-3"><label>Password</label><input type="password" name="password" class="form-control" required></div>
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
    </div>
</div>
</body>
</html>