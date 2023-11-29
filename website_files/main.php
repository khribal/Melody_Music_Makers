<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melody's Music Makers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<!-- 1 -->
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
<div class="container my-5">
<div class="mx-auto" style="width: 1000px;">
    <form action="queryresults.php" method="POST">
    <div class="form-group">
        Select an instrument to see the number of students who play that instrument: 
        <select class="form-control" id="instrument" name="instrument">
        <?php
        $con = mysqli_connect("db.luddy.indiana.edu","i308s23_team32","my+sql=i308s23_team32", "i308s23_team32");
        if (!$con){
            die("Failed to connect to MySQL: " . mysqli_connect_error() . "<br><br>");
        }
        $result = mysqli_query($con, "SELECT instrument_type from instrument group by instrument_type order by instrument_type");
        while ($row = mysqli_fetch_assoc($result)) {
            unset($varActual, $varDisplay);
            $instrument_type = $row['instrument_type'];
            echo "<option value=" . $instrument_type . ">" . $instrument_type . "</option>";
        }
        ?>
        </select>
    </div>
        <input class="btn btn-secondary" type="submit" value="Show Data">
    </form>

<!-- 2 -->
    <form action="result2.php" method="POST">
    <div class="form-group">
        Select an freelance tutor to see their hourly rate: 
        <select class="form-control" id="teacher" name="teacher">
        <?php
        $con = mysqli_connect("db.luddy.indiana.edu","i308s23_team32","my+sql=i308s23_team32", "i308s23_team32");
        if (!$con){
            die("Failed to connect to MySQL: " . mysqli_connect_error() . "<br><br>");
        }
        $result = mysqli_query($con, "SELECT CONCAT(t.fname, ' ', t.lname) as 'teacher_name', t.id as teacher_id from teacher as t join freelance as f on f.tutorID=t.id where t.id in (SELECT tutorID from freelance) order by t.fname, t.lname;");
        while ($row = mysqli_fetch_assoc($result)) {
            unset($varActual, $varDisplay);
            $teacher_name = $row['teacher_name'];
            $teacher_id = $row['teacher_id'];
            echo '<option value="'.$teacher_id.'">'.$teacher_name.'</option>';
        }

        ?>
        </select>
        </div>
        <input class="btn btn-secondary" type="submit" value="Show Data">
    </form>

<!-- 3 -->
    <form action="result3.php" method="POST">
    <div class="form-group">
        Select an instrument to see how many tutors teach the instrument: 
        <select class="form-control" id="instrument3" name="instrument3">
        <?php
        $con = mysqli_connect("db.luddy.indiana.edu","i308s23_team32","my+sql=i308s23_team32", "i308s23_team32");
        if (!$con){
            die("Failed to connect to MySQL: " . mysqli_connect_error() . "<br><br>");
        }
        $result = mysqli_query($con, "SELECT instrument_type from instrument group by instrument_type order by instrument_type");
        while ($row = mysqli_fetch_assoc($result)) {
            unset($varActual, $varDisplay);
            $instrument_type = $row['instrument_type'];
            echo "<option value=" . $instrument_type . ">" . $instrument_type . "</option>";
        }
        ?>
        </select>
    </div>
        <input class="btn btn-secondary" type="submit" value="Show Data">
    </form>
    
<!-- 4 -->
    <form action="result4.php" method="POST">
    <div class="form-group">
        Select an instrument to see who has rented that instrument out: 
        <select class="form-control" id="instrument4" name="instrument4">
        <?php
        $con = mysqli_connect("db.luddy.indiana.edu","i308s23_team32","my+sql=i308s23_team32", "i308s23_team32");
        if (!$con){
            die("Failed to connect to MySQL: " . mysqli_connect_error() . "<br><br>");
        }
        $result = mysqli_query($con, "SELECT instrument_type from instrument group by instrument_type");
        while ($row = mysqli_fetch_assoc($result)) {
            unset($varActual, $varDisplay);
            $instrument = $row['instrument_type'];
            echo "<option value=" . $instrument . ">" . $instrument . "</option>";
        }
        ?>
        </select>
    </div>
        <input class="btn btn-secondary" type="submit" value="Show Data">
    </form>

<!-- 5 -->
<form action="result5.php" method="POST"> 
<div class="form-group">
        Select a location to see how many freelance tutors (with a rate above $10) teach at a certain location, as well as the instrument they teach: 
        <select class="form-control" id="location" name="location">
        <?php
        $con = mysqli_connect("db.luddy.indiana.edu","i308s23_team32","my+sql=i308s23_team32", "i308s23_team32");
        if (!$con){
            die("Failed to connect to MySQL: " . mysqli_connect_error() . "<br><br>");
        }
        $result = mysqli_query($con, "SELECT * FROM lesson as l join freelance as f on f.tutorID=l.tutorID where f.tutorID IN (SELECT tutorID from lesson) GROUP BY lesson_location order by lesson_location;");

        while ($row = mysqli_fetch_assoc($result)) {
            $location = $row['lesson_location'];
            echo '<option value="'.$location.'">'.$location.'</option>';
        }

        ?>
        </select>
    </div>
        <input class="btn btn-secondary" type="submit" value="Show Data">
        
</form>
    </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>