CREATE TABLE skillset(
skillsetID int,
alumniID int,
skill char(30) NOT NULL,
proficiency char(30),
description char(55),
PRIMARY KEY (skillsetID),
FOREIGN KEY(alumniID) REFERENCES alumni_table(alumniID)
);