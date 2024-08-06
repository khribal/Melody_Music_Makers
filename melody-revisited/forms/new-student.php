<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../includes/components/head.php'); ?>
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
                <a href="../index.php">Home</a>
                <a href="../management.php">Management</a>
                <a href="../analytics.php">Analytics</a>
            </nav>
        </header>

        <main>
            <form action="s_process.php">
                <label for="fname">Student's first name:</label>
                <input type="text" name="fname">

                <label for="lname">Student's last name:</label>
                <input type="text" name="lname">

                <label for="dob">Student's date of birth:</label>
                <input type="date" name="dob">

                <label for="phone">Contact number:</label>
                <input type="tel" name="phone">
            </form>
        </main>
    </div>

    <footer>
        <p>&copy; 2024 Music Store Analytics. All rights reserved.</p>
    </footer>

    <script src="../js/nav.js"></script>
</body>

</html>