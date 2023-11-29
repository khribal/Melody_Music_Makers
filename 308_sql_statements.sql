Drop table if exists lesson_info;
Drop table if exists rental_log;
Drop table if exists teacher_phone;
Drop table if exists teacher_instrument;
Drop table if exists student_instrument;
Drop table if exists student_phone;
Drop table if exists employee;
Drop table if exists freelance;
Drop table if exists instrument;
Drop table if exists lesson;
Drop table if exists teacher;
Drop table if exists student;


create table student (
    id INT NOT NULL,
    fname VARCHAR(50),
    lname VARCHAR(50),
    dob DATE,
    primary key (id)
) ENGINE=INNODB;


insert into student (id, fname, lname, dob) values (1, 'Myrtia', 'Skermer', '2022-06-18');
insert into student (id, fname, lname, dob) values (2, 'Myrtle', 'Paike', '2022-12-08');
insert into student (id, fname, lname, dob) values (3, 'Ab', 'Astlett', '2022-11-25');
insert into student (id, fname, lname, dob) values (4, 'Stefano', 'Caberas', '2023-03-15');
insert into student (id, fname, lname, dob) values (5, 'Bogey', 'Guilaem', '2022-07-06');
insert into student (id, fname, lname, dob) values (6, 'Mehetabel', 'Marran', '2022-08-05');
insert into student (id, fname, lname, dob) values (7, 'Joseito', 'Pethick', '2022-09-06');
insert into student (id, fname, lname, dob) values (8, 'Patty', 'Snazel', '2022-07-03');
insert into student (id, fname, lname, dob) values (9, 'Rivy', 'Marchelli', '2022-08-07');
insert into student (id, fname, lname, dob) values (10, 'Zsazsa', 'Tassell', '2023-01-07');
insert into student (id, fname, lname, dob) values (11, 'Ab', 'Hopfer', '2022-10-01');
insert into student (id, fname, lname, dob) values (12, 'Maxine', 'McMennum', '2023-01-02');
insert into student (id, fname, lname, dob) values (13, 'Lise', 'Burridge', '2022-07-04');
insert into student (id, fname, lname, dob) values (14, 'Ailbert', 'Kondratowicz', '2022-06-08');
insert into student (id, fname, lname, dob) values (15, 'Ariela', 'Fist', '2022-08-20');
insert into student (id, fname, lname, dob) values (16, 'Rickie', 'Willox', '2022-04-16');
insert into student (id, fname, lname, dob) values (17, 'Erek', 'Sleit', '2022-07-27');
insert into student (id, fname, lname, dob) values (18, 'Alli', 'Waltho', '2022-12-07');
insert into student (id, fname, lname, dob) values (19, 'Margy', 'Tsar', '2022-11-08');
insert into student (id, fname, lname, dob) values (20, 'Colline', 'Leile', '2022-07-22');
insert into student (id, fname, lname, dob) values (21, 'Koenraad', 'Sweetland', '2023-01-23');
insert into student (id, fname, lname, dob) values (22, 'Sheelah', 'Shenton', '2022-04-06');
insert into student (id, fname, lname, dob) values (23, 'Lee', 'Budge', '2023-01-03');
insert into student (id, fname, lname, dob) values (24, 'Bernhard', 'Anstey', '2022-06-03');
insert into student (id, fname, lname, dob) values (25, 'Doyle', 'Stores', '2022-04-27');
insert into student (id, fname, lname, dob) values (26, 'Adeline', 'Eseler', '2023-03-10');
insert into student (id, fname, lname, dob) values (27, 'Eyde', 'Fealty', '2022-05-19');
insert into student (id, fname, lname, dob) values (28, 'Early', 'Hagger', '2023-02-08');
insert into student (id, fname, lname, dob) values (29, 'Gwynne', 'Chettle', '2023-01-10');
insert into student (id, fname, lname, dob) values (30, 'Blithe', 'Nutman', '2022-09-22');
insert into student (id, fname, lname, dob) values (31, 'Deana', 'Ambrogio', '2022-11-04');
insert into student (id, fname, lname, dob) values (32, 'Andy', 'Yockney', '2023-02-12');
insert into student (id, fname, lname, dob) values (33, 'Kristan', 'Johnsey', '2022-08-06');
insert into student (id, fname, lname, dob) values (34, 'Charin', 'O''Kinedy', '2022-06-29');
insert into student (id, fname, lname, dob) values (35, 'Ryan', 'Riddich', '2023-02-27');
insert into student (id, fname, lname, dob) values (36, 'Yolane', 'Godleman', '2023-03-08');
insert into student (id, fname, lname, dob) values (37, 'Ettie', 'Augustine', '2022-08-25');
insert into student (id, fname, lname, dob) values (38, 'Bevin', 'Raraty', '2023-02-24');
insert into student (id, fname, lname, dob) values (39, 'Algernon', 'Dickerson', '2022-12-05');
insert into student (id, fname, lname, dob) values (40, 'Artemas', 'Finlay', '2022-08-08');
insert into student (id, fname, lname, dob) values (41, 'Kasey', 'Mollindinia', '2022-12-12');
insert into student (id, fname, lname, dob) values (42, 'Marcela', 'Sherlaw', '2023-03-06');
insert into student (id, fname, lname, dob) values (43, 'Englebert', 'Kulas', '2022-09-29');
insert into student (id, fname, lname, dob) values (44, 'Gregoor', 'Marchi', '2022-07-07');
insert into student (id, fname, lname, dob) values (45, 'Kiley', 'Pashba', '2022-08-19');
insert into student (id, fname, lname, dob) values (46, 'Hillary', 'Eves', '2023-03-01');
insert into student (id, fname, lname, dob) values (47, 'Ardyth', 'Eastbury', '2022-08-03');
insert into student (id, fname, lname, dob) values (48, 'Sergio', 'Galvin', '2023-03-23');
insert into student (id, fname, lname, dob) values (49, 'Hussein', 'Hatherall', '2022-06-22');
insert into student (id, fname, lname, dob) values (50, 'Dolph', 'Marlen', '2023-01-16');







