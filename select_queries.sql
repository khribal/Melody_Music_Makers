Select i.instrument_type, count(s.id) as 'Num of Students'
From student as s
Join student_instrument as si on si.studentID=s.id
Join instrument as i on si.instrumentID=i.id
Group by i.instrument_type;


SELECT CONCAT(fname, ' ', lname) as name, freelance.rate from teacher
JOIN freelance on teacher.id = freelance.tutorID
WHERE teacher.id = 5;


Select ti.instrument, count(t.id) as 'Num of Tutors'
from teacher as t
Join teacher_instrument as ti on ti.tutorID=t.id
Group by ti.instrument;


SELECT i.instrument_type, i.id, CONCAT(s.fname, ' ', s.lname)
FROM student AS s
JOIN student_instrument AS si ON si.studentID = s.id
JOIN instrument AS i ON si.instrumentID = i.id
WHERE i.rented = 1;


Select count(f.tutorID), i.instrument_type
From freelance as f
Join teacher_instrument as ti on ti.tutorID=f.tutorID
Join instrument as i on i.id = ti.instrument
WHERE f.rate > 10 AND f.tutorID IN (Select f1.tutorID
From freelance as f1
Join lesson as l1 on l1.tutorID=f1.tutorID
Join lesson_info as li1 on li1.lessonID=l1.id
Where l1.location = '489 Sutherland Alley');
