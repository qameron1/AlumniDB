CREATE TABLE address_table(
addressID int UNIQUE NOT NULL,
alumniID int NOT NULL,
streetAdd varchar(55),
city varchar(30),
stateAdd varchar(2),
zip int(5),
addressType varchar(10),
activeYN varchar(1),
primaryYN varchar(1),
PRIMARY KEY (addressID),
FOREIGN KEY(alumniID) REFERENCES alumni_table(alumniID)
);
