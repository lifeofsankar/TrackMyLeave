# TrackMyLeave - A Role-Based Login System

> A web-based DBMS project demonstrating a secure, multi-role authentication system for Admins, Students, and Faculty using PHP and MySQL.

<div align="center">

[![Tech Stack](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net)
[![Database](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Frontend](https://img.shields.io/badge/HTML5%20%7C%20CSS3%20%7C%20JS-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web)

</div>

<p align="center">
  <img src="./demo.gif" alt="TrackMyLeave Demo" width="80%"/>
</p>

## ✨ Features
- **Role-Based Authentication:** Separate, secure login portals for Admins, Students, and Faculty.
- **Dynamic Dashboards:** Unique dashboard views tailored to the logged-in user's role.
- **Secure Backend:** All user authentication is handled server-side with PHP and a MySQL database.
- **Session Management:** Robust login, logout, and session-tracking functionality.
- **Modern UI:** A clean, responsive, and user-friendly interface.
- **Informative Error Handling:** Clear feedback on failed login attempts.

## 🛠️ Tech Stack
| Tech | Description |
|---|---|
| **Frontend** | HTML5, CSS3, JavaScript |
| **Backend** | PHP |
| **Database** | MySQL |
| **Server** | Apache (via XAMPP/WAMP) |


## 🔒 A Note on Security
This project was built for educational purposes to demonstrate DBMS concepts. For this reason, passwords are currently stored in plain text.

**For a production environment, it is crucial to hash passwords** using a strong algorithm like `bcrypt` via PHP's `password_hash()` and `password_verify()` functions to ensure user data is secure.


## 🔧 Getting Started & Setup Instructions

<details>
<summary>Click to expand setup instructions</summary>

### Prerequisites
- A web server with PHP support (e.g., Apache via XAMPP, WAMP, or LAMP).
- MySQL server to host the database.

### 1. Set up the Database
- Locate the `db.sql` file in the project folder.
- Using a tool like phpMyAdmin, import `db.sql` to create the `dbms_project` database, required tables, and sample user data.

### 2. Configure Database Connection
- Open the `config.php` file.
- Update the `$servername`, `$username`, `$password`, and `$dbname` variables to match your local MySQL configuration.

### 3. Place Files in Web Server Directory
- Copy the entire project folder to your web server's document root (e.g., `htdocs/` for XAMPP).

### 4. Access the Project
- Start your Apache and MySQL services.
- Open your web browser and navigate to `http://localhost/YOUR_PROJECT_FOLDER_NAME/main_login.html`.

### 5. Test Credentials
- **Admin:** `admin1` / `pass123`
- **Student:** `student1` / `pass123`
- **Faculty:** `faculty1` / `pass123`

</details>

---

*This project was created as part of the S5 DBMS course.*
