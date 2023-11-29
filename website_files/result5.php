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


<div class="mx-auto" style="width: 700px;">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">Number of tutors</th>
      <th scope="col">Rate</th>
    </tr>
  </thead>
  <tbody>

          <?php 

//Select Query 4

$con = mysqli_connect("db.luddy.indiana.edu","i308s23_team32","my+sql=i308s23_team32", "i308s23_team32");
if (!$con){
    die("Failed to connect to MySQL: " . mysqli_connect_error() . "<br><br>");
}


$var_location = $_POST['location'];


$location_query = "Select count(f.tutorID) as num_tutors, i.instrument_type as instrument
From freelance as f
Join teacher_instrument as ti on ti.tutorID=f.tutorID
Join instrument as i on i.id = ti.instrument
WHERE f.rate > 10 AND f.tutorID IN (Select f1.tutorID
From freelance as f1
Join lesson as l1 on l1.tutorID=f1.tutorID
Join lesson_info as li1 on li1.lessonID=l1.id
Where l1.lesson_location = '$var_location')
group by instrument;";


$results = mysqli_query($con, $location_query);
echo mysqli_num_rows($result);


while($row = mysqli_fetch_assoc($results)){
    echo "<h4>" . "Number of tutors at  " . $row['lesson_location'] . " with an hourly rate above 10 that can tutor students by instrument type" . "</h4>" . "<br>";
    echo "<tr>" . "<td>" . $row['num_tutors'] . "</td>" . "<td>" . $row['instrument']  . "</td>" .  "</tr>" . "<br>";
};



mysqli_close($con);
?>
</tbody>
</table>
<a href="main.php"><button type="button" class="btn btn-secondary btn-lg px-4 gap-3">Go back</button></a>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>








