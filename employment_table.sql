Create TABLE employment_table(
    employmentID int UNIQUE NOT NULL,
    alumniID int NOT NULL,
    company varchar(50) NOT NULL,
    streetAdd varchar(50),
    city varchar(30),
    stateAdd varchar(2),
    zip int(5),
    startDate date,
    endDate date,
    jobTitle varchar(30) NOT NULL,
    currentYN varchar(1) NOT NULL,
    notes varchar(50),
    PRIMARY KEY (employmentID),
    FOREIGN KEY(alumniID) REFERENCES alumni_table(alumniID)
);
