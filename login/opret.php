<?php

$connection = mysql_connect('localhost', 'root', '');

if (!$connection){

    die("Database Connection Failed" . mysql_error());

}

$select_db = mysql_select_db('login');

if (!$select_db){

    die("Database Selection Failed" . mysql_error());

}
?>
<?php

    require('connect.php');

    // If the values are posted, insert them into the database.

    if (isset($_POST['username']) && isset($_POST['password'])){

        $username = $_POST['username'];

        $email = $_POST['email'];

        $password = $_POST['password'];

  

        $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";

        $result = mysql_query($query);

        if($result){

            $msg = "User Created Successfully.";

        }

    }

    ?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="opret css.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="register-form">

<h1>Register</h1>

<form action="" method="POST">

    <p><label>User Name : </label>

    <input id="username" type="text" name="username" placeholder="username" /></p>

    <p><label>E-Mail : </label>

     <input id="password" type="email" name="email"/></p>

     <p><label>Password : </label>

     <input id="password" type="password" name="password" placeholder="password" /></p>

  

    <a class="btn" href="login.php">Login</a>

    <input class="btn register" type="submit" name="submit" value="Register" />

    </form>

</div>

</body>
</html>