<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

$con = mysqli_connect("db.luddy.indiana.edu","i308s23_team32","my+sql=i308s23_team32", "i308s23_team32");
if (!$con){
    die("Failed to connect to MySQL: " . mysqli_connect_error() . "<br><br>");
}

$searchName = isset($_POST['search_name']) ? $_POST['search_name'] : '%';

$instructorTable_query = "SELECT t.fname, t.lname, CONCAT(
        '(', 
        SUBSTRING(t.phone, 1, 3), 
        ') ', 
        SUBSTRING(t.phone, 4, 3), 
        '-', 
        SUBSTRING(t.phone, 7, 4)
    ) AS phone, f.company, f.rate,
CASE
WHEN fulltime = 1 THEN 'Full time'
ELSE 'Part time'
END AS 'Employment'
from teachers as t 
join freelances as f
on f.teacherID=t.id
where concat(t.fname, ' ', t.lname) LIKE ?";

$stmt = $con->prepare($instructorTable_query);
$search_pattern = '%' . $searchName . '%';
$stmt->bind_param("s", $search_pattern);
$stmt->execute();
$result = $stmt->get_result();

$instructorTable = '<table><thead><tr>
<th>First Name</th>
<th>Last Name</th>
<th>Phone</th>
<th>Company</th>
<th>Rate</th>
<th>Employment</th>
</tr></thead><tbody>';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $instructorTable .= '<tr>';
        $instructorTable .= '<td>' . htmlspecialchars($row['fname']) . '</td>';
        $instructorTable .= '<td>' . htmlspecialchars($row['lname']) . '</td>';
        $instructorTable .= '<td>' . htmlspecialchars($row['phone']) . '</td>';
        $instructorTable .= '<td>' . htmlspecialchars($row['company']) . '</td>';
        $instructorTable .= '<td>' . htmlspecialchars($row['rate']) . '</td>';
        $instructorTable .= '<td>' . htmlspecialchars($row['Employment']) . '</td>';


        $instructorTable .= '</tr>';
    }
} else {
    $instructorTable .= '<tr>';
    $instructorTable .= '<td colspan="5">No records found</td>';
    $instructorTable .= '</tr>';
}

$instructorTable .= '</tbody></table>';

mysqli_free_result($result);
mysqli_close($con);

// Output the table rows as a response
echo $instructorTable;
?>