create table student_phone (
    studentID INT,
    phone VARCHAR(50),
    foreign key (studentID) references student(id)
)ENGINE=INNODB;

insert into student_phone (studentID, phone) values (1, '947-413-4264');
insert into student_phone (studentID, phone) values (2, '182-883-9530');
insert into student_phone (studentID, phone) values (3, '289-610-4607');
insert into student_phone (studentID, phone) values (4, '167-876-8743');
insert into student_phone (studentID, phone) values (5, '808-731-2080');
insert into student_phone (studentID, phone) values (6, '914-887-0163');
insert into student_phone (studentID, phone) values (7, '915-402-3144');
insert into student_phone (studentID, phone) values (8, '904-546-7883');
insert into student_phone (studentID, phone) values (9, '876-858-6951');
insert into student_phone (studentID, phone) values (10, '191-558-4207');
insert into student_phone (studentID, phone) values (11, '302-280-7439');
insert into student_phone (studentID, phone) values (12, '628-666-8713');
insert into student_phone (studentID, phone) values (13, '982-919-2561');
insert into student_phone (studentID, phone) values (14, '621-686-3329');
insert into student_phone (studentID, phone) values (15, '683-267-4852');
insert into student_phone (studentID, phone) values (16, '217-115-1846');
insert into student_phone (studentID, phone) values (17, '170-187-5541');
insert into student_phone (studentID, phone) values (18, '255-331-2273');
insert into student_phone (studentID, phone) values (19, '654-115-8858');
insert into student_phone (studentID, phone) values (20, '460-646-3723');
insert into student_phone (studentID, phone) values (21, '730-445-5452');
insert into student_phone (studentID, phone) values (22, '278-597-1059');
insert into student_phone (studentID, phone) values (23, '274-794-1190');
insert into student_phone (studentID, phone) values (24, '379-323-9242');
insert into student_phone (studentID, phone) values (25, '210-319-4906');
insert into student_phone (studentID, phone) values (26, '479-832-9871');
insert into student_phone (studentID, phone) values (27, '528-391-1071');
insert into student_phone (studentID, phone) values (28, '604-384-7103');
insert into student_phone (studentID, phone) values (29, '711-587-2556');
insert into student_phone (studentID, phone) values (30, '390-316-5593');
insert into student_phone (studentID, phone) values (31, '536-127-6447');
insert into student_phone (studentID, phone) values (32, '109-960-7237');
insert into student_phone (studentID, phone) values (33, '253-441-3773');
insert into student_phone (studentID, phone) values (34, '682-543-8039');
insert into student_phone (studentID, phone) values (35, '383-998-3793');
insert into student_phone (studentID, phone) values (36, '612-241-8191');
insert into student_phone (studentID, phone) values (37, '215-493-6141');
insert into student_phone (studentID, phone) values (38, '990-668-1023');
insert into student_phone (studentID, phone) values (39, '500-229-9042');
insert into student_phone (studentID, phone) values (40, '720-412-8312');
insert into student_phone (studentID, phone) values (41, '717-210-4433');
insert into student_phone (studentID, phone) values (42, '867-127-0439');
insert into student_phone (studentID, phone) values (43, '917-487-6343');
insert into student_phone (studentID, phone) values (44, '886-459-4580');
insert into student_phone (studentID, phone) values (45, '757-642-9939');
insert into student_phone (studentID, phone) values (46, '839-497-9032');
insert into student_phone (studentID, phone) values (47, '771-895-1712');
insert into student_phone (studentID, phone) values (48, '881-707-1209');
insert into student_phone (studentID, phone) values (49, '876-977-5141');
insert into student_phone (studentID, phone) values (50, '879-807-9706');

