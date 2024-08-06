<?php 
    include './includes/analytics/in_ana.php'; 
    include './includes/analytics/st_ana.php'; 
    include './includes/analytics/te_ana.php'; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analytics Dashboard</title>

    <?php  include('./includes/components/head.php'); ?>
    <link rel="stylesheet" href="./css/analytics.css">
    <link rel="stylesheet" href="./css/quickselect.css">
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
        
        <div class="quick-select-bar">
            <a href="#instruments">Instruments</a>
            <a href="#instructors">Instructors</a>
            <a href="#students">Students</a>
        </div>

        <main>
            <section class="dashboard" id="instruments">
                <h2>Instruments</h2>
                <div class="snapshot-container">
                    <div class="snapshot">Total Instruments: <?php echo $numInstr; ?></div>
                    <div class="snapshot">Rented Instruments: <?php echo $numRented; ?></div>
                    <div class="snapshot">Available Instruments: <?php echo $numAvail; ?></div>
                    <div class="snapshot">Most Popular Instrument: <?php echo $instName; ?>, with <?php echo $numRentals; ?> rentals</div>
                </div>
                <div class="graph-container">
                    <div id="instrument-graph1" class="graph">Graph 1</div>
                    <div id="instrument-graph2" class="graph">Graph 2</div>
                </div>
            
                <div class="snapshot-container">
                    <div class="snapshot2">
                        <h3>Most Rented Instruments</h3>
                        <table>
                        <?php 
                            // Create the table header
                            echo '<tr>';
                            foreach (array_keys($mostPopularInst[0]) as $header) {
                                echo '<th>' . htmlspecialchars($header) . '</th>';
                            }
                            echo '</tr>';

                            // Create table rows
                            foreach ($mostPopularInst as $row) {
                                echo '<tr>';
                                foreach ($row as $cell) {
                                    echo '<td>' . htmlspecialchars($cell) . '</td>';
                                }
                                echo '</tr>';
                            }

                        ?>
                        </table>
                    </div>
                    <div class="snapshot2">
                        <h3>Least Rented Instruments</h3>
                        <table>
                        <?php 
                            // Create the table header
                            echo '<tr>';
                            foreach (array_keys($leastPopular[0]) as $header) {
                                echo '<th>' . htmlspecialchars($header) . '</th>';
                            }
                            echo '</tr>';

                            // Create table rows
                            foreach ($leastPopular as $row) {
                                echo '<tr>';
                                foreach ($row as $cell) {
                                    echo '<td>' . htmlspecialchars($cell) . '</td>';
                                }
                                echo '</tr>';
                            }

                        ?>
                        </table>
                    </div>
                </div>  
            </section>

            <section class="dashboard" id="instructors">
                <h2>Instructors</h2>
                <div class="snapshot-container">
                    <div class="snapshot">Total Instructors: <?php echo $numInstructors; ?></div>
                    <div class="snapshot">Active Instructors: <?php echo $activeTeacher; ?></div>
                    <div class="snapshot">Inactive Instructors: <?php echo $notActive; ?></div>
                </div>

                <div class="graph-container">
                    <div id="instructor-graph1" class="graph">Graph 1</div>
                    <div id="instructor-graph2" class="graph">Graph 2</div>
                </div>

                <div class="snapshot-container">
                    <div class="snapshot">Avg Rate Employee Tutors: <span><?php echo $rateEmp; ?></span></div>
                    <div class="snapshot">Avg Rate Freelance Tutors: <span><?php echo $rateFree; ?></span></div>
                </div>
                


                <div class="table-container">
                    <h3>Instructor Details</h3>
                    <table>
                    <?php 
                        // Create the table header
                        echo '<tr>';
                        foreach (array_keys($mostStudents[0]) as $header) {
                            echo '<th>' . htmlspecialchars($header) . '</th>';
                        }
                        echo '</tr>';

                        // Create table rows
                        foreach ($mostStudents as $row) {
                            echo '<tr>';
                            foreach ($row as $cell) {
                                echo '<td>' . htmlspecialchars($cell) . '</td>';
                            }
                            echo '</tr>';
                        }

                    ?>
                    </table>
                </div>
            </section>

            <section class="dashboard" id="students">
                <h2>Students</h2>
                <div class="snapshot-container">
                    <div class="snapshot">Total Students: <?php echo $numstudents; ?></div>
                    <div class="snapshot">Active Students: <?php echo $numActive; ?></div>
                    <div class="snapshot">Inactive Students: <?php echo $notActive; ?></div>
                    <div class="snapshot">Number of New Students this month: <?php echo $firstLessonDate; ?></div>
                </div>
                <div class="graph-container">
                    <div id="student-graph1" class="graph">Graph 1</div>
                    <div id="student-graph2" class="graph">Graph 2</div>
                </div>
            </section>
        </main>

        <footer>
            <p>&copy; 2024 Your Company Name. All rights reserved.</p>
        </footer>
    </div>

    <!-- d3 js -->
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <script src="./js/nav.js"></script>
    <script src="./js/analytics.js"></script>
</body>

</html>