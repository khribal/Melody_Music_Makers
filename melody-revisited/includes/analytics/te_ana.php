<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// INSTRUCTOR (TEACHER) ANALYTICS

$con = mysqli_connect("db.luddy.indiana.edu","i308s23_team32","my+sql=i308s23_team32", "i308s23_team32");
if (!$con){
    die("Failed to connect to MySQL: " . mysqli_connect_error() . "<br><br>");
}

// Card Queries
$numInstructors_query = "SELECT COUNT(id) as count FROM teachers";
$numFree_query = "SELECT COUNT(tutorID) as count FROM freelances";
$numEmp_query = "SELECT COUNT(tutorID) as count FROM employees";
$rateFree_query = "SELECT round(AVG(rate), 1) as avg_rate FROM freelances";
$rateEmp_query = "SELECT round(AVG(rate), 1) as avg_rate FROM employees";
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
$mostStudents_query = "SELECT CONCAT(t.fname, ' ', t.lname) as Teacher, COUNT(sl.lessonID) as 'Number of Students'
                       FROM lessons as l 
                       JOIN student_lessons as sl ON sl.lessonID = l.id
                       JOIN teachers as t ON l.teacherID=t.id
                       GROUP BY l.teacherID
                       ORDER BY COUNT(sl.lessonID) DESC
                       LIMIT 3";

$activeTeacher_query = "select count(distinct teacherID)
from lessons 
where month(current_date)=month(lesson_date)
and
year(current_date)=year(lesson_date)";

$notActive_query = "select count(distinct teacherID)
from lessons 
where teacherID not in 
(select distinct teacherID
from lessons
where month(current_date)=month(lesson_date)
and
year(current_date)=year(lesson_date)
)";

// Graphed Queries
$mostPopularMonth_query = "SELECT MONTH(lesson_date) as month, COUNT(MONTH(lesson_date)) as frequency
                           FROM lessons
                           GROUP BY month";
$peakTime_query = "SELECT TIME_FORMAT(lesson_time, '%l %p') as time, COUNT(*) as quantity
                   FROM lessons
                   GROUP BY time
                   ORDER BY lesson_time";

// Fetch results and check for errors
$queries = [
    'numInstructors_result' => $numInstructors_query,
    'numFree_result' => $numFree_query,
    'numEmp_result' => $numEmp_query,
    'rateFree_result' => $rateFree_query,
    'rateEmp_result' => $rateEmp_query,
    'popularLocation_result' => $popularLocation_query,
    'mostLessons_result' => $mostLessons_query,
    'mostStudents_result' => $mostStudents_query,
    'mostPopularMonth_result' => $mostPopularMonth_query,
    'peakTime_result' => $peakTime_query,
    'active_result' => $activeTeacher_query,
    'notActive_result' => $notActive_query,
];

foreach ($queries as $result_var => $query) {
    $$result_var = mysqli_query($con, $query);
    if (!$$result_var) {
        die("Error with $result_var: " . mysqli_error($con));
    }
}

// Store results in vars
$numInstructors = mysqli_fetch_assoc($numInstructors_result)['count'];
$numFree = mysqli_fetch_assoc($numFree_result)['count'];
$numEmp = mysqli_fetch_assoc($numEmp_result)['count'];
$rateFree = mysqli_fetch_assoc($rateFree_result)['avg_rate'];
$rateEmp = mysqli_fetch_assoc($rateEmp_result)['avg_rate'];

$activeTeacher = mysqli_fetch_assoc($active_result)['count(distinct teacherID)'];
$notActive = mysqli_fetch_assoc($notActive_result)['count(distinct teacherID)'];

$popularLocation = mysqli_fetch_assoc($popularLocation_result);
$street = $popularLocation['street'];
$numLessonsAtLocation = $popularLocation['lesson_count'];

$mostLessons = mysqli_fetch_assoc($mostLessons_result);
$teacherID = $mostLessons['teacherID'];
$numLessonsTaught = $mostLessons['lesson_count'];

$mostStudents = [];
while ($row = mysqli_fetch_assoc($mostStudents_result)) {
    $mostStudents[] = $row;
}

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
