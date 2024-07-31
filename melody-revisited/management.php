<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management Dashboard</title>

    <?php include('./includes/components/head.php'); ?>
    <link rel="stylesheet" href="./css/management.css">

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
                <a href="./management.php">Management</a>
                <a href="analytics.php">Analytics</a>
            </nav>
        </header>



        <div class="options">
            <div class="option" onclick="location.href='instruments.php'">
                <h2>Instrument Management</h2>
                <p>View rental log, add new instrument, and view existing instruments</p>
            </div>
            <div class="option" onclick="location.href='students.php'">
                <h2>Student Management</h2>
                <p>View/edit students and add new student</p>
            </div>
        </div>
        <div class="info-section">
            <h2>Welcome to the Management Dashboard</h2>
            <p>This dashboard provides you with a comprehensive overview of your instrument and student management. Here, you can easily navigate through various functionalities to keep track of your rentals and student details.</p>
            <p>Use the buttons above to access the instrument and student management sections. You can also find various reports and logs to analyze your rentals and student performance.</p>
            <p>Stay organized and make informed decisions to enhance your music program!</p>
        </div>

        <footer>
            <p>&copy; 2024 Your Company Name. All rights reserved.</p>
        </footer>
    </div>

    <script src="./js/nav.js"></script>

</body>
</html>
