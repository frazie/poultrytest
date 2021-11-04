<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registered Users</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<a class="btn btn-outline-secondary btn-block" href="Register.php">Register Users</a>
<h1 class="text-center text-info">Registered Poultry Users</h1>
    <table class="table table-hover table-dark">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php
        //start by connecting to the data base
        require_once "connect.php";
        //prepare the select query
        $selectQuery = "SELECT * FROM `users` WHERE 1";
        $users = mysqli_query($connection,$selectQuery);

        foreach ($users as $person){
            $userName = $person["name"];
            $userEmail = $person["email"];
            $userPassword = $person["password"];
            $userID = $person["ID"];

            echo "
                <tr>
                     <td>$userName</td>
                     <td>$userEmail</td>
                     <td> <a class='btn btn-danger' href='#'>Delete</a> </td>
                     <td> <a class='btn btn-info' href='#'>Delete</a></td>
        </tr>
            ";
        }
        ?>
    </table>
</body>
</html>