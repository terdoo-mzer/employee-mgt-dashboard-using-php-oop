<?php
// Include database file
require '../class/Controller.php';

$controller = new Controller();

// Insert Record in customer table
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
    <?php include '../templates/header.php' ?>
    <form action="/create.php" method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" placeholder="Enter name" required="">
      </div>
      <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" name="email" placeholder="Enter email" required="">
      </div>
      <div class="form-group">
        <label for="position">Position:</label>
        <input type="text" class="form-control" name="position" placeholder="Enter Position" required="">
      </div>
      <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Submit">
    </form>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>