<?php
session_start();
include 'includes/handler.inc.php';
$database = new Database();
$sql = $database->pullServices();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ethereal - Billing System</title>
    <link rel="icon" type="image/png" href="./assets/img/ethereal-notext.svg">
    <meta name="title" content="Ethereal - Billing Stem">
    <meta name="description" content="The new future of easy CPanel management and billing!">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>