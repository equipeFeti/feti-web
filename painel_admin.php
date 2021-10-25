<?php

session_start();

if(!isset($_SESSION['user'])){

    header('Location:admin.php');
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css" />
    <title>admin-page</title>
</head>
<body>
<h2>Olá <?php echo $_SESSION['user'] ; ?></h2>
<a href="logout.php" class = "logout btn">logout</a>
</body>
</html>