create table teacher (
    id INT,
    fname VARCHAR(50),
    lname VARCHAR(50),
    primary key (id)
)ENGINE=INNODB;
insert into teacher (id, fname, lname) values (1, 'Jacintha', 'Houlden');
insert into teacher (id, fname, lname) values (2, 'Riane', 'Slowey');
insert into teacher (id, fname, lname) values (3, 'Charisse', 'Kidder');
insert into teacher (id, fname, lname) values (4, 'Bernie', 'Grice');
insert into teacher (id, fname, lname) values (5, 'Honor', 'Behling');
insert into teacher (id, fname, lname) values (6, 'Nicholle', 'Renshall');
insert into teacher (id, fname, lname) values (7, 'Armando', 'McDonnell');
insert into teacher (id, fname, lname) values (8, 'Moyra', 'Jime');
insert into teacher (id, fname, lname) values (9, 'Claudio', 'Keymar');
insert into teacher (id, fname, lname) values (10, 'Enrico', 'Grgic');
insert into teacher (id, fname, lname) values (11, 'Ron', 'Manford');
insert into teacher (id, fname, lname) values (12, 'Link', 'Oolahan');
insert into teacher (id, fname, lname) values (13, 'Cathyleen', 'Skerratt');
insert into teacher (id, fname, lname) values (14, 'Asia', 'Wilkisson');
insert into teacher (id, fname, lname) values (15, 'Tiffani', 'Petruk');
insert into teacher (id, fname, lname) values (16, 'Ferrel', 'Moreside');
insert into teacher (id, fname, lname) values (17, 'Theo', 'Tyhurst');
insert into teacher (id, fname, lname) values (18, 'Romola', 'Camfield');
insert into teacher (id, fname, lname) values (19, 'Annabel', 'Clara');
insert into teacher (id, fname, lname) values (20, 'Anthia', 'Ladley');
insert into teacher (id, fname, lname) values (21, 'Anestassia', 'Cossons');
insert into teacher (id, fname, lname) values (22, 'Tawsha', 'Ties');
insert into teacher (id, fname, lname) values (23, 'Valentino', 'Casford');
insert into teacher (id, fname, lname) values (24, 'Inga', 'O''Calleran');
insert into teacher (id, fname, lname) values (25, 'Alano', 'McRory');
insert into teacher (id, fname, lname) values (26, 'Nikolai', 'Ferrarotti');
insert into teacher (id, fname, lname) values (27, 'Herschel', 'Prime');
insert into teacher (id, fname, lname) values (28, 'Grier', 'Picott');
insert into teacher (id, fname, lname) values (29, 'Whitby', 'Filippazzo');
insert into teacher (id, fname, lname) values (30, 'Pavlov', 'Sambles');
insert into teacher (id, fname, lname) values (31, 'Tybie', 'Longmuir');
insert into teacher (id, fname, lname) values (32, 'Fax', 'Althrop');
insert into teacher (id, fname, lname) values (33, 'Kelsey', 'Bretelle');
insert into teacher (id, fname, lname) values (34, 'Tiffany', 'Connor');
insert into teacher (id, fname, lname) values (35, 'Dede', 'Ormes');
insert into teacher (id, fname, lname) values (36, 'Lurleen', 'Haw');
insert into teacher (id, fname, lname) values (37, 'Livvyy', 'Artin');
insert into teacher (id, fname, lname) values (38, 'Marcus', 'Weddeburn');
insert into teacher (id, fname, lname) values (39, 'Serge', 'Chaundy');
insert into teacher (id, fname, lname) values (40, 'Noella', 'Bussens');
insert into teacher (id, fname, lname) values (41, 'Daffi', 'Hedon');
insert into teacher (id, fname, lname) values (42, 'Drucy', 'Kippen');
insert into teacher (id, fname, lname) values (43, 'Arielle', 'Graysmark');
insert into teacher (id, fname, lname) values (44, 'Calli', 'Codman');
insert into teacher (id, fname, lname) values (45, 'Cortie', 'Bindley');
insert into teacher (id, fname, lname) values (46, 'Ferdy', 'Perrins');
insert into teacher (id, fname, lname) values (47, 'Lura', 'Bensusan');
insert into teacher (id, fname, lname) values (48, 'Brigg', 'Pollak');
insert into teacher (id, fname, lname) values (49, 'Aluin', 'Fidelli');
insert into teacher (id, fname, lname) values (50, 'Jacquelynn', 'Cradey');

create table lesson (
    id INT,
    lesson_location VARCHAR(50),
    instrument varchar(20),
    max_students INT,
    description VARCHAR(50),
    amt_due DECIMAL(5,2),
    studentID INT,
    tutorID INT,
    primary key (id),
    foreign key (studentID) references student(id),
    foreign key (tutorID) references teacher(id)
)ENGINE=INNODB;


insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (1, '489 Sutherland Alley', 'Piano', 6, 'Other Specialty Stores', 16.84, 1, 1);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (2, '29 Grasskamp Terrace', 'Violin', 10, 'Farming/Seeds/Milling', 81.79, 2, 2);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (3, '624 Scofield Circle', 'Cello', 4, 'Military/Government/Technical', 27.67, 3, 3);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (4, '373 Fairview Point', 'Piano', 3, 'Major Banks', 40.28, 4, 4);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (5, '51139 Crowley Pass', 'Guitar', 8, 'Professional Services', 57.88, 5, 5);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (6, '15 Linden Parkway', 'Piano', 1, 'Major Pharmaceuticals', 5.23, 6, 6);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (7, '6357 Talmadge Way', 'Guitar', 4, 'Telecommunications Equipment', 34.89, 7, 7);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (8, '70479 Packers Way', 'Piano', 2, 'Major Banks', 67.66, 8, 8);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (9, '17 Hermina Avenue', 'Guitar', 8, 'Finance: Consumer Services', 83.11, 9, 9);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (10, '510 Nancy Court', 'Piano', 4, 'Biotechnology: Electromedical & Electrotherapeutic Apparatus', 56.34, 10, 10);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (11, '20 Barnett Terrace', 'Violin', 5, 'Major Pharmaceuticals', 65.96, 11, 11);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (12, '038 Grim Circle', 'Violin', 9, 'Major Banks', 25.09, 12, 12);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (13, '5 Weeping Birch Alley', 'Cello', 6, 'Major Pharmaceuticals', 69.92, 13, 13);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (14, '59 Springs Circle', 'Guitar', 10, 'n/a', 12.29, 14, 14);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (15, '7363 Iowa Drive', 'Cello', 10, 'Containers/Packaging', 96.27, 15, 15);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (16, '3197 Manley Way', 'Cello', 7, 'Major Pharmaceuticals', 29.78, 16, 16);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (17, '47483 Becker Way', 'Piano', 3, 'Real Estate Investment Trusts', 44.73, 17, 17);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (18, '5890 Banding Alley', 'Violin', 2, 'n/a', 89.74, 18, 18);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (19, '64318 Prairieview Point', 'Piano', 9, 'Environmental Services', 43.99, 19, 19);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (20, '8 Karstens Trail', 'Violin', 8, 'Investment Bankers/Brokers/Service', 2.19, 20, 20);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (21, '3 Lakeland Terrace', 'Flute', 7, 'Electric Utilities: Central', 85.11, 21, 21);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (22, '433 Schlimgen Street', 'Piano', 2, 'Steel/Iron Ore', 85.86, 22, 22);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (23, '23573 Boyd Trail','Cello', 4, 'Major Pharmaceuticals', 68.11, 23, 23);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (24, '4048 Vidon Alley', 'Guitar', 9, 'Computer Software: Prepackaged Software', 43.61, 24, 24);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (25, '1062 Miller Alley', 'Piano', 9, 'n/a', 4.85, 25, 25);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (26, '6018 Burning Wood Way', 'Violin', 2, 'n/a', 54.55, 26, 26);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (27, '1 Evergreen Point', 'Violin', 10, 'Major Pharmaceuticals', 25.86, 27, 27);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (28, '1942 Sullivan Hill','Violin', 5, 'Major Banks', 85.0, 28, 28);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (29, '4 Butternut Drive', 'Guitar', 1, 'Newspapers/Magazines', 18.32, 29, 29);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (30, '587 Hoepker Park', 'Flute', 8, 'Railroads', 79.42, 30, 30);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (31, '6247 Steensland Parkway', 3, 3, 'Telecommunications Equipment', 89.37, 31, 31);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (32, '2 Green Center', 'Guitar', 6, 'Oil & Gas Production', 49.37, 32, 32);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (33, '9801 Atwood Circle', 'Guitar', 5, 'Major Banks', 95.99, 33, 33);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (34, '7155 Rieder Drive', 'Violin', 7, 'n/a', 67.18, 34, 34);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (35, '65 Northview Park', 'Cello', 6, 'Major Pharmaceuticals', 94.77, 35, 35);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (36, '95108 Grayhawk Court', 'Guitar', 7, 'Real Estate Investment Trusts', 95.3, 36, 36);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (37, '0863 Northview Pass','Violin', 9, 'n/a', 88.99, 37, 37);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (38, '4871 Carioca Park', 'Cello', 6, 'Marine Transportation', 13.27, 38, 38);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (39, '2518 Bultman Lane', 'Guitar', 1, 'n/a', 57.8, 39, 39);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (40, '826 Schiller Parkway', 'Cello', 1, 'Electronic Components', 8.36, 40, 40);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (41, '5 Tony Way', 'Cello', 5, 'Major Banks', 9.23, 41, 41);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (42, '100 Mifflin Terrace', 'Cello', 9, 'Real Estate Investment Trusts', 44.0, 42, 42);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (43, '4952 Towne Lane', 'Guitar', 3, 'Specialty Chemicals', 42.29, 43, 43);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (44, '99 Leroy Circle','Guitar', 8, 'Professional Services', 88.02, 44, 44);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (45, '999 Debra Crossing', 'Violin', 7, 'Building Products', 94.36, 45, 45);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (46, '127 Rockefeller Park', 'Violin', 5, 'Recreational Products/Toys', 5.61, 46, 46);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (47, '31065 Melody Drive', 'Cello', 5, 'Major Banks', 6.3, 47, 47);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (48, '21735 Farragut Hill', 'Cello', 1, 'n/a', 82.72, 48, 48);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (49, '980 Gateway Park', 'Cello', 5, 'Major Banks', 89.88, 49, 49);
insert into lesson (id, lesson_location, instrument, max_students, description, amt_due, studentID, tutorID) values (50, '9793 Crownhardt Junction', 'Violin', 8, 'n/a', 4.74, 50, 50);






