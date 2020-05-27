

CREATE TABLE TeamMember
(
    MemberID INTEGER,
    Fname VARCHAR(30),
    Mname VARCHAR(30),
    Lname VARCHAR(30),
    EmployeeType VARCHAR(30), 
    PRIMARY KEY(MemberID, EmployeeType)
);

CREATE TABLE Management
(
    MemberID INTEGER(11) PRIMARY KEY,
    Fname VARCHAR(30),
    Mname VARCHAR(30),
    Lname VARCHAR(30)
);

CREATE TABLE Task
(
    TaskID INTEGER,
    TaskName VARCHAR(50),
    StartDate DATE,
    FinishDateGoal DATE,
    CurrentStatus VARCHAR(30),
    PRIMARY KEY(TaskID, MemberID)
);

CREATE TABLE Document
(
    TaskID INTEGER NOT NULL PRIMARY KEY,
    FileType VARCHAR(30),
    FileName VARCHAR(30),
    FileContent TEXT,
    AuthorMemberID INTEGER(11),
    UploadDate DATETIME
);

CREATE TABLE TrackedChanges
(
    TaskID INTEGER NOT NULL,
    MemberID INTEGER,
    FileType INTEGER,
    FileName VARCHAR(30),
    DateOfAccess DATETIME,
    PostAccessContent TEXT,
    PreAccessContent TEXT,
    PRIMARY KEY(DateOfAccess),
    FOREIGN KEY(MemberID) REFERENCES Task(MemberID)
);

CREATE TABLE Message
(
    MemberID INTEGER PRIMARY KEY,
    MessageID INTEGER,
    DateSent DATETIME,
    RecipientID INTEGER,
    SenderID INTEGER,
    MessageContent TEXT
);


INSERT INTO TeamMember(MemberID, Fname, Mname, name, EmployeeType)
VALUES
    (123456, 'Alex', 'Samuel', 'Peterson', 'Contractor'),
    (033198, 'Madison', 'Taylor', 'Peterson', 'Manager');

INSERT INTO Management(MemberID, Fname, Mname, Lname)
VALUES
    (033198, 'Madison', 'Taylor', 'Peterson');

INSERT INTO Task(TaskID, MemberID, TaskName, StartDate, FinishDateGoal, CurrentStatus)
VALUES
    (1, 033198, 'First Task', '1998-01-01', '2020-05-08', 'Active');

INSERT INTO Document(TaskID, FileType, FileName, FileContent, AuthorMemberID, UploadDate)
VALUES
    (1, '.doc', 'FirstFile', 'Hello world, this is the first document I have ever stored.', 033198, '2020-05-08 00:00:00');

INSERT INTO TrackedChanges(TaskID, MemberID, FileType, FileName, DateOfAccess, PostAccessContent, PreAccessContent)
VALUES
    (1, 033198, '.doc', 'FirstFile', '2020-05-08 00:00:00', 'new altered document', 'previous content');

INSERT INTO Messages(MemberID, MessageID, DateSentRecieved, RecipientID, SenderID, MessageContent)
VALUES
    (033198, 1, '2020-05-08', 123456, 033198, 'First message ever to Alex.');


SELECT COUNT(*) FROM TrackedChanges
                WHERE FileName = 'FirstFile';

SELECT * FROM Message m, TeamMember t
                WHERE m.RecipientID = '123456' AND m.MemberID = t.MemberID;

SELECT MemberID FROM TeamMember
                WHERE Fname = 'Alex' OR name = 'Peterson';
