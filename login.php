<?php
session_start();
include 'includes/handler.inc.php';
new Database();
new Login();
$session = new Session();
$session->loggedIn();
include './views/meta.html';
include './views/login.html';
?>