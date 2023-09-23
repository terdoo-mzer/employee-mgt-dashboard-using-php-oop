<?php

// Include database file
require '../class/Controller.php';

$controller = new Controller();
$employees = $controller->getAllEmployees(); // Get all employees here

// Delete record from table
  if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
      $controller->deleteEmployee($_GET['deleteId']);
  }

// Insert Record in employee table
if (isset($_POST['submit'])) {
    $controller->createEmployee($_POST);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP: CRUD (Add, Edit, Delete, View) Application using OOP (Object Oriented Programming) and MYSQL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include '../templates/bootsrap.php' ?>
</head>

<body>



    <div class="container">
      

        <div class="card text-center" style="padding:15px;">
            <h4>EMPLOYEE MGT PROJECT:OOP</h4>
        </div><br><br>
        <?php
        if (isset($_GET['msg1']) == "insert") {
            echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Your Registration added successfully
            </div>";
        }
        if (isset($_GET['msg2']) == "update") {
            echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Employee record updated successfully
            </div>";
        }
        if (isset($_GET['msg3']) == "delete") {
            echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Record deleted successfully
            </div>";
        }
        ?>
        <h2>View Records
            <a href="create.php" class="btn btn-primary" style="float:right;">Add New Record</a>
        </h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Position</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($employees) { ?>
                    <?php
                    foreach ($employees as $employee) {
                    ?>
                        <tr>
                            <td><?php echo $employee['id'] ?></td>
                            <td><?php echo $employee['name'] ?></td>
                            <td><?php echo $employee['email'] ?></td>
                            <td><?php echo $employee['position'] ?></td>
                            <td>
                                <a href="employee.php?id=<?php echo $employee['id'] ?>" style="color:green">
                                    <i class="fa fa-eye" aria-hidden="true"></i></a>&nbsp
                                <a href="update.php?id=<?php echo $employee['id'] ?>" style="color:green">
                                    <i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp
                                <a href="index.php?deleteId=<?php echo $employee['id'] ?>" style="color:red" onclick="confirm('Are you sure want to delete this record')">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } else { ?>
                    <p>Records do not exist.</p>
                <?php } ?>

            </tbody>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>