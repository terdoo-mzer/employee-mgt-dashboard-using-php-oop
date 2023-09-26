-- Create the database
CREATE DATABASE employee_mgt_app_oop;

-- Use the newly created database

-- Create the 'employees' table
CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    position VARCHAR(255) NOT NULL
);
