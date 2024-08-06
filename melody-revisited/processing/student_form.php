<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

$con = mysqli_connect("db.luddy.indiana.edu","i308s23_team32","my+sql=i308s23_team32", "i308s23_team32");
if (!$con){
    die("Failed to connect to MySQL: " . mysqli_connect_error() . "<br><br>");
}

$searchName = isset($_POST['search_name']) ? $_POST['search_name'] : '%';

$studentTable_query = "SELECT fname, lname, date_format(dob, '%c/%e/%Y') as dob, CONCAT(
        '(', 
        SUBSTRING(phone, 1, 3), 
        ') ', 
        SUBSTRING(phone, 4, 3), 
        '-', 
        SUBSTRING(phone, 7, 4)
    ) AS phone from students where concat(fname, ' ', lname) LIKE ?";

$stmt = $con->prepare($studentTable_query);
$search_pattern = '%' . $searchName . '%';
$stmt->bind_param("s", $search_pattern);
$stmt->execute();
$result = $stmt->get_result();

$studentTable = '<table><thead><tr>
<th>First Name</th>
<th>Last Name</th>
<th>Date of Birth</th>
<th>Phone</th>
</tr></thead><tbody>';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $studentTable .= '<tr>';
        $studentTable .= '<td>' . htmlspecialchars($row['fname']) . '</td>';
        $studentTable .= '<td>' . htmlspecialchars($row['lname']) . '</td>';
        $studentTable .= '<td>' . htmlspecialchars($row['dob']) . '</td>';
        $studentTable .= '<td>' . htmlspecialchars($row['phone']) . '</td>';
        $studentTable .= '</tr>';
    }
} else {
    $studentTable .= '<tr>';
    $studentTable .= '<td colspan="5">No records found</td>';
    $studentTable .= '</tr>';
}

$studentTable .= '</tbody></table>';

mysqli_free_result($result);
mysqli_close($con);

// Output the table rows as a response
echo $studentTable;
?>
