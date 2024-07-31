<?php include 'in_analytics.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Store Dashboard - Instruments</title>
    <link rel="stylesheet" href="./css/dash.css">
</head>

<body>
    <header>
        <h1>Music Store Analytics Dashboard</h1>
        <p><a href="./index.php">Back to home</a></p>
    </header>
    <main>
        <section class="dashboard">
            <h2>Instruments Data</h2>
            <div class="cards">
                <div class="card">
                    <h3>Total Instruments</h3>
                    <p><?php echo $numInstr; ?></p>
                </div>
                <div class="card">
                    <h3>Instruments Rented Out</h3>
                    <p><?php echo $numRented; ?></p>
                </div>
                <div class="card">
                    <h3>Instruments Available</h3>
                    <p><?php echo $numAvail; ?></p>
                </div>
                <div class="card">
                    <h3>Most Popular Instrument</h3>
                    <p><?php echo $instName; ?></p>
                    <small><?php echo $numRentals; ?> rentals</small>
                </div>
            </div>
            <div class="charts">
                <div class="chart" id="rental-chart">
                    <h3>Rental Trends</h3>
                    <div id="rentalTrendsChart"></div>
                </div>
                <div class="chart" id="availability-chart">
                    <h3>Instrument Availability</h3>
                    <div id="availabilityChart"></div>
                </div>
            </div>
        </section>
    </main>
    
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <script src="./js/scripts.js"></script>
</body>

</html>
