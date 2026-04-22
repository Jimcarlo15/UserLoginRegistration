<link rel="stylesheet" href="css/style.css">

<div class="container">
<h2>Register</h2>

<form action="php/save_user.php" method="POST">
    <input type="text" name="username" required>
    <input type="password" name="password" required>
    <button type="submit">Register</button>
</form>

<a href="index.php">Login</a>
</div>