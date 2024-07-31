drop table if exists rentals;
drop table if exists student_instruments;
drop table if exists student_lessons;
drop table if exists teacher_specializations;
drop table if exists specializations;
drop table if exists employees;
drop table if exists freelances;
drop table if exists lessons;
drop table if exists teachers;
drop table if exists locations;
drop table if exists rates;
drop table if exists instruments;
drop table if exists students; 

create table students(
    id int not null AUTO_INCREMENT,
    fname varchar(50), 
    lname varchar(50), 
    dob date,
    phone varchar(50), 
    primary key (id)
);

create table instruments(
    id int not null AUTO_INCREMENT,
    instrument_type varchar(50),
    instrument_family varchar(50),
    rented tinyint,
    primary key (id)
);

create table rates(
    id int not null AUTO_INCREMENT,
    instrumentID int not null,
    rate int,
    primary key (id),
    foreign key(instrumentID) references instrument(id)
);

create table locations(
    id int not null AUTO_INCREMENT,
    street varchar(50),
    city varchar(50),
    state varchar(50),
    zip varchar(50),
    primary key (id)
);

create table teachers(
    id int not null AUTO_INCREMENT,
    fname varchar(50),
    lname varchar(50),
    phone varchar(50), 
    primary key (id)
);


create table lessons(
    id int not null AUTO_INCREMENT,
    locationID INT,
    teacherID int not null,
    lesson_date date,
    lesson_time time,
    instrument varchar(50),
    max_students int,
    description varchar(50),
    num_hours decimal,
    primary key (id),
    FOREIGN KEY (locationID) REFERENCES locations(id),
    foreign key (teacherID) references teachers(id)
);

create table freelances(
    tutorID int not null AUTO_INCREMENT,
    rate int,
    company varchar(50),
    fulltime tinyint,
    teacherID int,
    primary key (tutorID),
    foreign key (teacherID) references teacher(id)
);

create table employees(
    tutorID int not null AUTO_INCREMENT,
    rate int,
    teacherID int, 
    primary key (tutorID), 
    foreign key (teacherID) references teacher(id)
);

create table specializations(
    id int not null AUTO_INCREMENT,
    spec_name varchar(50),
    primary key (id)
);

create table teacher_specializations(
    teacherID int not null,
    specID int not null,
    foreign key (teacherID) references teachers(id),
    foreign key (specID) references specializations(id)
);

create table student_lessons(
    studentID int not null,
    lessonID int not null,
    present tinyint,
    foreign key (studentID) references students(id),
    foreign key (lessonID) references lessons(id)
);

create table student_instruments(
    studentID int not null,
    instrumentID int not null,
    foreign key (studentID) references students(id),
    foreign key (instrumentID) references instruments(id)
);

create table rentals(
    date_rented date,
    return_date date,
    rateID int, 
    studentID int, 
    instrumentID int,
    foreign key (studentID) references students(id),
    foreign key (instrumentID) references instruments(id),
    foreign key (rateID) references rates(id)
);


INSERT INTO students (id, fname, lname, dob, phone) VALUES
(1, 'John', 'Doe', '2000-01-15', 1234567890),
(2, 'Jane', 'Smith', '2001-02-20', 2345678901),
(3, 'Michael', 'Johnson', '2002-03-10', 3456789012),
(4, 'Emily', 'Davis', '2003-04-25', 4567890123),
(5, 'Daniel', 'Williams', '2004-05-30', 5678901234),
(6, 'Olivia', 'Brown', '2005-06-15', 6789012345),
(7, 'James', 'Miller', '2006-07-20', 7890123456),
(8, 'Sophia', 'Wilson', '2007-08-05', 8901234567),
(9, 'Ethan', 'Moore', '2008-09-12', 9012345678),
(10, 'Ava', 'Taylor', '2009-10-22', 1023456789);

INSERT INTO instruments (id, instrument_type, instrument_family, rented) VALUES
(1, 'Guitar', 'String', 0),
(2, 'Piano', 'Keyboard', 1),
(3, 'Drum Kit', 'Percussion', 0),
(4, 'Violin', 'String', 1),
(5, 'Flute', 'Wind', 0),
(6, 'Saxophone', 'Wind', 1),
(7, 'Trumpet', 'Brass', 0),
(8, 'Clarinet', 'Woodwind', 1),
(9, 'Trombone', 'Brass', 0),
(10, 'Cello', 'String', 1);

