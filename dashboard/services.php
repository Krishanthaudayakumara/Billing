<?php
session_start();
include '../includes/handler.inc.php';
$session = new Session();
$session->dashboard();
$database = new Database();
$sql = $database->pullServices();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Billing System</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="../assets/css/styles.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md py-3">
        <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><img class="nav-icon" src="../assets/img/dashboard%201.svg"><a class="nav-link" href="index.php">Dashboard</a></li>
                    <li class="nav-item"><img class="nav-icon" src="../assets/img/server%201.svg"><a class="nav-link active" href="services.php">My Services</a></li>
                    <li class="nav-item"><img class="nav-icon" src="../assets/img/heart%20(1)%201.svg" width="20" height="43"><a class="nav-link" href="#">Tickets</a></li>
                    <li class="nav-item"><img class="nav-icon" src="../assets/img/settings%202.svg"><a class="nav-link" href="#">Account Settings</a></li>
                </ul><img class="picture" src="../assets/img/unsplash_WNoLnJo7tS8.svg">
                <div class="dropdown"><a class="dropdown-toggle grey transition" aria-expanded="false" data-bs-toggle="dropdown" href="#">John Doe</a>
                    <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-7">
        <div class="row">
            <div class="col-md-12">
                <p class="grey panel-p">Services</p>
                <p class="grey panel-header">My Services</p>
                <p class="grey panel-p">Here is a full list of all of the services you are subscribed to.<br></p>
            </div>
        </div>
    </div>
    <div class="container mt-45">
        <div class="row">
        <?php
        foreach ($row = $sql->fetchAll() as $row) {
        ?>
        <div class="col-md-6 mb-4">
                <div class="div-bg service-div">
                    <p class="purple service-name"><?php echo $row['package_name'] ?><?php if($row['status'] == "Active"){echo "<span class='green-stat service-status'>Active</span>";}else {echo "<span class='red service-status'>Terminated</span>";} ?><span class="grey service-id">Service ID: #<?php echo $row['id'] ?></span></p>
                    <div class="service-info mt-45">
                        <div class="service-div-inlien">
                            <p class="grey info-title">Started On</p>
                            <p class="purple info-info"><?php echo $row['createdAt'] ?></p>
                        </div>
                        <div class="service-div-inlien">
                            <p class="grey info-title">Expires On</p>
                            <p class="purple info-info">August 12, 2021</p>
                        </div>
                        <div class="service-div-inlien">
                            <p class="grey info-title">Price</p>
                            <p class="purple info-info">$5.99/month</p>
                        </div>
                        <div class="service-div-inlien">
                            <p class="grey info-title">Domain</p>
                            <p class="purple info-info"><?php echo $row['domain'] ?></p>
                        </div>
                    </div>
                    <div><a href='service.php?id=<?php echo $row['id']?>'><p class="footer-bottom-text mt-45">Login to CPanel<span>View Details</span></a></p></div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>