<?php 
//INSTRUMENT ANALYTICS

$con = mysqli_connect("db.luddy.indiana.edu","i308s23_team32","my+sql=i308s23_team32", "i308s23_team32");
if (!$con){
    die("Failed to connect to MySQL: " . mysqli_connect_error() . "<br><br>");
}

//Queries
$mostPopular_query = "select i.instrument_type, count(r.instrumentID)
from rentals as r 
join instruments as i on r.instrumentID=i.id
group by r.instrumentID
order by count(r.instrumentID) desc
limit 1";

$numRented_query = "select count(id) from instruments where rented=1";
$numAvailable_query = "select count(id) from instruments where rented=0";
$totalInstr_query = "select count(id) from instruments";

$newRentalsThisMonth_query = "select date_format(current_date, '%M') as month, count(rateID) as num_new from rentals
where month(date_rented)=month(current_date) and year(date_rented) = year(current_date)";


//Fetch results
$mostPopular_result = mysqli_query($con, $mostPopular_query);
$numRented_result = mysqli_query($con, $numRented_query);
$numAvailable_result = mysqli_query($con, $numAvailable_query);
$totalInstr_result = mysqli_query($con, $totalInstr_query);
$newRentalsThisMonth_result = mysqli_query($con, $newRentalsThisMonth_query);

//Store results in vars
$row = mysqli_fetch_assoc($mostPopular_result);
$instName = $row['instrument_type'];
$numRentals = $row['count(r.instrumentID)'];

$row = mysqli_fetch_assoc($numRented_result);
$numRented = $row['count(id)'];

$row = mysqli_fetch_assoc($numAvailable_result);
$numAvail = $row['count(id)'];

$row = mysqli_fetch_assoc($totalInstr_result);
$numInstr = $row['count(id)'];

$row = mysqli_fetch_assoc($newRentalsThisMonth_result);
$curMonth = $row['month'];
$numNewRental = $row['num_new'];


// Free results
mysqli_free_result($mostPopular_result);
mysqli_free_result($numRented_result);
mysqli_free_result($numAvailable_result);
mysqli_free_result($totalInstr_result);
mysqli_free_result($newRentalsThisMonth_result);

mysqli_close($con);
?>