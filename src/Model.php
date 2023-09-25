<?php
namespace Mzert\EmployeeMgtApp;

use mysqli;

class Model
{
    private static $servername = "localhost";
    private static $username   = "root";
    private static $password   = "";
    private static $database   = "employee_mgt_app_oop";
    public  $con;
    // Database Connection 
    public function __construct()
    {
        $this->con = new mysqli(self::$servername, self::$username, self::$password, self::$database);
        // Check connection
        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }
        // echo "Connected successfully";
    }

    public function getRecords()
    {
        $sql = "SELECT id, name, email, position FROM employees";
        $result = $this->con->query($sql);

        if ($result->num_rows > 0) {
            $data = array();
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            return false;
        }
    }

    public function getSingleRecord(int $id)
    {
        $sql = "SELECT * FROM employees WHERE id='$id'";
        $result = $this->con->query($sql);

        if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }

        return false;
    }

    public function insertRecord($data)
    {
        $name = $this->con->real_escape_string($data['name']);
        $email = $this->con->real_escape_string($data['email']);
        $position = $this->con->real_escape_string($data['position']);
        $query = "INSERT INTO employees(name,email,position) VALUES('$name','$email','$position')";
        $sql = $this->con->query($query);
        if ($sql) {
            return true;
        }
        return false;
    }

    public function updateRecord($data)
    {
        $name = $this->con->real_escape_string($data['name']);
        $email = $this->con->real_escape_string($data['email']);
        $position = $this->con->real_escape_string($data['position']);
        $id = $this->con->real_escape_string($data['id']);
        $query = "UPDATE employees SET name='$name', email='$email', position='$position' WHERE id='$id'";
        $sql = $this->con->query($query);

        if ($sql) {
            return true;
        }
        return false;
    }

    public function deleteRecord($id)
    {
        $query = "DELETE FROM employees WHERE id='$id'";
        $sql = $this->con->query($query);

        if($sql) {
            return true;
        }

        return false;
    }
}
