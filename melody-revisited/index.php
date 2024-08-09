<?php 
    include './includes/analytics/in_ana.php'; 
    include './includes/analytics/st_ana.php';   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Music Store Analytics</title>
    <?php include('./includes/components/head.php'); ?>
  
</head>

<body>
    

    <div class="container">
    
    <header>
        <div>
            <img src="img/cute_logo.png" alt="logo">
            <h1>Melody's Music</h1>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <nav class="nav" id="navBar">
            <a href="./index.php">Home</a>
            <a href="./management.php">Management</a>
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
                    <button onclick="window.location.href='./forms/new-student.php'">Add New Student</button>
                </section>

                <section id="rentals">
                    <h2>New Instrument</h2>
                    <button onclick="window.location.href='./forms/new-instrument.php'">Add New Rental</button>
                </section>
            </div>
        
        </main>
    </div>
    <footer>
        <p>&copy; 2024 Music Store Analytics. All rights reserved.</p>
    </footer>

    <script src="./js/nav.js"></script>
    <script src="./js/check_success.js"></script>
</body>

</html>