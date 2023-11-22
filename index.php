<?php

    require_once 'db_oop/db_connection.php';
    require_once 'db_oop/navbar.php';

    $trow = '';
    $database = new DB_connection();

    $result = $database->query("select * from users");
    while($row = $result->fetch_assoc()){
        $trow .= 
        "
        <tr class='my_row'>
            <th scope='row'>{$row['id']}</th>
            <td> <img src='{$row['photo']}' class='photo' alt='{$row['first_name']}'></td>
            <td>{$row['first_name']} {$row['last_name']}</td>
            <td>{$row['age']}</td>
            <td>{$row['email']}</td>
            <td>{$row['status']}</td>
        </tr>
        ";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.scss">
    <title>OOP</title>
</head>
<body>

<!-- *******************************************************************************************************
**********************************************Navbar********************************************************
******************************************************************************************************** -->


<div class="nav">
    <?= $navbar ?>
</div>


<!-- *******************************************************************************************************
**********************************************Content********************************************************
******************************************************************************************************** -->

<div class="container mt-5 mb-5 bg-body-secondary">
    <div class="heading my-5">
        <h2>Users</h2>
    </div>
    <div class="table">
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Photo</th>
            <th scope="col">Full name</th>
            <th scope="col">Age</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?= $trow ?>
        </tbody>
        </table>
    </div>
</div>
    







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
</html>