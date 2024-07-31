<?php 
//INSTRUCTOR ANALYTICS


$con = mysqli_connect("db.luddy.indiana.edu","i308s23_team32","my+sql=i308s23_team32", "i308s23_team32");
if (!$con){
    die("Failed to connect to MySQL: " . mysqli_connect_error() . "<br><br>");
}

// Card Queries
$numInstructors_query = "SELECT COUNT(id) as count FROM teachers";
$numFree_query = "SELECT COUNT(tutorID) as count FROM freelances";
$numEmp_query = "SELECT COUNT(tutorID) as count FROM employees";
$rateFree_query = "SELECT AVG(rate) as avg_rate FROM freelances";
$rateEmp_query = "SELECT AVG(rate) as avg_rate FROM employees";
$popularLocation_query = "SELECT lo.street, COUNT(sl.lessonID) as lesson_count
                          FROM lessons as l 
                          JOIN student_lessons as sl ON sl.lessonID = l.id
                          JOIN locations as lo ON lo.id = l.locationID
                          GROUP BY lo.street
                          ORDER BY lesson_count DESC
                          LIMIT 1";
$mostLessons_query = "SELECT teacherID, COUNT(id) as lesson_count
                      FROM lessons
                      GROUP BY teacherID
                      ORDER BY lesson_count DESC
                      LIMIT 1";
$mostStudents_query = "SELECT l.id as lesson_id, COUNT(sl.lessonID) as student_count
                       FROM lessons as l 
                       JOIN student_lessons as sl ON sl.lessonID = l.id
                       GROUP BY l.id
                       ORDER BY student_count DESC
                       LIMIT 1";

// Graphed Queries
$mostPopularMonth_query = "SELECT MONTH(lesson_date) as month, COUNT(MONTH(lesson_date)) as frequency
                           FROM lessons
                           GROUP BY month";
$peakTime_query = "SELECT TIME_FORMAT(lesson_time, '%l %p') as time, COUNT(*) as quantity
                   FROM lessons
                   GROUP BY time
                   ORDER BY lesson_time";

// Fetch results
$numInstructors_result = mysqli_query($con, $numInstructors_query);
$numFree_result = mysqli_query($con, $numFree_query);
$numEmp_result = mysqli_query($con, $numEmp_query);
$rateFree_result = mysqli_query($con, $rateFree_query);
$rateEmp_result = mysqli_query($con, $rateEmp_query);
$popularLocation_result = mysqli_query($con, $popularLocation_query);
$mostLessons_result = mysqli_query($con, $mostLessons_query);
$mostStudents_result = mysqli_query($con, $mostStudents_query);
$mostPopularMonth_result = mysqli_query($con, $mostPopularMonth_query);
$peakTime_result = mysqli_query($con, $peakTime_query);

// Store results in vars
$numInstructors = mysqli_fetch_assoc($numInstructors_result)['count'];
$numFree = mysqli_fetch_assoc($numFree_result)['count'];
$numEmp = mysqli_fetch_assoc($numEmp_result)['count'];
$rateFree = mysqli_fetch_assoc($rateFree_result)['avg_rate'];
$rateEmp = mysqli_fetch_assoc($rateEmp_result)['avg_rate'];

$popularLocation = mysqli_fetch_assoc($popularLocation_result);
$street = $popularLocation['street'];
$numLessonsAtLocation = $popularLocation['lesson_count'];

$mostLessons = mysqli_fetch_assoc($mostLessons_result);
$teacherID = $mostLessons['teacherID'];
$numLessonsTaught = $mostLessons['lesson_count'];

$mostStudents = mysqli_fetch_assoc($mostStudents_result);
$lessonID = $mostStudents['lesson_id'];
$numStudentsTaught = $mostStudents['student_count'];

$mostPopularMonths = [];
while ($row = mysqli_fetch_assoc($mostPopularMonth_result)) {
    $mostPopularMonths[] = $row;
}

$mostPopularMonthsJSON = json_encode($mostPopularMonths);

$peakTimes = [];
while ($row = mysqli_fetch_assoc($peakTime_result)) {
    $peakTimes[] = $row;
}

// Free results
mysqli_free_result($numInstructors_result);
mysqli_free_result($numFree_result);
mysqli_free_result($numEmp_result);
mysqli_free_result($rateFree_result);
mysqli_free_result($rateEmp_result);
mysqli_free_result($popularLocation_result);
mysqli_free_result($mostLessons_result);
mysqli_free_result($mostStudents_result);
mysqli_free_result($mostPopularMonth_result);
mysqli_free_result($peakTime_result);

mysqli_close($con);
?>