create table instrument (
    id INT,
    instrument_type varchar(20),
    rented TINYINT,
    PRIMARY KEY (id)
)ENGINE=INNODB;




insert into instrument (id, instrument_type, rented) values (1, 'Cello', 1);
insert into instrument (id, instrument_type, rented) values (2, 'Saxophone', 0);
insert into instrument (id, instrument_type, rented) values (3, 'Cello', 1);
insert into instrument (id, instrument_type, rented) values (4,'Cello', 1);
insert into instrument (id, instrument_type, rented) values (5, 'Guitar', 1);
insert into instrument (id, instrument_type, rented) values (6, 'Flute', 0);
insert into instrument (id, instrument_type, rented) values (7, 'Violin', 0);
insert into instrument (id, instrument_type, rented) values (8, 'Violin', 1);
insert into instrument (id, instrument_type, rented) values (9, 'Saxophone', 0);
insert into instrument (id, instrument_type, rented) values (10, 'Piano', 0);
insert into instrument (id, instrument_type, rented) values (11, 'Flute', 1);
insert into instrument (id, instrument_type, rented) values (12, 'Violin', 1);
insert into instrument (id, instrument_type, rented) values (13, 'Saxophone', 1);
insert into instrument (id, instrument_type, rented) values (14, 'Guitar', 1);
insert into instrument (id, instrument_type, rented) values (15, 'Piano', 0);
insert into instrument (id, instrument_type, rented) values (16, 'Flute', 0);
insert into instrument (id, instrument_type, rented) values (17, 'Flute', 0);
insert into instrument (id, instrument_type, rented) values (18, 'Cello', 1);
insert into instrument (id, instrument_type, rented) values (19, 'Cello', 0);
insert into instrument (id, instrument_type, rented) values (20, 'Saxophone', 1);
insert into instrument (id, instrument_type, rented) values (21, 'Piano', 1);
insert into instrument (id, instrument_type, rented) values (22, 'Piano', 0);
insert into instrument (id, instrument_type, rented) values (23,'Saxophone', 1);
insert into instrument (id, instrument_type, rented) values (24, 'Flute', 1);
insert into instrument (id, instrument_type, rented) values (25, 'Guitar', 0);
insert into instrument (id, instrument_type, rented) values (26, 'Piano', 1);
insert into instrument (id, instrument_type, rented) values (27, 'Saxophone', 1);
insert into instrument (id, instrument_type, rented) values (28, 'Flute', 0);
insert into instrument (id, instrument_type, rented) values (29, 'Cello', 0);
insert into instrument (id, instrument_type, rented) values (30, 'Piano', 0);
insert into instrument (id, instrument_type, rented) values (31, 'Cello', 1);
insert into instrument (id, instrument_type, rented) values (32, 'Flute', 1);
insert into instrument (id, instrument_type, rented) values (33, 'Saxophone', 1);
insert into instrument (id, instrument_type, rented) values (34, 'Piano', 0);
insert into instrument (id, instrument_type, rented) values (35, 'Piano', 0);
insert into instrument (id, instrument_type, rented) values (36, 'Flute', 0);
insert into instrument (id, instrument_type, rented) values (37, 'Piano', 0);
insert into instrument (id, instrument_type, rented) values (38, 'Flute', 1);
insert into instrument (id, instrument_type, rented) values (39, 'Saxophone', 0);
insert into instrument (id, instrument_type, rented) values (40, 'Saxophone', 1);
insert into instrument (id, instrument_type, rented) values (41, 'Violin', 0);
insert into instrument (id, instrument_type, rented) values (42, 'Piano', 1);
insert into instrument (id, instrument_type, rented) values (43, 'Piano', 1);
insert into instrument (id, instrument_type, rented) values (44, 'Saxophone', 0);
insert into instrument (id, instrument_type, rented) values (45, 'Cello', 0);
insert into instrument (id, instrument_type, rented) values (46, 'Flute', 1);
insert into instrument (id, instrument_type, rented) values (47, 'Guitar', 1);
insert into instrument (id, instrument_type, rented) values (48, 'Violin', 1);
insert into instrument (id, instrument_type, rented) values (49, 'Guitar', 1);
insert into instrument (id, instrument_type, rented) values (50, 'Cello', 0);




