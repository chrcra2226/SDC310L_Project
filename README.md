# SDC310L_Project
# Project Summary

# Project Name: Shopping Cart Web Application

## Overview
This project is a PHP-based shopping cart web application that demonstrates full CRUD (Create, Read, Update, Delete) functionality using a MySQL database managed through phpMyAdmin and running on MariaDB.

## The application allows users to:
-View a list of products
-Add multiple quantities of a product to a cart
-Update cart quantities
-Remove quantities from the cart
-View real-time item totals and grand totals
-The system uses a single database (sdc310l_db) and one table (products) to store product and cart data.

## Project Tasks
## - 1. Database Design
-Create sdc310l_db database.
-Design products table structure.
-Define primary key (ProductId).
-Define data types for product fields.

## - 2. Table Creation
-Implement CREATE TABLE SQL.
-Insert initial product records.
-Verify table structure in phpMyAdmin.
-Test manual queries for validation.

## - 3. Application Framework Setup
-Create base PHP project structure.
-Create mysqli_connect.php.
-Create main application file (sdc310l_project.php).
-Display placeholder “Under Construction” message.
-Test database connection integration.

## - 4. Database Connection Integration
-Define DB constants.
-Establish MySQLi connection.
-Set charset.
-Test connection handling.
-Implement basic error handling.

## - 5. CRUD Functionality Development
-Create crud.php for request handling.
-Implement:
  -Create (Add to Cart) – Increase InCart
  -Read (Display Products) – Fetch products from database
  -Update (Modify Quantity) – Set new InCart
  -Delete (Remove Items) – Reduce or reset InCart
-Recalculate TotalPrice on every modification.
-Validate numeric input.
-Use prepared statements for security.

## - 6. Cart Display Logic
-Initialize default values for InCart and TotalPrice.
-Display InCart quantity per product.
-Display per-product TotalPrice.
-Calculate and display grand total using SQL SUM().

## - 7. Model Layer Creation
-Move database queries into Model files.
-Separate connection logic from business logic.
-Create reusable functions for:
-Get all products
-Get single product
-Update cart values

## - 8. View Layer Creation
-Move all HTML output into View files.
-Separate presentation from processing logic.
-Remove direct SQL from UI files.
-Prepare layout structure for product list and cart page.

## - 9. Controller Layer Creation
-Create Controller to:
  -Handle POST requests
  -Call Model functions
  -Determine redirect behavior
-Remove database logic from Views.
-Ensure Controller coordinates data flow between Model and View.

## - 10. Shopping Cart Page Creation
-Create dedicated cart page.
-Allow for cart manipulation.
-Display grand total.

## - 11. UI Styling
-Improve layout formatting.
-Add spacing and alignment.
-Improve button presentation.
-Improve readability of totals and pricing.
-Optionally move styles to external CSS file.

## - 12. Functionality Testing
-Test Add functionality with multiple quantities.
-Test Update functionality.
-Test Remove functionality.
-Verify TotalPrice recalculates correctly.
-Verify grand total accuracy.
-Test invalid input handling.
-Confirm redirect prevents duplicate submissions.

## - 13. Code Review & Cleanup
-Remove redundant code.
-Standardize variable naming.
-Ensure prepared statements are used consistently.
-Confirm proper separation of concerns.
-Verify project meets Course Project Overview requirements.

## Project Skills Learned
- Version control with Git and GitHub
- Agile development process
- Continuous integration and deployment (CI/CD)
- Writing documentation

## Technologies Used
-PHP (Server-side scripting)
-MySQL / MariaDB (Database management)
-MySQLi (Database connectivity using prepared statements)
-HTML (User interface)
-phpMyAdmin (Database administration)

## Functional Features
-Users can add more than one item at a time.
-Users can update quantities directly.
-Users can remove partial quantities instead of clearing the entire cart.
-Totals are automatically recalculated after every operation.
-All database updates are performed securely using prepared statements.
-Page refreshes are handled properly to prevent duplicate submissions.

## Notes
-This design supports multi-quantity cart operations while maintaining a simple single-table structure suitable for an academic project.
-The application meets the functional requirements of a shopping cart system in a single-user academic environment while maintaining clean, modular structure and secure database interaction.

## Link to Repository
[Shopping Cart Web Application](https://github.com/chrcra2226/SDC310L_Project.git)
