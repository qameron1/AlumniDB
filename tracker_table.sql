CREATE TABLE tracker_table(
logID int UNIQUE NOT NULL AUTO_INCREMENT,
userID int NOT NULL,
pageName varchar(45) NOT NULL,
logDate date NOT NULL,
logTime time NOT NULL,
PRIMARY KEY (logID),
FOREIGN KEY(userID) REFERENCES users_Table(userID)
);