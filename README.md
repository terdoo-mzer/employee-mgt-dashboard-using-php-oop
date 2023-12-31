# Employee Management Application Built using OOP PHP

## Introduction
This app is a CRUD application built to demonstrate the principles of Object Oriented Programming (OOP) in PHP.

## Prerequisites
You need the following to run this application;
#### a. Development Server (WAMP)
#### b. PHPUnit Testing Framework
#### c. Composer

## Installation

1. Clone the application into your PC like below:

```bash
git clone https://github.com/terdoo-mzer/employee-mgt-dashboard-using-php-oop.git
```
2. Navigate into the project folder on command line and do the below to install dependencies:

```php
composer install
```
3. In WAMP or you local development server, create the Database and afterwards create the table using the SQL queries below:
```sql
-- Create the database
CREATE DATABASE employee_mgt_app_oop;

-- Create the 'employees' table
CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    position VARCHAR(255) NOT NULL
);
````
4. Navigate into the project's "Model.php" file in the "src" folder and supply the database configs as applies:
```bash
  $servername = "localhost";
  $username   = "root";
  $password   = "";
  $database   = "employee_mgt_app_oop";
```
5. Navigate into the project's 'views' directory on the command line and then start the development server:
```bash
php -S localhost:8080
```

The project should open on port 8080 like so: http://localhost:8080/

## Tests
To run various tests please follow the below: Note that the tests are written to test the 'Controller' class in 'src' directory. All tests are domiciled in the 'tests' directory.
#### a. To run all tests:
````bash
php vendor/bin/phpunit tests --color
````
#### b. To test individual classes (testUpdateEmployee, testCreateEmployee, testGetAllEmployees )
```python
php vendor/bin/phpunit tests/ControllerTest.php --filter testUpdateEmployee --color --testdox

```

## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## Follow Me

[LinkedIn](https://www.linkedin.com/in/mzer-emmanuel/)