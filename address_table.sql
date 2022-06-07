CREATE TABLE address_table(
addressID int,
alumniID int,
city char(30),
state char(2),
zip char(5),
address_type char(40),
activeYN char(1),
primaryYN char(1),
PRIMARY KEY (addressID),
FOREIGN KEY(alumniID) REFERENCES alumni_table(alumniID)
);