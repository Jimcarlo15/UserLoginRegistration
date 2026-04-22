<?php session_start(); ?>
<link rel="stylesheet" href="css/style.css">

<div class="container">
<h2>Login</h2>

<form action="php/login.php" method="POST">
    <input type="text" name="username" required>
    <input type="password" name="password" required>
    <button type="submit">Login</button>
</form>

<a href="register.php">Register</a>
</div>