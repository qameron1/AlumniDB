CREATE TABLE skillset(
skillsetID int UNIQUE NOT NULL,
alumniID int NOT NULL,
skill varchar(45) NOT NULL,
proficiency varchar(45) NOT NULL,
skillDesc varchar(55),
PRIMARY KEY (skillsetID),
FOREIGN KEY(alumniID) REFERENCES alumni_table(alumniID)
);
