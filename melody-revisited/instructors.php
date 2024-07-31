<?php include 'inst_analytics.php'; ?>
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
            <h1 class="header-text">Melody's Music Store</h1>
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
        <section class="dashboard">
            <h2>Instuctor Data</h2>
            <p>The average rate for employees is <span><?php echo $rateEmp; ?></span></p>
            <p>The average rate for freelance is <span><?php echo $rateFree; ?></span></p>
            <p><?php echo $mostPopularMonthsJSON; ?></p>
            <div class="cards">
                <div class="card">
                    <h3>Total Instructors</h3>
                    <p><?php echo $numInstructors; ?></p>
                </div>
                <div class="card">
                    <h3>Number Freelance</h3>
                    <p><?php echo $numFree; ?></p>
                </div>
                <div class="card">
                    <h3>Number Employees</h3>
                    <p><?php echo $numEmp; ?></p>
                </div>
                <div class="card">
                    <h3>Most Popular Location</h3>
                    <p><?php echo $street; ?></p>
                    <small><?php echo $numLessonsAtLocation; ?></small>
                </div>
            </div>
            <div class="charts">
                <div class="chart" id="rental-chart">
                    <h3>Rental Trends</h3>
                    <canvas id="rentalTrendsChart"></canvas>
                </div>
                <div class="chart" id="availability-chart">
                    <h3>Instrument Availability</h3>
                    <canvas id="availabilityChart"></canvas>
                </div>
            </div>
        </section>
    </main>
    

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="./js/nav.js"></script>
    <script src="./js/scripts.js"></script>
</body>

</html>