create table student_instrument (
    studentID INT,
    instrumentID INT,
    Foreign Key (studentID) references student(id),
    foreign key (instrumentID) references instrument(id)
)ENGINE=INNODB;

insert into student_instrument (studentID, instrumentID) values (1, 1);
insert into student_instrument (studentID, instrumentID) values (2, 2);
insert into student_instrument (studentID, instrumentID) values (3, 3);
insert into student_instrument (studentID, instrumentID) values (4, 4);
insert into student_instrument (studentID, instrumentID) values (5, 5);
insert into student_instrument (studentID, instrumentID) values (6, 6);
insert into student_instrument (studentID, instrumentID) values (7, 7);
insert into student_instrument (studentID, instrumentID) values (8, 8);
insert into student_instrument (studentID, instrumentID) values (9, 9);
insert into student_instrument (studentID, instrumentID) values (10, 10);
insert into student_instrument (studentID, instrumentID) values (11, 11);
insert into student_instrument (studentID, instrumentID) values (12, 12);
insert into student_instrument (studentID, instrumentID) values (13, 13);
insert into student_instrument (studentID, instrumentID) values (14, 14);
insert into student_instrument (studentID, instrumentID) values (15, 15);
insert into student_instrument (studentID, instrumentID) values (16, 16);
insert into student_instrument (studentID, instrumentID) values (17, 17);
insert into student_instrument (studentID, instrumentID) values (18, 18);
insert into student_instrument (studentID, instrumentID) values (19, 19);
insert into student_instrument (studentID, instrumentID) values (20, 20);
insert into student_instrument (studentID, instrumentID) values (21, 21);
insert into student_instrument (studentID, instrumentID) values (22, 22);
insert into student_instrument (studentID, instrumentID) values (23, 23);
insert into student_instrument (studentID, instrumentID) values (24, 24);
insert into student_instrument (studentID, instrumentID) values (25, 25);
insert into student_instrument (studentID, instrumentID) values (26, 26);
insert into student_instrument (studentID, instrumentID) values (27, 27);
insert into student_instrument (studentID, instrumentID) values (28, 28);
insert into student_instrument (studentID, instrumentID) values (29, 29);
insert into student_instrument (studentID, instrumentID) values (30, 31);
insert into student_instrument (studentID, instrumentID) values (31, 32);
insert into student_instrument (studentID, instrumentID) values (32, 41);
insert into student_instrument (studentID, instrumentID) values (33, 30);
insert into student_instrument (studentID, instrumentID) values (34, 40);
insert into student_instrument (studentID, instrumentID) values (35, 48);
insert into student_instrument (studentID, instrumentID) values (36, 34);
insert into student_instrument (studentID, instrumentID) values (37, 33);
insert into student_instrument (studentID, instrumentID) values (38, 47);
insert into student_instrument (studentID, instrumentID) values (39, 39);
insert into student_instrument (studentID, instrumentID) values (40, 46);
insert into student_instrument (studentID, instrumentID) values (41, 49);
insert into student_instrument (studentID, instrumentID) values (42, 50);
insert into student_instrument (studentID, instrumentID) values (43, 36);
insert into student_instrument (studentID, instrumentID) values (44, 35);
insert into student_instrument (studentID, instrumentID) values (45, 43);
insert into student_instrument (studentID, instrumentID) values (46, 44);
insert into student_instrument (studentID, instrumentID) values (47, 42);
insert into student_instrument (studentID, instrumentID) values (48, 45);
insert into student_instrument (studentID, instrumentID) values (49, 37);
insert into student_instrument (studentID, instrumentID) values (50, 38);





