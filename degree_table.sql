CREATE TABLE degree_table(
degreeID int PRIMARY KEY,
alumniID int,
major char(20),
minor char(20),
graduationDT Date,
university char(20),
city char(20),
state char(2),
FOREIGN KEY(alumniID) REFERENCES alumni_table(alumniID)
);
