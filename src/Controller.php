<?php
// session_start();
require "Model.php";

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
      
    } else {
        echo "Insert unsuccessful";
        die();
        header("Location:index.php?msg3=delete");
       }
    }

    public function getAllEmployees()
    {
        if ($this->db->getRecords()) {
            return $this->db->getRecords();
        }
       return false;
    }

    public function getSingleEmployee(int $id)
    {
        $result =  $this->db->getSingleRecord($id);
        if ($result) {
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
        }

    }

    public function deleteEmployee(int $id)
    {
        $deletedData = $this->db->deleteRecord($id);

        if($deletedData  == true) {
            echo "Delete  is successful";
            header("Location:index.php?msg3=delete");
        }
    }
    
}