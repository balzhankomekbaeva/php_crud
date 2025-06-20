# PHP CRUD Product App

This is a simple PHP-based CRUD application to manage a product list with comments. The app connects to a MySQL database and supports viewing, creating, updating, and deleting products, along with the ability to add comments to each product.

## 📁 Project Structure

crud/
├── config/

│ └── connect.php # Database connection

├── vendor/

│ ├── create.php # Handles product creation

│ ├── create_comment.php # Handles comment creation

│ ├── delete.php # Handles product deletion

│ └── update.php # Handles product updates

├── index.php # Main page listing all products + add form

├── product.php # View product details + comments

└── update.php # Update form for product



## 🛠️ Technologies Used

- PHP (Procedural)
- MySQL
- phpMyAdmin (for database management)
- HTML (for frontend)

## 💾 Database Schema

### Table: `products`
| Field       | Type         |
|-------------|--------------|
| id          | INT, AUTO_INCREMENT, PRIMARY KEY |
| title       | VARCHAR(255) |
| description | TEXT         |
| price       | FLOAT        |

### Table: `comments`
| Field       | Type         |
|-------------|--------------|
| id          | INT, AUTO_INCREMENT, PRIMARY KEY |
| product_id  | INT          |
| body        | TEXT         |

Make sure foreign keys are related (`product_id` in `comments` references `products.id`).

## 🚀 How to Run

1. **Clone the repository**:
   ```bash
   git clone https://github.com/balzhankomekbaeva/php_crud.git
2. **Start your local server (e.g., via XAMPP, MAMP, or OpenServer)**

3. **Import the SQL structure into your phpMyAdmin:**
``` CREATE DATABASE crud;

USE crud;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    price FLOAT
);

CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    body TEXT,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
);
```
4. **Set database credentials in config/connect.php**
   ```
   $connect = mysqli_connect("localhost", "root", "root", "crud");
6. **Open your browser and go to**
   ```
   http://localhost/crud/index.php

   
# ✨ Features
Add a new product (title, description, price)

View all products

View individual product details

Add comments to a product

Update a product

Delete a product (with cascading delete on comments)

# 📌 Notes
Input is escaped using mysqli_real_escape_string to prevent SQL injection.

Minimal CSS for table styling.

You can extend this app with login/auth, validation, and pagination.

![image](https://github.com/user-attachments/assets/7a37d0ef-8e1d-4275-bb3a-9629eba68900)
![image](https://github.com/user-attachments/assets/ce1d12f5-4fe9-491b-a78c-a988eb426391)
![image](https://github.com/user-attachments/assets/e1e0a3bf-68ca-4dca-87c7-c3a0d9836731)



