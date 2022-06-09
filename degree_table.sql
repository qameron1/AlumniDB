CREATE TABLE degree_table(
degreeID int UNIQUE NOT NULL,
alumniID int NOT NULL,
degree varchar(20) NOT NULL,
major varchar(45) NOT NULL,
minor varchar(45),
graduationDT Date NOT NULL,
university varchar(45) NOT NULL,
city varchar(20) NOT NULL,
stateAdd varchar(2) NOT NULL,
PRIMARY KEY(degreeID),
FOREIGN KEY(alumniID) REFERENCES alumni(alumniID)
);