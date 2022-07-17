CREATE TABLE users_table(
userID int UNIQUE NOT NULL,
userPass varchar(55) NOT NULL,
fName varchar(55) NOT NULL,
lName varchar(55) NOT NULL,
jobDescription varchar(255) NOT NULL,
adminYN varchar(1) NOT NULL,
insertPriveledgeYN varchar(1) NOT NULL,
updatePriveledgeYN varchar(1) NOT NULL,
deletePriveledgeYN varchar(1) NOT NULL,
PRIMARY KEY (userID)
);