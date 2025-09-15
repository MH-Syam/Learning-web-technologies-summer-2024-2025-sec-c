CREATE DATABASE IF NOT EXISTS lab_test_db;
USE lab_test_db;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL,
    email VARCHAR(100),
    role ENUM('admin','user') DEFAULT 'user'
);

-- Insert default admin
INSERT INTO users (username, password, email, role) 
VALUES ('admin', '1234', 'admin@example.com', 'admin');
