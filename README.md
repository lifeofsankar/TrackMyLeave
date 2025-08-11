# TrackMyLeave

## Project Description
This project is a web-based Database Management System (DBMS) login system built to demonstrate user authentication with multiple user roles: Admin, Student, and Faculty. It provides a modern and user-friendly interface, backed by a MySQL database, and allows different user types to log in and access their respective dashboards securely.

## Features
- Role-based login system with separate login forms for Admin, Student, and Faculty.
- Secure backend validation using PHP and MySQL.
- Simple, clean, and modern user interface with responsive design.
- Separate dashboards for each user role.
- User session management with login and logout functionality.
- Error handling with informative messages on failed login attempts.

## Project Structure

S5-Project-DBMS/
│
├── README.md # Project description and setup instructions
├── main_login.html # Main page to choose user role for login
├── student_login.html # Student login page with password toggle
├── admin_login.html # Admin login page
├── faculty_login.html # Faculty login page
├── styles.css # CSS styles for all pages (modern UI)
├── script.js # Optional JavaScript for form validation/UI effects
├── config.php # Database connection configuration
├── login.php # Backend script to authenticate users
├── dashboard_admin.php # Admin dashboard after login
├── dashboard_student.php # Student dashboard after login
├── dashboard_faculty.php # Faculty dashboard after login
├── db.sql # SQL file to create database and sample users
├── logout.php # Script to terminate user session (logout)
└── error.html # Error page shown on invalid login


## Prerequisites
- A web server with PHP support (e.g., Apache via XAMPP, WAMP, or LAMP).
- MySQL server to host the database.
- Basic knowledge of how to operate your local development environment.

## Setup Instructions

### 1. Set up the Database
- Locate the `db.sql` file in the project folder.
- Open your MySQL interface (e.g., phpMyAdmin or MySQL Command Line).
- Import or run the SQL commands from the `db.sql` file to create database, tables, and sample users.

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


### 2. Configure Database Connection
- Open `config.php`.
- Adjust database host, username, password, and database name if needed (default: localhost, root, no password, dbms_project).

### 3. Place Files in Web Server Directory
- Copy the entire project folder to your web server's document root:
  - For XAMPP: `htdocs/S5-Project-DBMS`
  - For WAMP: `www/S5-Project-DBMS`

### 4. Access the Project
- Open a web browser.
- Visit: `http://localhost/S5-Project-DBMS/main_login.html`

### 5. Test the Login System
- Choose a role on the landing page.
- Use the sample credentials:
  - Admin: `admin1` / `pass123`
  - Student: `student1` / `pass123`
  - Faculty: `faculty1` / `pass123`
- After login, the dashboard appears corresponding to the user role.
- You may log out using the provided logout button.

## File Roles Explained

- **main_login.html**: Landing page where users select their role.
- **student_login.html / admin_login.html / faculty_login.html**: Role-specific login forms.
- **styles.css**: Stylesheet controlling look and feel.
- **config.php**: Database connection settings.
- **login.php**: Processes login requests, verifies credentials, redirects users.
- **dashboard_*.php**: Personalized dashboard for each role.
- **logout.php**: Ends user session securely.
- **error.html**: Informative page on login failure.
- **db.sql**: Creates the database structure and sample data.

## Notes and Recommendations

- Currently, passwords are stored in plain text in the database for demonstration purposes only.
- For production, always hash passwords using strong hashing algorithms (e.g., bcrypt) and verify them securely.
- Consider adding user registration, password reset, and input sanitization for improved security.
- This project is a solid foundation to build more advanced DBMS web applications.

---

If you have questions or need further assistance with deployment, customization, or security improvements, feel free to ask!

---

*Project created as part of S5 DBMS course project.*

