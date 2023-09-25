<?php

// Include database file
// Include database file
require '../src/Controller.php';

$controller = new Controller();

$employee = [];

// Get employee record
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $employee = $controller->getSingleEmployee($_GET['id']);
}

// Update Record in employee table
if (isset($_POST['update'])) {
    $controller->updateEmployee($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP: CRUD (Add, Edit, Delete, View) Application using OOP (Object Oriented Programming) and MYSQL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>

    <div class="card text-center" style="padding:15px;">
        <h4>PHP: CRUD (Add, Edit, Delete, View) Application using OOP (Object Oriented Programming) and MYSQL</h4>
    </div><br>

    <div class="container">
        <?php if ($employee) { ?>
            <form action="update.php" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $employee[0]['name']; ?>" required="">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $employee[0]['email']; ?>" required="">
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" name="position" value="<?php echo $employee[0]['position']; ?>" required="">
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $employee[0]['id']; ?>">
                    <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">
                </div>
            </form>
        <?php } else { ?>
            <p>Employee does not exist.</p>
        <?php } ?>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>