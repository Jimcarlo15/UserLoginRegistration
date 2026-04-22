<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>

<link rel="stylesheet" href="css/style.css">

<div class="container">
<h2>Welcome <?php echo $_SESSION['user']; ?> 🎉</h2>

<a href="php/logout.php"><button>Logout</button></a>
</div>