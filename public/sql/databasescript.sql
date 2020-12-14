drop schema if EXISTS phplogin;
create schema phplogin;
use phplogin;

CREATE TABLE users(
    user_ID int UNIQUE AUTO_INCREMENT,
    user_first varchar(255) NOT NULL, 
    user_last varchar(255) NOT NULL,
    user_email varchar(255) UNIQUE NOT NULL,
    user_adress varchar(255) NOT NULL,
    user_postalcode VARCHAR (255) NOT NULL,
    user_city VARCHAR (255) NOT NULL,
    user_dob DATE,
    user_gender VARCHAR (255) NOT NULL,
    user_username VARCHAR (255) UNIQUE NOT NULL,
    user_pwd VARCHAR(255),
    user_reg_date DATETIME DEFAULT NOW(),
    user_type ENUM('medlem', 'leder', 'admin') NOT NULL,
    user_payment_status ENUM('ikke aktivert','betalt', 'aktivert', 'ubetalt') NOT NULL,
    user_tlf VARCHAR (255),
    user_img VARCHAR (255),
    PRIMARY KEY (user_ID)
);

CREATE TABLE courses(
    course_ID int UNIQUE AUTO_INCREMENT,
    course_start_date DATE,
    course_end_date DATE,
    course_name VARCHAR (255),
    course_info VARCHAR (255),
    PRIMARY KEY (course_ID)
);

CREATE TABLE course_bridge(
    course_ID int UNIQUE  AUTO_INCREMENT ,
    user_ID int,
    FOREIGN KEY (course_ID) REFERENCES courses(course_ID),
    FOREIGN KEY (user_ID) REFERENCES users(user_ID)
);

CREATE TABLE interests(
    interest_ID int UNIQUE AUTO_INCREMENT,
    interest_info VARCHAR (255) UNIQUE,
    PRIMARY KEY (interest_id)
);

CREATE TABLE interests_bridge(
    interest_ID int ,
    user_ID int ,
    FOREIGN KEY (interest_ID) REFERENCES interests(interest_ID),
    FOREIGN KEY (user_ID) REFERENCES users(user_ID)

);
