CREATE TABLE address_table(
addressID int UNIQUE NOT NULL,
alumniID int NOT NULL,
streetAdd char(55),
city char(30),
stateAdd char(2),
zip int(5),
addressType char(10),
activeYN char(1),
primaryYN char(1),
PRIMARY KEY (addressID),
FOREIGN KEY(alumniID) REFERENCES alumni_table(alumniID)
);
