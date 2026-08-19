# 🏡 Student Accommodation Website (PG Finder)

A responsive, web-based platform built for students to easily search, filter, and view Paying Guest (PG) accommodations. This project simulates a real-world platform designed to help students find suitable living spaces based on their preferences.

---

## 🚀 Key Features

* **Property Listing & Search:** Displays available PG accommodations with details like name, city, gender suitability, price, and rating.
* **Dynamic Filtering:** Filter properties seamlessly by City, Gender preference, and Maximum Budget.
* **Property Details View:** View comprehensive property descriptions, ratings, and pricing.
* **User Authentication:** Complete Signup and Login functionality for students.
* **Interactive UI (AJAX):** Dynamic "Mark as Interested" button updates status instantly without page reloads.
* **Responsive Layout:** Designed using Bootstrap for compatibility across mobile, tablet, and desktop.

---

## 🛠️ Tech Stack

* **Frontend:** HTML5, CSS3, Bootstrap 5, JavaScript
* **Backend:** PHP
* **Database:** MySQL
* **Interactivity:** AJAX
* **Environment:** XAMPP Localhost

---

## 📂 Project Structure

```text
pg-finder/
├── db_connect.php        # Database connection script
├── index.php             # Main homepage with filtering & property cards
├── details.php           # Property details page with AJAX interaction
├── signup.php            # User registration page
├── login.php             # User login page
└── student_housing.sql   # Database schema and sample data export
⚡ Setup & Installation
Clone the Repository:
git clone https://github.com/rituporwal2107-prog/student-accomodation-website.git

Move to Server Directory:
Copy the project folder to your XAMPP server directory (C:/xampp/htdocs/pg-finder).

Database Import:

Open phpMyAdmin (http://localhost/phpmyadmin).

Create a new database named student_housing.

Import the student_housing.sql file provided in this repository.

Run the Application:
Start Apache and MySQL modules in XAMPP, then navigate to http://localhost/pg-finder/index.php.

📝 Final Deliverables
[x] Responsive Property Listing Page

[x] Normalized Database Schema (.sql)

[x] Dynamic PHP & MySQL Backend Integration

[x] User Authentication & Interactive UI

[x] GitHub Repository Upload
