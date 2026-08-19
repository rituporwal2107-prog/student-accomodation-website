Student Accommodation Website (PG Finder)
A responsive, web-based platform built for students to easily search, filter, and view Paying Guest (PG) accommodations. This project simulates a real-world platform designed to help students find suitable living spaces based on their preferences.

Features
Property Listing & Search: Displays available PG accommodations with relevant details such as name, city, gender suitability, price, and rating.

Dynamic Filtering: Filter properties seamlessly by City, Gender preference, and Maximum Budget.

Property Details View: View comprehensive property details including descriptions, ratings, and pricing.

User Authentication: Complete Signup and Login functionality for students.

Interactive UI (AJAX): Dynamic "Mark as Interested" button updates status instantly without reloads.

Responsive Layout: Designed using Bootstrap to ensure compatibility across desktop, tablet, and mobile devices.

Tech Stack
Frontend: HTML5, CSS3, Bootstrap 5, JavaScript

Backend: PHP

Database: MySQL

Interactivity: AJAX

Environment: XAMPP Localhost

Project Structure
pg-finder/
├── db_connect.php
├── index.php
├── details.php
├── signup.php
├── login.php
└── student_housing.sql

Setup & Installation
Clone/Download the Repository:
git clone https://github.com/rituporwal2107-prog/student-accomodation-website.git

Move to Server Directory:
Copy the project folder to your XAMPP server directory (C:/xampp/htdocs/pg-finder).

Database Import:

Open phpMyAdmin (http://localhost/phpmyadmin).

Create a new database named student_housing.

Import the student_housing.sql file provided in this repository.

Run the Application:
Start Apache and MySQL modules in XAMPP, then open your browser and navigate to http://localhost/pg-finder/index.php

Final Deliverables
Responsive Property Listing Page

Normalized Database Schema (.sql)

Dynamic PHP & MySQL Backend Integration

User Authentication & Interactive UI

GitHub Repository Upload
