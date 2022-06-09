CREATE TABLE address_table(
addressID int NOT NULL,
alumniID int NOT NULL,
address char(55),
city char(30),
state char(2),
zip int(5),
address_type char(10),
activeYN char(1),
primaryYN char(1),
PRIMARY KEY (addressID),
FOREIGN KEY(alumniID) REFERENCES alumni_table(alumniID)
);
