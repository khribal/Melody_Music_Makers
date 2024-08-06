<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

$con = mysqli_connect("db.luddy.indiana.edu","i308s23_team32","my+sql=i308s23_team32", "i308s23_team32");
if (!$con){
    die("Failed to connect to MySQL: " . mysqli_connect_error() . "<br><br>");
}

$instrumentDropVal = isset($_POST['instrument_type']) ? $_POST['instrument_type'] : '%';

$instrumentTable_query = "SELECT instrument_type AS 'Instrument Type', instrument_family AS 'Instrument Family', brand AS Brand, in_condition AS 'Condition',
CASE
WHEN rented = 1 THEN 'Rented'
ELSE 'Available'
END AS 'Rented Status'
FROM instruments
WHERE instrument_type LIKE ?";

$stmt = $con->prepare($instrumentTable_query);
$stmt->bind_param("s", $instrumentDropVal);
$stmt->execute();
$result = $stmt->get_result();

$instrumentTable = '<table><thead><tr>
<th>Instrument Type</th>
<th>Instrument Family</th>
<th>Brand</th>
<th>Condition</th>
<th>Rented Status</th>
</tr></thead><tbody>';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $instrumentTable .= '<tr>';
        $instrumentTable .= '<td>' . htmlspecialchars($row['Instrument Type']) . '</td>';
        $instrumentTable .= '<td>' . htmlspecialchars($row['Instrument Family']) . '</td>';
        $instrumentTable .= '<td>' . htmlspecialchars($row['Brand']) . '</td>';
        $instrumentTable .= '<td>' . htmlspecialchars($row['Condition']) . '</td>';
        $instrumentTable .= '<td>' . htmlspecialchars($row['Rented Status']) . '</td>';
        $instrumentTable .= '</tr>';
    }
} else {
    $instrumentTable .= '<tr>';
    $instrumentTable .= '<td colspan="5">No records found</td>';
    $instrumentTable .= '</tr>';
}

$instrumentTable .= '</tbody></table>';

mysqli_free_result($result);
mysqli_close($con);

// Output the table rows as a response
echo $instrumentTable;
?>
