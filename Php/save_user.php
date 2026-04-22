<?php
session_start();

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

/* JSON */
$jsonFile = "../data/users.json";
$data = json_decode(file_get_contents($jsonFile), true);

$data[] = [
    "username" => $username,
    "password" => $password
];

file_put_contents($jsonFile, json_encode($data, JSON_PRETTY_PRINT));

/* XML */
$xmlFile = "../data/users.xml";
$xml = simplexml_load_file($xmlFile);

$user = $xml->addChild("user");
$user->addChild("username", $username);
$user->addChild("password", $password);

$xml->asXML($xmlFile);

/* AUTO LOGIN */
$_SESSION['user'] = $username;

/* REDIRECT TO DASHBOARD */
header("Location: ../dashboard.php");
exit();
?>