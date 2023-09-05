Create database coursemanagement;
use coursemanagement;


CREATE TABLE credentials(
    User_id int AUTO_INCREMENT PRIMARY KEY,
    Name varchar(20) not null,
    Email_id VARCHAR(255) NOT NULL ,
    Password VARCHAR(15) NOT NULL,
    Department varchar(10) ,
    isStudent BIT
);

CREATE TABLE teaches(
    course_id int AUTO_INCREMENT primary  key,
    User_id int NOT null,
    course_name varchar(20),
    course_desc varchar(50),
    start_date date,
    end_date date,
    code varchar(6),
    FOREIGN KEY(User_id) REFERENCES credentials(User_id) on DELETE CASCADE
);

CREATE TABLE takes(
    course_id int not null,
    User_id int not null,
    course_name varchar(20) not null,
    course_desc varchar(50),
    start_date date,
    end_date date,
    FOREIGN key(course_id) REFERENCES teaches(course_id) on delete CASCADE,
    FOREIGN KEY(User_id) REFERENCES credentials(User_id) on DELETE CASCADE

);

CREATE TABLE assignments(
    course_id int not null,
    assignment_id int AUTO_INCREMENT PRIMARY key,
    name varchar(20),
    ass_desc varchar(50),
    max_grade numeric(3,0) not null,
    attachments varchar(50),
    FOREIGN key(course_id) REFERENCES teaches(course_id) on delete CASCADE
);
CREATE TABLE submissions(
    course_id int not null,
    assignment_id int not null,
    User_id int NOT null,
    submission varchar(50),
    grade numeric(3,0) ,
    FOREIGN key(course_id) REFERENCES teaches(course_id) on delete CASCADE,
    FOREIGN KEY(User_id) REFERENCES credentials(User_id) on DELETE CASCADE,
    FOREIGN KEY(assignment_id) REFERENCES assignments(assignment_id) on DELETE CASCADE,
    PRIMARY KEY(assignment_id, User_id)
);

CREATE TABLE announcements(
    User_id int not null,
    course_id int not null,
    announcement_id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(20),
    announcement_desc varchar(50) not null,
    FOREIGN key(course_id) REFERENCES teaches(course_id) on delete CASCADE   
);