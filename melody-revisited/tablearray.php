<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Sample data array
$data = [
    ['Name' => 'John Doe', 'Email' => 'john@example.com', 'Age' => 30],
    ['Name' => 'Jane Smith', 'Email' => 'jane@example.com', 'Age' => 25],
    ['Name' => 'Alice Johnson', 'Email' => 'alice@example.com', 'Age' => 28],
];

// Start the HTML table
echo '<table border="1">';

// Create the table header
echo '<tr>';
foreach (array_keys($data[0]) as $header) {
    echo '<th>' . htmlspecialchars($header) . '</th>';
}
echo '</tr>';

// Create table rows
foreach ($data as $row) {
    echo '<tr>';
    foreach ($row as $cell) {
        echo '<td>' . htmlspecialchars($cell) . '</td>';
    }
    echo '</tr>';
}

// End the HTML table
echo '</table>';
?>

</body>
</html>


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