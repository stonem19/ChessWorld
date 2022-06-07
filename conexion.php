<?php
session_start();

$servername = "localhost";
$database = "bbdd";
$username = "root";
$password = "";

$_SESSION["conn"] = new mysqli($servername, $username, $password, $database);
if ($_SESSION["conn"]->connect_error) {
    die("Connection failed: " . $_SESSION["con"]->connect_error);
}
?>