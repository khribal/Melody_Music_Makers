<?php 
    include 'in_analytics.php'; 
    include 'st_analytics.php';   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon --> 
    <link rel="apple-touch-icon" sizes="180x180" href="https://cgi.luddy.indiana.edu/~klhribal/melody-revisited/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://cgi.luddy.indiana.edu/~klhribal/melody-revisited/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://cgi.luddy.indiana.edu/~klhribal/melody-revisited/favicon/favicon-16x16.png">
    <link rel="manifest" href="https://cgi.luddy.indiana.edu/~klhribal/melody-revisited/favicon/site.webmanifest">
    <link rel="mask-icon" href="https://cgi.luddy.indiana.edu/~klhribal/melody-revisited/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="https://cgi.luddy.indiana.edu/~klhribal/melody-revisited/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="https://cgi.luddy.indiana.edu/~klhribal/melody-revisited/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    
    <title>Music Store Analytics</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS --> 
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/management.css">
    <link rel="stylesheet" href="./css/header.css">
</head>

<body>
    

    <div class="container">

    <header>
        <div>
            <img src="img/cute_logo.png" alt="logo">
            <h1>Melody's Music Store</h1>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <nav class="nav" id="navBar">
            <a href="./index.php">Home</a>
            <a href="./analytics.php">Management</a>
            <a href="analytics.php">Analytics</a>
        </nav>
    </header>

    <main>
        
        <section id="overview">
            <h2>Dashboard Overview</h2>
            <div class="dashboard-cards">
                <div class="card">
                    <h3>Total Rentals</h3>
                    <p id="total-rentals">-- <?php echo $numRented; ?></p>
                </div>
                <div class="card">
                    <h3>Total Students</h3>
                    <p id="total-students">-- <?php echo $numstudents; ?></p>
                </div>
                <div class="card">
                    <h3>New Rentals This <?php echo $curMonth; ?></h3>
                    <p id="new-rentals-month">-- <?php echo $numNewRental; 
                                                    if ($numNewRental == 1) 
                                                        {echo " rental";} 
                                                    else{echo " rentals";}?></p>
                </div>
                <div class="card">
                    <h3>New Students This Month</h3>
                    <p id="new-students-month">-- <?php echo $new_students; ?></p>
                </div>
            </div>
        </section>

        
            <h2>Quick Selection</h2>
                <div class="flex-select">
                <section id="students">
                    <h2>New Student</h2>
                    <button onclick="window.location.href='manage-students.php'">Add New Student</button>
                </section>

                <section id="rentals">
                    <h2>New Rental</h2>
                    <button onclick="window.location.href='manage-rentals.php'">View/Update Students</button>
                </section>
            </div>
        
        </main>
    </div>
    <footer>
        <p>&copy; 2024 Music Store Analytics. All rights reserved.</p>
    </footer>

    <script src="./js/nav.js"></script>
</body>

</html>