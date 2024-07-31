<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrument Management</title>
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
            <h2>Instrument Management</h2>
            <div class="actions">
                <button onclick="location.href='add_instrument.html'">Add New Instrument</button>
            </div>
            <div class="instrument-list">
                <h3>Current Instruments</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Instrument</th>
                            <th>Brand</th>
                            <th>Condition</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample instrument data -->
                        <tr>
                            <td>Violin</td>
                            <td>Yamaha</td>
                            <td>Good</td>
                            <td>
                                <button onclick="editInstrument(1)">Edit</button>
                                <button onclick="deleteInstrument(1)">Delete</button>
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
    <script src="./js/instrument_management.js"></script>
</body>

</html>