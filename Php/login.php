<?php
session_start();

$jsonFile = "../data/users.json";
$data = json_decode(file_get_contents($jsonFile), true);

$username = $_POST['username'];
$password = $_POST['password'];

foreach ($data as $user) {
    if ($user['username'] === $username && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $username;
        header("Location: ../dashboard.php");
        exit();
    }
}

echo "Invalid username or password";
?>