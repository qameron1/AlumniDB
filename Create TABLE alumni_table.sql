Create TABLE alumni_table(
    alumniID int UNIQUE NOT NULL,
    fName char(10) NOT NULL,
    lName char(10) NOT NULL,
    email nchar(20) NOT NULL,
    phone char(12) NOT NULL,
    DOB date,
    Gender char(1) NOT NULL,
    Ethnicity tinyint(1) NOT NULL,
    website char(50),
    linkedin_Link char(50),
    twitterLlink char(50),
    facebookLink char(50),
    instagramLink char(50)
    guestSpeakerYN char(1)NOT NULL,
    newsLetterYN char(1)NOT NULL,
    imageThumb char(50),
    imageNormal char(50),
    alumniDesc char(100),
    deceasedYN char(1)NOT NULL,
    deceasedDT date,
    deceasedNotes char(100),

    PRIMARY KEY (alumniID)
);
