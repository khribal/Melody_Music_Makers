<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/test.css">
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

        <main>
            <h2>Instructor Management</h2>
            <div class="actions">
                <button onclick="location.href='add_student.html'">Add New Student</button>
            </div>

            <div class="student-list">

            <h3>Current instructors</h3>
            <h4>Freelance</h4>
            <label for="instructors">Search for an instructor:</label>
            <input type="text" id="search" name="instructors" oninput="search()">
                <div id="tableContainer"></div>

            </div>
            <h4>Employees</h4>
            <label for="instructors2">Search for an instructor:</label>
            <input type="text" id="search2" name="instructors2" oninput="search2()">
            <div id="tableContainer2"></div>

            </div>
        </main>

        <footer>
            <p>&copy; 2024 Your Company Name. All rights reserved.</p>
        </footer>
    </div>

    <script src="./js/nav.js"></script>
    <script>
        function search() {
            //Get value from dropdown
            const selectedValue = document.getElementById('search').value;

            //AJAX Request
            const xhr = new XMLHttpRequest();

            xhr.open('POST', 'processing/freelance.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Update the tableContainer with the response
                    document.getElementById('tableContainer').innerHTML = xhr.responseText;
                } else {
                    console.error('Error fetching data');
                }
            };

            xhr.send('search_name=' + encodeURIComponent(selectedValue));
        }

        function search2() {
            //Get value from dropdown
            const selectedValue = document.getElementById('search2').value;

            //AJAX Request
            const xhr = new XMLHttpRequest();

            xhr.open('POST', 'processing/emp.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Update the tableContainer with the response
                    document.getElementById('tableContainer2').innerHTML = xhr.responseText;
                } else {
                    console.error('Error fetching data');
                }
            };

            xhr.send('search_name2=' + encodeURIComponent(selectedValue));
        }
        
        window.onload = function() {
            search();
            search2();
        };
    </script>
</body>

</html>