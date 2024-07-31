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
            <h2>Student Management</h2>
            <div class="actions">
                <button onclick="location.href='add_student.html'">Add New Student</button>
            </div>
            <div class="student-list">
                <h3>Current Students</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Instrument</th>
                            <th>Contact</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample student data -->
                        <tr>
                            <td>John Doe</td>
                            <td>Piano</td>
                            <td>john.doe@example.com</td>
                            <td>
                                <button onclick="editStudent(1)">Edit</button>
                                <button onclick="deleteStudent(1)">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>

        <footer>
            <p>&copy; 2024 Your Company Name. All rights reserved.</p>
        </footer>
    </div>

    <script src="./js/nav.js"></script>
    <script src="./js/student_management.js"></script>
</body>

</html>