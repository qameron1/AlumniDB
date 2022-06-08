CREATE TABLE degree_table(
degreeID int NOT NULL,
alumniID int NOT NULL,
degree char(20) NOT NULL,
major char(20) NOT NULL,
minor char(20),
graduationDT Date NOT NULL,
university char(20) NOT NULL,
city char(20) NOT NULL,
state char(2) NOT NULL,
PRIMARY KEY(degreeID),
FOREIGN KEY(alumniID) REFERENCES alumni_table(alumniID)
);