create table teacher_phone (
    tutorID INT,
    phone VARCHAR(50),
    foreign key (tutorID) references teacher(id)
)ENGINE=INNODB;
insert into teacher_phone (tutorID, phone) values (1, '841-318-6421');
insert into teacher_phone (tutorID, phone) values (2, '452-428-5487');
insert into teacher_phone (tutorID, phone) values (3, '367-937-7753');
insert into teacher_phone (tutorID, phone) values (4, '795-826-8416');
insert into teacher_phone (tutorID, phone) values (5, '222-840-3975');
insert into teacher_phone (tutorID, phone) values (6, '767-674-6781');
insert into teacher_phone (tutorID, phone) values (7, '139-548-0623');
insert into teacher_phone (tutorID, phone) values (8, '403-193-7342');
insert into teacher_phone (tutorID, phone) values (9, '761-696-5755');
insert into teacher_phone (tutorID, phone) values (10, '175-498-3825');
insert into teacher_phone (tutorID, phone) values (11, '292-867-6127');
insert into teacher_phone (tutorID, phone) values (12, '482-340-4440');
insert into teacher_phone (tutorID, phone) values (13, '304-847-2698');
insert into teacher_phone (tutorID, phone) values (14, '525-670-4866');
insert into teacher_phone (tutorID, phone) values (15, '837-453-9987');
insert into teacher_phone (tutorID, phone) values (16, '160-774-7825');
insert into teacher_phone (tutorID, phone) values (17, '580-408-0083');
insert into teacher_phone (tutorID, phone) values (18, '906-869-2162');
insert into teacher_phone (tutorID, phone) values (19, '711-206-6078');
insert into teacher_phone (tutorID, phone) values (20, '640-100-1421');
insert into teacher_phone (tutorID, phone) values (21, '961-298-8783');
insert into teacher_phone (tutorID, phone) values (22, '920-361-3496');
insert into teacher_phone (tutorID, phone) values (23, '307-646-4744');
insert into teacher_phone (tutorID, phone) values (24, '195-584-9982');
insert into teacher_phone (tutorID, phone) values (25, '788-661-0684');
insert into teacher_phone (tutorID, phone) values (26, '771-817-5157');
insert into teacher_phone (tutorID, phone) values (27, '677-779-4355');
insert into teacher_phone (tutorID, phone) values (28, '468-995-6092');
insert into teacher_phone (tutorID, phone) values (29, '195-486-9394');
insert into teacher_phone (tutorID, phone) values (30, '215-215-3724');
insert into teacher_phone (tutorID, phone) values (31, '615-504-8968');
insert into teacher_phone (tutorID, phone) values (32, '422-726-5678');
insert into teacher_phone (tutorID, phone) values (33, '380-192-0481');
insert into teacher_phone (tutorID, phone) values (34, '553-323-7059');
insert into teacher_phone (tutorID, phone) values (35, '156-939-5547');
insert into teacher_phone (tutorID, phone) values (36, '231-585-5333');
insert into teacher_phone (tutorID, phone) values (37, '740-792-7873');
insert into teacher_phone (tutorID, phone) values (38, '425-562-8165');
insert into teacher_phone (tutorID, phone) values (39, '544-640-6113');
insert into teacher_phone (tutorID, phone) values (40, '855-743-2921');
insert into teacher_phone (tutorID, phone) values (41, '453-672-7080');
insert into teacher_phone (tutorID, phone) values (42, '155-544-9877');
insert into teacher_phone (tutorID, phone) values (43, '740-155-7549');
insert into teacher_phone (tutorID, phone) values (44, '846-561-3811');
insert into teacher_phone (tutorID, phone) values (45, '291-691-7898');
insert into teacher_phone (tutorID, phone) values (46, '935-437-8839');
insert into teacher_phone (tutorID, phone) values (47, '656-850-3583');
insert into teacher_phone (tutorID, phone) values (48, '529-823-2370');
insert into teacher_phone (tutorID, phone) values (49, '185-217-6231');
insert into teacher_phone (tutorID, phone) values (50, '261-540-3227');






create table teacher_instrument (
    tutorID INT,
    instrument INT,
    foreign key (tutorID) references teacher(id),
    foreign key (instrument) references instrument(id)
) ENGINE=INNODB;


insert into teacher_instrument (tutorID, instrument) values (1, 3);
insert into teacher_instrument (tutorID, instrument) values (2, 1);
insert into teacher_instrument (tutorID, instrument) values (3, 7);
insert into teacher_instrument (tutorID, instrument) values (4, 41);
insert into teacher_instrument (tutorID, instrument) values (5, 42);
insert into teacher_instrument (tutorID, instrument) values (6, 43);
insert into teacher_instrument (tutorID, instrument) values (7, 44);
insert into teacher_instrument (tutorID, instrument) values (8, 3);
insert into teacher_instrument (tutorID, instrument) values (9, 5);
insert into teacher_instrument (tutorID, instrument) values (10, 3);
insert into teacher_instrument (tutorID, instrument) values (11, 4);
insert into teacher_instrument (tutorID, instrument) values (12, 3);
insert into teacher_instrument (tutorID, instrument) values (13, 2);
insert into teacher_instrument (tutorID, instrument) values (14, 3);
insert into teacher_instrument (tutorID, instrument) values (15, 9);
insert into teacher_instrument (tutorID, instrument) values (16, 45);
insert into teacher_instrument (tutorID, instrument) values (17, 8);
insert into teacher_instrument (tutorID, instrument) values (18, 46);
insert into teacher_instrument (tutorID, instrument) values (19, 40);
insert into teacher_instrument (tutorID, instrument) values (20, 39);
insert into teacher_instrument (tutorID, instrument) values (21, 38);
insert into teacher_instrument (tutorID, instrument) values (22, 35);
insert into teacher_instrument (tutorID, instrument) values (23, 36);
insert into teacher_instrument (tutorID, instrument) values (24, 37);
insert into teacher_instrument (tutorID, instrument) values (25, 10);
insert into teacher_instrument (tutorID, instrument) values (26, 25);
insert into teacher_instrument (tutorID, instrument) values (27, 11);
insert into teacher_instrument (tutorID, instrument) values (28, 24);
insert into teacher_instrument (tutorID, instrument) values (29, 26);
insert into teacher_instrument (tutorID, instrument) values (30, 12);
insert into teacher_instrument (tutorID, instrument) values (31, 17);
insert into teacher_instrument (tutorID, instrument) values (32, 18);
insert into teacher_instrument (tutorID, instrument) values (33, 19);
insert into teacher_instrument (tutorID, instrument) values (34, 33);
insert into teacher_instrument (tutorID, instrument) values (35, 16);
insert into teacher_instrument (tutorID, instrument) values (36, 20);
insert into teacher_instrument (tutorID, instrument) values (37, 21);
insert into teacher_instrument (tutorID, instrument) values (38, 22);
insert into teacher_instrument (tutorID, instrument) values (39, 15);
insert into teacher_instrument (tutorID, instrument) values (40, 13);
insert into teacher_instrument (tutorID, instrument) values (41, 23);
insert into teacher_instrument (tutorID, instrument) values (42, 3);
insert into teacher_instrument (tutorID, instrument) values (43, 14);
insert into teacher_instrument (tutorID, instrument) values (44, 34);
insert into teacher_instrument (tutorID, instrument) values (45, 27);
insert into teacher_instrument (tutorID, instrument) values (46, 28);
insert into teacher_instrument (tutorID, instrument) values (47, 29);
insert into teacher_instrument (tutorID, instrument) values (48, 30);
insert into teacher_instrument (tutorID, instrument) values (49, 31);
insert into teacher_instrument (tutorID, instrument) values (50, 32);









