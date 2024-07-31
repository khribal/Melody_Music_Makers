<?php 
//STUDENT ANALYTICS
$con = mysqli_connect("db.luddy.indiana.edu","i308s23_team32","my+sql=i308s23_team32", "i308s23_team32");
if (!$con){
    die("Failed to connect to MySQL: " . mysqli_connect_error() . "<br><br>");
}

//Queries
$numstudents_query = "select count(id) from students";
$numteacher_query = "select count(id) from teachers";
$numfree_query = "select count(tutorID)from freelances";
$numemp_query = "select count(tutorID) from employees";
$numrented_query = "select count(id) from instruments where rented=1";

$newStudentsThisMonth_query = "SELECT COUNT(DISTINCT sl.studentID) as new_students
FROM student_lessons AS sl
JOIN lessons AS l ON l.id = sl.lessonID
        WHERE l.lesson_date = (
            SELECT MIN(l2.lesson_date)
            FROM lessons AS l2
            JOIN student_lessons AS sl2 ON sl2.lessonID = l2.id
            WHERE sl2.studentID = sl.studentID 
        )
AND MONTH(l.lesson_date) = MONTH(CURRENT_DATE)
AND YEAR(l.lesson_date) = YEAR(CURRENT_DATE)";

//Result arrays
$numstudents_result = mysqli_query($con, $numstudents_query);
$numteacher_result = mysqli_query($con, $numteacher_query);
$numfree_result = mysqli_query($con, $numfree_query);
$numemp_result = mysqli_query($con, $numemp_query);
$numrented_result = mysqli_query($con, $numrented_query);
$newStudentsThisMonth_result = mysqli_query($con, $newStudentsThisMonth_query);

//Store results in vars

$row = mysqli_fetch_assoc($numstudents_result);
$numstudents = $row['count(id)'];

$row = mysqli_fetch_assoc($numteacher_result);
$numteacher = $row['count(id)'];

$row = mysqli_fetch_assoc($numfree_result);
$numfree = $row['count(tutorID)'];

$row = mysqli_fetch_assoc($numemp_result);
$numemp = $row['count(tutorID)'];

$row = mysqli_fetch_assoc($numrented_result);
$numrented = $row['count(id)'];

$row = mysqli_fetch_assoc($newStudentsThisMonth_result);
$new_students = $row['new_students'];


// Free results
mysqli_free_result($numstudents_result);
mysqli_free_result($numteacher_result);
mysqli_free_result($numfree_result);
mysqli_free_result($numemp_result);
mysqli_free_result($numrented_result);
mysqli_free_result($newStudentsThisMonth_result);


mysqli_close($con);

?>