INSERT INTO rates (id, instrumentID, rate) VALUES
(1, 1, 15),
(2, 2, 50),
(3, 3, 20),
(4, 4, 25),
(5, 5, 10),
(6, 6, 30),
(7, 7, 35),
(8, 8, 28),
(9, 9, 32),
(10, 10, 40);

INSERT INTO locations (id, street, city, state, zip) VALUES
(1, '123 Oak St', 'Evanston', 'IL', '60201'),
(2, '456 Maple Ave', 'Oak Park', 'IL', '60301'),
(3, '789 Pine Blvd', 'Naperville', 'IL', '60540'),
(4, '101 Elm Dr', 'Arlington Heights', 'IL', '60004');

INSERT INTO lessons (id, locationID, teacherID, lesson_date, lesson_time, instrument, max_students, description, num_hours)
VALUES
(1, 1, 1, '2024-07-20', '15:00:00', 'Piano', 5, 'Beginner class', 1.5),
(2, 2, 2, '2024-07-21', '14:30:00', 'Guitar', 4, 'Intermediate class', 2.0),
(3, 3, 3, '2024-07-22', '10:00:00', 'Violin', 3, 'Advanced class', 1.5),
(4, 4, 4, '2024-07-23', '11:00:00', 'Drums', 6, 'Beginner class', 2.0),
(5, 1, 5, '2024-07-24', '16:30:00', 'Flute', 4, 'Intermediate class', 1.5),
(6, 2, 6, '2024-07-25', '13:00:00', 'Saxophone', 5, 'Beginner class', 2.0),
(7, 3, 7, '2024-07-26', '12:00:00', 'Trumpet', 3, 'Advanced class', 1.5),
(8, 4, 8, '2024-07-27', '14:00:00', 'Cello', 4, 'Intermediate class', 2.0),
(9, 1, 9, '2024-07-28', '15:30:00', 'Clarinet', 5, 'Beginner class', 1.5),
(10, 2, 10, '2024-07-29', '11:30:00', 'Keyboard', 3, 'Advanced class', 2.0);

INSERT INTO teachers (id, fname, lname, phone) VALUES
(1, 'Alice', 'Brown', 1234567891),
(2, 'Bob', 'Green', 2345678902),
(3, 'Carol', 'White', 3456789013),
(4, 'David', 'Black', 4567890124),
(5, 'Eve', 'Gray', 5678901235),
(6, 'Frank', 'Yellow', 6789012346),
(7, 'Grace', 'Purple', 7890123457),
(8, 'Hank', 'Orange', 8901234568),
(9, 'Ivy', 'Pink', 9012345679),
(10, 'Jack', 'Blue', 1023456780);


INSERT INTO freelances (tutorID, rate, company, fulltime, teacherID) VALUES
(1, 30, 'Music Academy', 1, 1),
(2, 25, 'Harmony School', 0, 2),
(3, 35, 'Sound Studio', 1, 3),
(4, 20, 'Melody Center', 0, 4),
(5, 27, 'Scale School', 0, 5);


INSERT INTO employees (tutorID, rate, teacherID) VALUES
(1, 45, 6),
(2, 50, 7),
(3, 55, 8),
(4, 40, 9),
(5, 60, 10);

INSERT INTO specializations (id, spec_name) VALUES
(1, 'Piano'),
(2, 'Guitar'),
(3, 'Drum Kit'),
(4, 'Violin'),
(5, 'Flute'),
(6, 'Saxophone'),
(7, 'Trumpet'),
(8, 'Clarinet'),
(9, 'Trombone'),
(10, 'Cello');

INSERT INTO teacher_specializations (teacherID, specID) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);


INSERT INTO student_lessons (studentID, lessonID, present) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1);


INSERT INTO student_instruments (studentID, instrumentID) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(1, 2);


INSERT INTO rentals (date_rented, return_date, rateID, studentID, instrumentID) VALUES
('2024-01-10', '2024-01-20', 1, 1, 1),
('2024-02-15', '2024-03-15', 2, 2, 2),
('2024-03-20', '2024-04-10', 3, 3, 3),
('2024-04-05', '2024-04-25', 4, 4, 4),
('2024-05-12', '2024-06-01', 5, 5, 5),
('2024-06-25', '2024-07-15', 6, 6, 6),
('2023-07-30', '2024-08-20', 7, 7, 7),
('2023-08-15', '2024-09-05', 8, 8, 8),
('2023-09-10', '2024-09-30', 9, 9, 9),
('2023-10-01', '2024-10-20', 10, 10, 10),
('2024-07-20', '2024-10-31', 2, 1, 2);


