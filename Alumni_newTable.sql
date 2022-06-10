CREATE TABLE alumi_NewTable(
newsID int UNIQUE NOT NULL,
alumniID int NOT NULL,
rptDate date NOT NULL,
headline varchar(45) NOT NULL,
description varchar(55) NOT NULL, 
link varchar(45) NOT NULL, 
fileloc varchar(45) NOT NULL,
PRIMARY KEY (newsID),
FOREIGN KEY(alumniID) REFERENCES alumni(alumniID)
);