<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <h1 class="text-info text-center" >HB Poultry Farm</h1>
    <div class="row"></div>
        <div class="col-3"></div>
        <div class="col-6">
            <h3 class="text-info text-center">Complete your registration here</h3>
            <form method="post" action="register_handler.php">
                <input name="val1" class="form-control" type="text" placeholder="Enter Name"><br><br>
                <input name="val2" class="form-control" type="email" placeholder="Enter Email"><br><br>
                <input name="val3" class="form-control" type="password" placeholder="Enter Password"><br><br>
                <input name="btn_reg" class="btn btn-outline-info btn-block" type="submit" value="register"><br>
                <a class="btn btn-outline-info btn-block" href="users.php">View Users</a>

            </form>
        </div>
        <div class="col-3"></div>

</body>
</html>