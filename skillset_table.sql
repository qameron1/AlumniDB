CREATE TABLE skillset(
skillsetID int NOT NULL,
alumniID int NOT NULL,
skill char(30) NOT NULL,
proficiency char(30) NOT NULL,
description char(55),
PRIMARY KEY (skillsetID),
FOREIGN KEY(alumniID) REFERENCES alumni_table(alumniID)
);
