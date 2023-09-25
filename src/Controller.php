<?php
namespace Mzert\EmployeeMgtApp;
require "Model.php";
use Mzert\EmployeeMgtApp\Model;

class Controller {

    private $db;
    public function __construct()
    {
        $this->db = new Model();
    }

    public function createEmployee(array $data) 
    {
       $dataInsert = $this->db->insertRecord($data);
       if($dataInsert === true) {
        // var_dump($dataInsert);
        // die();
        echo "Insert is successful";
        $_SESSION['message'] = "insert";
        header("Location:index.php"); // Redirect the user to the index page with a url param that will be read and an action taken accordingly
        // header("Location:index.php?msg1=insert"); // Redirect the user to the index page with a url param that will be read and an action taken accordingly
        return true;
    } else {
        echo "Insert unsuccessful";
        die();
        header("Location:index.php?msg3=delete");
        return false;
       }
    }

    public function getAllEmployees()
    {
        if ($this->db->getRecords()) {
            echo "Successful!";
            return $this->db->getRecords();
        }
       return false;
    }

    public function getSingleEmployee(int $id)
    {
        $result =  $this->db->getSingleRecord($id);
        if ($result) {
            echo "Successful!";
          return $result;
        }
       return false;
    }

    public function updateEmployee(array $data)
    {
       
        $dataUpdate = $this->db->updateRecord($data);

        if($dataUpdate  == true) {
            echo "Update is successful";
            header("Location:index.php?msg2=update");
            return true;
        }

    }

    public function deleteEmployee(int $id)
    {
        $deletedData = $this->db->deleteRecord($id);

        if($deletedData  == true) {
            echo "Delete  is successful";
            header("Location:index.php?msg3=delete");
            return true;
        }
    }
    
}