<?php 
//INSTRUMENT ANALYTICS

include('/nfs/nfs2/home/klhribal/cgi-pub/melody-revisited/includes/db_con/db.php');


// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

//Queries
$mostPopular_query = "select i.instrument_type, count(r.instrumentID)
from rentals as r 
join instruments as i on r.instrumentID=i.id
group by i.instrument_type
order by count(r.instrumentID) desc
limit 1";

$numRented_query = "select count(id) from instruments where rented=1";
$numAvailable_query = "select count(id) from instruments where rented=0";
$totalInstr_query = "select count(id) from instruments";

$newRentalsThisMonth_query = "select date_format(current_date, '%M') as month, count(rateID) as num_new from rentals
where month(date_rented)=month(current_date) and year(date_rented) = year(current_date)";

$leastPopular_query = "select i.instrument_type as Instrument, count(r.instrumentID) as 'Number Rented'
from rentals as r 
join instruments as i on r.instrumentID=i.id
group by i.instrument_type
order by count(r.instrumentID) asc
limit 5";

$mostPopularInst_query = "select i.instrument_type as Instrument, count(r.instrumentID) as 'Rented'
from rentals as r 
join instruments as i on r.instrumentID=i.id
group by i.instrument_type
order by count(r.instrumentID) desc
limit 5";

$instrumentTable_query = "select instrument_type as 'Instrument Type', instrument_family as 'Instrument Family', brand as Brand, in_condition as Condition,
case
when rented = 1 then 'Rented'
else 'Available'
End as 'Rented Status'
from instruments
where instrument_type LIKE '$instrumentDropVal'";

$instrumentDropdown_query = "select distinct instrument_type from instruments";

// Fetch results and check for errors
$queries = [
    'mostPopular_result' => $mostPopular_query,
    'numRented_result' => $numRented_query,
    'numAvailable_result' => $numAvailable_query,
    'totalInstr_result' => $totalInstr_query,
    'newRentalsThisMonth_result' => $newRentalsThisMonth_query,
    'leastPopular_result' => $leastPopular_query,
    'mostPopularInst_result' => $mostPopularInst_query,
    'instrumentDropdown_result' => $instrumentDropdown_query,
];

foreach ($queries as $result_var => $query) {
    $$result_var = mysqli_query($con, $query);
    if (!$$result_var) {
        die("Error with $result_var: " . mysqli_error($con));
    }
}

//Store results in vars
$numRented = mysqli_fetch_assoc($numRented_result)['count(id)'];
$numAvail = mysqli_fetch_assoc($numAvailable_result)['count(id)'];
$numInstr = mysqli_fetch_assoc($totalInstr_result)['count(id)'];


$row = mysqli_fetch_assoc($mostPopular_result);
$instName = $row['instrument_type'];
$numRentals = $row['count(r.instrumentID)'];


$row = mysqli_fetch_assoc($newRentalsThisMonth_result);
$curMonth = $row['month'];
$numNewRental = $row['num_new'];


//Table data
$mostPopularInst = [];
while ($row = mysqli_fetch_assoc($mostPopularInst_result)) {
    $mostPopularInst[] = $row;
}


$mostPopularInst_json = json_encode($mostPopularInst);

$leastPopular = [];
while ($row = mysqli_fetch_assoc($leastPopular_result)) {
    $leastPopular[] = $row;
}

//Dropdown html
$instrumentDropdown = [];
while ($row = mysqli_fetch_assoc($instrumentDropdown_result)) {
    $instrumentDropdown[] = $row;
}

// Free results
mysqli_free_result($mostPopular_result);
mysqli_free_result($numRented_result);
mysqli_free_result($numAvailable_result);
mysqli_free_result($totalInstr_result);
mysqli_free_result($newRentalsThisMonth_result);
mysqli_free_result($leastPopular_result);
mysqli_free_result($mostPopularInst_result);
mysqli_free_result($instrumentDropdown_result);


mysqli_close($con);
?>