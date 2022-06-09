Create TABLE alumni(
    alumniID int UNIQUE NOT NULL,
    fName varchar(45) NOT NULL,
    lName varchar(45) NOT NULL,
    email varchar(45) NOT NULL,
    phone varchar(12) NOT NULL,
    DOB date,
    Gender char(1) NOT NULL,
    Ethnicity tinyint(1) NOT NULL,
    website varchar(50),
    linkedin_Link varchar(50),
    twitterLlink varchar(50),
    facebookLink varchar(50),
    instagramLink varchar(50)
    guestSpeakerYN varchar(1)NOT NULL,
    newsLetterYN char(1)NOT NULL,
    imageThumb varchar(50),
    imageNormal varchar(50),
    alumniDesc varchar(100),
    deceasedYN varchar(1)NOT NULL,
    deceasedDT date,
    deceasedNotes varchar(100),

    PRIMARY KEY (alumniID)
);
