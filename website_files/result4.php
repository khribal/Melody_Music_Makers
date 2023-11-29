<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Melody's Music Makers</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="home.html">Home<span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="main.php">Queries<span class="sr-only"></span></a>
                  </li>
              </ul>
            </div>
          </nav>
          <div class="mx-auto" style="width: 800px;">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">Instrument</th>
      <th scope="col">ID Number</th>
      <th scope="col">Rentor</th>
    </tr>
  </thead>
  <tbody>
    <?php 

//Select Query 4

$con = mysqli_connect("db.luddy.indiana.edu","i308s23_team32","my+sql=i308s23_team32", "i308s23_team32");
if (!$con){
    die("Failed to connect to MySQL: " . mysqli_connect_error() . "<br><br>");
}


$var_instrument = $_POST['instrument4'];

$freelance_query = "SELECT i.instrument_type as instrument, i.id as instrument_id, CONCAT(s.fname, ' ', s.lname) as student_name
FROM student AS s
JOIN student_instrument AS si ON si.studentID = s.id
JOIN instrument AS i ON si.instrumentID = i.id
WHERE i.rented = 1 AND i.instrument_type = '$var_instrument';
";


$results = mysqli_query($con, $freelance_query);


echo "<h4>" . $var_instrument . "s that are rented out and their rentors: " . "<br>" . "</h4>";
while($row = mysqli_fetch_assoc($results)){
    echo "<tr>" . "<td>" . $row['instrument'] . "</td>" . "<td>" . $row['instrument_id'] . "</td>" . "<td>" . $row['student_name'] . "</td>" . "</tr>";
};



mysqli_close($conn);
?>
  </tbody>
</table>
<a href="main.php"><button type="button" class="btn btn-secondary btn-lg px-4 gap-3">Go back</button></a>
</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>








