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

$numActive_query = "select count(distinct sl.studentID) as num_active
from student_lessons as sl 
join lessons as l on l.id=sl.lessonID
join students as s on s.id=sl.studentID
where month(l.lesson_date) = month(current_date)
and
year(l.lesson_date)=year(current_date)";

$notActive_query = "select count(distinct s.id) as not_active
from students as s
where s.id NOT IN(
select distinct sl.studentID
from student_lessons as sl 
join lessons as l on l.id=sl.lessonID
join students as s on s.id=sl.studentID
where month(l.lesson_date) = month(current_date)
and
year(l.lesson_date)=year(current_date)
)";

$firstLessonDate_query = "SELECT COUNT(*) as num_students
FROM (
    SELECT sl.studentID, MIN(l.lesson_date) as first_lesson_date
    FROM student_lessons sl
    JOIN lessons l ON sl.lessonID = l.id
    GROUP BY sl.studentID
) as first_lessons
WHERE MONTH(first_lessons.first_lesson_date) = MONTH(CURDATE())
AND YEAR(first_lessons.first_lesson_date) = YEAR(CURDATE());
";

//Result arrays
$numstudents_result = mysqli_query($con, $numstudents_query);
$numteacher_result = mysqli_query($con, $numteacher_query);
$numfree_result = mysqli_query($con, $numfree_query);
$numemp_result = mysqli_query($con, $numemp_query);
$numrented_result = mysqli_query($con, $numrented_query);
$newStudentsThisMonth_result = mysqli_query($con, $newStudentsThisMonth_query);
$numActive_result = mysqli_query($con, $numActive_query);
$notActive_result = mysqli_query($con, $notActive_query);
$firstLessonDate_result = mysqli_query($con, $firstLessonDate_query);


// Fetch results and check for errors
$queries = [
    'numstudents_result' => $numstudents_query,
    'numteacher_result' => $numteacher_query,
    'numfree_result' => $numfree_query,
    'numemp_result' => $numemp_query,
    'numrented_result' => $numrented_query,
    'newStudentsThisMonth_result' => $newStudentsThisMonth_query,
    'numActive_result' => $numActive_query,
    'notActive_result' => $notActive_query,
    'firstLessonDate_result' => $firstLessonDate_query,
];

foreach ($queries as $result_var => $query) {
    $$result_var = mysqli_query($con, $query);
    if (!$$result_var) {
        die("Error with $result_var: " . mysqli_error($con));
    }
}

// Store results in vars
$numstudents = mysqli_fetch_assoc($numstudents_result)['count(id)'];
$numteacher = mysqli_fetch_assoc($numteacher_result)['count(id)'];
$numfree = mysqli_fetch_assoc($numfree_result)['count(tutorID)'];
$numemp = mysqli_fetch_assoc($numemp_result)['count(tutorID)'];
$numrented = mysqli_fetch_assoc($numrented_result)['count(id)'];
$new_students = mysqli_fetch_assoc($newStudentsThisMonth_result)['new_students'];
$notActive = mysqli_fetch_assoc($notActive_result)['not_active'];
$numActive = mysqli_fetch_assoc($numActive_result)['num_active'];
$firstLessonDate = mysqli_fetch_assoc($firstLessonDate_result)['num_students'];



// Free results
mysqli_free_result($numstudents_result);
mysqli_free_result($numteacher_result);
mysqli_free_result($numfree_result);
mysqli_free_result($numemp_result);
mysqli_free_result($numrented_result);
mysqli_free_result($newStudentsThisMonth_result);
mysqli_free_result($notActive_result);
mysqli_free_result($numActive_result);


mysqli_close($con);

?>