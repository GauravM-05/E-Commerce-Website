# E-Commerce-Website

## Table of Content
  * [Overview](#overview)
  * [Key Features](#key-features)
  * [Technology Used](#technology-used)
  * [Technical Aspect](#technical-aspect)
  * [Installation](#installation)
  * [Run](#run)
  * [Conclusion](#conclusion)

## Overview
This project is a basic E-Commerce Website focused on book sales. The platform allows users to browse, search, and purchase books online. It incorporates essential features of an e-commerce application such as user registration, product browsing, shopping cart functionality, and a checkout system.

## Key Features
User Authentication: Users can register, log in, and manage their accounts.
Product Browsing: Books are categorized and displayed with essential details such as title, author, price, and description.
Shopping Cart: Users can add books to the cart and manage the items before purchasing.
Search Functionality: Users can search for books by title or author.
Checkout System: A basic checkout system allowing users to finalize their purchase.

## Technology Used
Frontend:
HTML5: For structuring the website.
CSS3: For styling and making the user interface visually appealing.
JavaScript: For adding interactivity to the pages.
Backend:
Python (Flask): As the web framework to handle server-side logic.
SQLite: For managing the database where user and product information is stored.
Other Tools:
Bootstrap: To create responsive and mobile-first designs.

## Technical Aspect
Flask Backend:
Routes are defined to handle user interactions such as browsing books, adding them to the cart, and checking out.
The backend integrates with an SQLite database to store and retrieve data for users and book information.
Responsive Frontend:
The project uses Bootstrap to ensure that the website is mobile-friendly.
JavaScript is used for form validation and handling cart interactions.
Database:
SQLite is used to store user details, book information, and orders. The database interactions are managed via Flask, making it simple and efficient for small projects.

## Installation
Download and Set Up XAMPP:

Download and install XAMPP from here.
Start Apache and MySQL services via the XAMPP Control Panel.

Clone the Repository:
git clone https://github.com/GauravM-05/E-Commerce-Website.git
cd E-Commerce-Website/bookswebsite

Move Project to XAMPP Folder:
Move the project folder to the htdocs directory inside your XAMPP installation folder (usually located at C:/xampp/htdocs).

Set Up the Database:
Open phpMyAdmin from your XAMPP control panel.
Create a new database (e.g., books_db).
Import the provided SQL file (if available) to set up the necessary tables (users, books, orders).

## Run
Access the Website:
Open your web browser and go to http://localhost/bookswebsite/ to view and interact with the site.

## Conclusion
This E-Commerce Website is built using PHP and hosted on XAMPP. It provides the core functionalities of an e-commerce system, including user authentication, product browsing, a shopping cart, and a checkout process. The project demonstrates how to integrate PHP with MySQL databases and can serve as a foundation for further enhancements, such as integrating payment gateways or implementing better security practices.







