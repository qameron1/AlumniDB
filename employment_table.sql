Create TABLE alumni_table(
    employmentID int UNIQUE NOT NULL,
    alumniID int NOT NULL,
    company char(50) NOT NULL,
    city char(30),
    stateAdd char(2),
    zip char(5),
    startDate date NOT NULL,
    endDate date,
    jobTitle char(30) NOT NULL,
    currentYN char(1) NOT NULL,
    notes char(50),
    PRIMARY KEY (employmentID),
    FOREIGN KEY(alumniID) REFERENCES alumni_table(alumniID)
);