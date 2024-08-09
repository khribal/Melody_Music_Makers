<?php 
    include './includes/analytics/in_ana.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrument Management</title>

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

        <main>
            <h2>Instrument Management</h2>
            <div class="actions">
                <button onclick="location.href='./forms/new-instrument.php'">Add New Instrument</button>
            </div>

            <label for="instruments">Choose an instrument:</label>
            
                <select name="instruments" id="instruments" onchange="changeTable()">
                    <?php 
                        foreach ($instrumentDropdown as $instrument) {
                            echo '<option value="' . htmlspecialchars($instrument['instrument_type']) . '">' . htmlspecialchars($instrument['instrument_type']) . '</option>';
                        }

                    ?>
                        <option value="%" selected="selected">All</option>
                </select>
            

            <div class="instrument-list">
                <h3>Current Instruments</h3>
                <div id="tableContainer">
                    <?php echo $instrumentTable; ?>
                </div>
            </div>
        </main>

        <footer>
            <p>&copy; 2024 Your Company Name. All rights reserved.</p>
        </footer>
    </div>

    <script src="./js/nav.js"></script>
    <!-- <script src="./js/change_table.js></script> -->

    <script>
        function changeTable() {
            //Get value from dropdown
            const selectedValue = document.getElementById('instruments').value;

            //AJAX Request
            const xhr = new XMLHttpRequest();

            xhr.open('POST', 'processing/instrument_form.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Update the tableContainer with the response
                    document.getElementById('tableContainer').innerHTML = xhr.responseText;
                } else {
                    console.error('Error fetching data');
                }
            };

            xhr.send('instrument_type=' + encodeURIComponent(selectedValue));
        }

        window.onload = function() {
            changeTable();
        };
    </script>
</body>

</html>