create table freelance (
    tutorID INT,
    rate DECIMAL(4,2),
    foreign key (tutorID) references teacher(id)
)ENGINE=INNODB;

insert into freelance (tutorID, rate) values (26, 15.9);
insert into freelance (tutorID, rate) values (27, 18.14);
insert into freelance (tutorID, rate) values (28, 27.23);
insert into freelance (tutorID, rate) values (29, 28.27);
insert into freelance (tutorID, rate) values (30, 18.29);
insert into freelance (tutorID, rate) values (31, 22.82);
insert into freelance (tutorID, rate) values (32, 15.4);
insert into freelance (tutorID, rate) values (33, 17.8);
insert into freelance (tutorID, rate) values (34, 10.64);
insert into freelance (tutorID, rate) values (35, 16.5);
insert into freelance (tutorID, rate) values (36, 17.58);
insert into freelance (tutorID, rate) values (37, 14.62);
insert into freelance (tutorID, rate) values (38, 22.1);
insert into freelance (tutorID, rate) values (39, 27.3);
insert into freelance (tutorID, rate) values (40, 25.75);
insert into freelance (tutorID, rate) values (41, 23.55);
insert into freelance (tutorID, rate) values (42, 16.97);
insert into freelance (tutorID, rate) values (43, 23.19);
insert into freelance (tutorID, rate) values (44, 20.22);
insert into freelance (tutorID, rate) values (45, 19.8);
insert into freelance (tutorID, rate) values (46, 10.83);
insert into freelance (tutorID, rate) values (47, 18.31);
insert into freelance (tutorID, rate) values (48, 22.66);
insert into freelance (tutorID, rate) values (49, 24.11);
insert into freelance (tutorID, rate) values (50, 13.81);



create table employee (
    tutorID INT,
    salary INT,
    foreign key (tutorID) references teacher(id)
)ENGINE=INNODB;
insert into employee (tutorID, salary) values (1, 33012);
insert into employee (tutorID, salary) values (2, 29434);
insert into employee (tutorID, salary) values (3, 28106);
insert into employee (tutorID, salary) values (4, 32213);
insert into employee (tutorID, salary) values (5, 39673);
insert into employee (tutorID, salary) values (6, 36713);
insert into employee (tutorID, salary) values (7, 33513);
insert into employee (tutorID, salary) values (8, 31010);
insert into employee (tutorID, salary) values (9, 33841);
insert into employee (tutorID, salary) values (10, 38880);
insert into employee (tutorID, salary) values (11, 22749);
insert into employee (tutorID, salary) values (12, 30666);
insert into employee (tutorID, salary) values (13, 37738);
insert into employee (tutorID, salary) values (14, 33388);
insert into employee (tutorID, salary) values (15, 28187);
insert into employee (tutorID, salary) values (16, 27246);
insert into employee (tutorID, salary) values (17, 27286);
insert into employee (tutorID, salary) values (18, 23810);
insert into employee (tutorID, salary) values (19, 23787);
insert into employee (tutorID, salary) values (20, 25638);
insert into employee (tutorID, salary) values (21, 34758);
insert into employee (tutorID, salary) values (22, 38405);
insert into employee (tutorID, salary) values (23, 39113);
insert into employee (tutorID, salary) values (24, 30442);
insert into employee (tutorID, salary) values (25, 28988);






