CREATE DATABASE IF NOT EXISTS dbms_project;
USE dbms_project;

CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL
);

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL
);

CREATE TABLE faculty (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL
);

INSERT INTO admins (username, password) VALUES ('admin1', 'pass123');
INSERT INTO students (username, password) VALUES ('student1', 'pass123');
INSERT INTO faculty (username, password) VALUES ('faculty1', 'pass123');
