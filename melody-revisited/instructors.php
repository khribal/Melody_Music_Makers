<?php include 'inst_analytics.php'; ?>
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
        <h1>Music Store Dashboard</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="instruments.html">Instruments</a></li>
                <li><a href="students.html">Students</a></li>
                <li><a href="instructors.html">Instructors</a></li>
            </ul>
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
    

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="./js/scripts.js"></script>
</body>

</html>