create table lesson_info (
    date DATE,
    time_start VARCHAR(50),
    time_end VARCHAR(50),
    amt_paid DECIMAL(5,2),
    studentID INT,
    lessonID INT,
    FOREIGN KEY (studentID) REFERENCES student(id),
    FOREIGN KEY (lessonID) REFERENCES lesson(id)
)ENGINE=INNODB;
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-01-08', '7:54 AM', '5:38 PM', 80.7, 1, 1);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-11-19', '7:59 AM', '7:22 PM', 22.12, 2, 2);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-11-09', '7:40 AM', '7:11 PM', 95.59, 3, 3);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-01-26', '6:07 AM', '6:47 PM', 6.01, 4, 4);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-05-27', '7:10 AM', '6:31 PM', 33.63, 5, 5);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-11-02', '6:01 AM', '6:51 PM', 96.11, 6, 6);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-05-12', '7:53 AM', '6:45 PM', 33.5, 7, 7);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-06-29', '7:45 AM', '6:28 PM', 52.13, 8, 8);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-08-17', '6:22 AM', '7:55 PM', 77.98, 9, 9);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-07-06', '6:29 AM', '7:22 PM', 68.25, 10, 10);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-05-11', '7:55 AM', '7:38 PM', 47.09, 11, 11);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-09-18', '6:11 AM', '5:26 PM', 16.47, 12, 12);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-08-30', '7:47 AM', '5:48 PM', 94.24, 13, 13);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-01-13', '6:47 AM', '5:42 PM', 94.19, 14, 14);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-01-30', '7:11 AM', '7:54 PM', 26.68, 15, 15);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-09-14', '7:00 AM', '7:57 PM', 87.62, 16, 16);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-05-04', '7:39 AM', '5:14 PM', 89.41, 17, 17);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-02-26', '6:44 AM', '7:58 PM', 98.8, 18, 18);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-09-15', '7:36 AM', '6:36 PM', 61.3, 19, 19);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-05-21', '7:57 AM', '5:24 PM', 52.27, 20, 20);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-01-04', '6:28 AM', '5:26 PM', 54.87, 21, 21);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-05-23', '6:35 AM', '5:38 PM', 92.73, 22, 22);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-06-18', '6:41 AM', '6:06 PM', 88.67, 23, 23);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-08-05', '7:24 AM', '5:57 PM', 53.71, 24, 24);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-03-17', '7:47 AM', '7:29 PM', 43.38, 25, 25);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-08-19', '7:27 AM', '6:18 PM', 28.72, 26, 26);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-12-06', '7:04 AM', '6:33 PM', 54.23, 27, 27);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-01-26', '6:28 AM', '6:05 PM', 42.92, 28, 28);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-07-14', '6:46 AM', '6:40 PM', 9.1, 29, 29);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-01-18', '6:39 AM', '6:27 PM', 67.77, 30, 30);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-11-19', '6:31 AM', '7:27 PM', 20.49, 31, 31);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-07-11', '6:15 AM', '6:30 PM', 16.37, 32, 32);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-10-19', '6:46 AM', '5:51 PM', 28.92, 33, 33);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-05-26', '6:12 AM', '6:18 PM', 74.98, 34, 34);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-02-14', '7:33 AM', '6:18 PM', 31.46, 35, 35);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-08-18', '7:39 AM', '6:13 PM', 41.05, 36, 36);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-01-23', '7:34 AM', '7:09 PM', 90.0, 37, 37);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-05-22', '6:25 AM', '6:01 PM', 52.51, 38, 38);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-09-02', '6:09 AM', '7:59 PM', 8.99, 39, 39);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-11-27', '6:26 AM', '6:16 PM', 2.82, 40, 40);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-09-28', '7:34 AM', '6:30 PM', 46.62, 41, 41);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-07-26', '7:53 AM', '7:00 PM', 11.06, 42, 42);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-10-23', '7:46 AM', '6:42 PM', 81.34, 43, 43);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-11-07', '7:01 AM', '6:11 PM', 62.37, 44, 44);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-08-17', '7:15 AM', '7:23 PM', 17.26, 45, 45);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-12-04', '6:07 AM', '5:28 PM', 34.97, 46, 46);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-10-23', '7:20 AM', '7:47 PM', 84.41, 47, 47);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-10-25', '6:54 AM', '6:21 PM', 13.58, 48, 48);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-07-08', '6:55 AM', '7:06 PM', 48.48, 49, 49);
insert into lesson_info (date, time_start, time_end, amt_paid, studentID, lessonID) values ('1990-06-09', '6:20 AM', '7:59 PM', 79.91, 50, 50);





create table rental_log (
    date_rented DATE,
    date_returned DATE,
    amt_paid DECIMAL(5,2),
    instrumentID INT, 
    studentID INT, 
    FOREIGN KEY (studentID) REFERENCES student(id),
    FOREIGN KEY (instrumentID) REFERENCES instrument(id)
)ENGINE=INNODB;


insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-01-17', '2013-07-02', 85.18, 1, 1);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-01-14', '2000-12-30', 77.34, 2, 2);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-01-31', '2012-03-16', 6.57, 3, 3);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-11-19', '2011-10-27', 17.44, 4, 4);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-08-14', '2014-06-26', 3.14, 5, 5);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-09-29', '2000-05-22', 42.06, 6, 6);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-06-26', '2002-04-26', 29.78, 7, 7);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-07-30', '2011-02-07', 14.1, 8, 8);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-01-14', '2006-05-06', 31.99, 9, 9);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-03-18', '2002-11-04', 22.57, 10, 10);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-03-05', '2005-09-30', 21.34, 11, 11);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-08-10', '2006-05-03', 21.47, 12, 12);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-12-30', '2006-01-26', 90.38, 13, 13);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-09-26', '2003-05-12', 89.23, 14, 14);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-02-07', '2013-11-17', 69.48, 15, 15);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-03-11', '2014-01-21', 77.92, 16, 16);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-12-20', '2000-07-03', 27.55, 17, 17);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-02-11', '2003-12-18', 92.63, 18, 18);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-01-21', '2013-11-02', 76.53, 19, 19);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-12-31', '2002-04-24', 34.83, 20, 20);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-11-09', '2002-02-12', 67.4, 21, 21);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-05-11', '2005-03-18', 18.73, 22, 22);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-06-01', '2011-02-15', 58.74, 23, 23);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-12-10', '2013-08-09', 57.52, 24, 24);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-03-08', '2003-10-10', 31.96, 25, 25);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-01-21', '2006-07-22', 70.3, 26, 26);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-11-03', '2005-01-01', 80.07, 27, 27);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-03-02', '2004-11-04', 16.3, 28, 28);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-07-21', '2014-02-12', 56.78, 29, 29);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-03-06', '2010-06-08', 66.18, 30, 30);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-08-17', '2009-06-25', 70.64, 31, 31);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-11-28', '2000-11-02', 61.25, 32, 32);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-04-23', '2001-09-04', 87.31, 33, 33);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-08-25', '2007-04-17', 99.37, 34, 34);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-07-01', '2014-10-09', 34.53, 35, 35);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-10-12', '2004-06-07', 64.71, 36, 36);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-07-05', '2002-08-02', 14.8, 37, 37);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-03-31', '2013-05-23', 46.16, 38, 38);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-11-20', '2003-07-03', 4.33, 39, 39);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-08-02', '2012-04-06', 91.22, 40, 40);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-10-29', '2010-11-09', 17.1, 41, 41);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-05-23', '2007-10-06', 93.92, 42, 42);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-02-23', '2006-11-09', 77.73, 43, 43);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-02-07', '2010-05-20', 40.02, 44, 44);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-03-05', '2010-10-15', 19.35, 45, 45);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-01-09', '2005-11-29', 79.79, 46, 46);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-01-14', '2011-10-26', 82.92, 47, 47);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-05-30', '2001-04-14', 44.66, 48, 48);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-09-16', '2014-09-19', 78.74, 49, 49);
insert into rental_log (date_rented, date_returned, amt_paid, instrumentID, studentID) values ('1990-03-02', '2002-11-23', 35.68, 50, 50);



