<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server is running!</title>
</head>

<body>
    <?php
    $db_con = mysqli_connect("db", "root", "root_password", "db", 3306);

    if (mysqli_connect_errno()) echo "Connection to mysql database (<code>http://db:3306</code>) failed with error: " . mysqli_connect_error();
    else echo "Connected successfully to database (<code>http://db:3306</code>)";

    echo phpinfo();
    ?>
</body>

</html>