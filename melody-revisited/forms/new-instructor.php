<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS --> 
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/forms.css">
</head>

<body>
    <div class="container">
        <header>
            <div>
                <img src="../img/cute_logo.png" alt="logo">
                <h1>Melody's Music</h1>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <nav class="nav" id="navBar">
                <a href="../index.php">Home</a>
                <a href="../management.php">Management</a>
                <a href="../analytics.php">Analytics</a>
            </nav>
        </header>
        <main>
            <div class="form-header">
                <h2>Add an instructor</h2>
                <p>Please fill out the form below to add a new student to the system.</p>
            </div>
            <form action="s_process.php" class="styled-form">
                <div class="form-group">
                    <label for="fname">Student's first name:</label>
                    <input type="text" name="fname" id="fname">
                </div>

                <div class="form-group">
                    <label for="lname">Student's last name:</label>
                    <input type="text" name="lname" id="lname">
                </div>

                <div class="form-group">
                    <label for="dob">Student's date of birth:</label>
                    <input type="date" name="dob" id="dob">
                </div>

                <div class="form-group">
                    <label for="phone">Contact number:</label>
                    <input type="tel" name="phone" id="phone">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn">Submit</button>
                </div>
            </form>
        </main>
    </div>

    <footer>
        <p>&copy; 2024 Music Store Analytics. All rights reserved.</p>
    </footer>

    <script src="../js/nav.js"></script>
</body>

</html>