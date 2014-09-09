<?php

    if(isset($msg) & !empty($msg)){

        echo $msg;

    }

 ?>
<?php

$connection = mysql_connect('localhost', 'root', '');

if (!$connection){

    die("Database Connection Failed" . mysql_error());

}

$select_db = mysql_select_db('login');

if (!$select_db){

    die("Database Selection Failed" . mysql_error());

}?>
<?php  //Start the Session

session_start();

 require('connect.php');

//3. If the form is submitted or not.

//3.1 If the form is submitted

if (isset($_POST['username']) and isset($_POST['password'])){

//3.1.1 Assigning posted values to variables.

$username = $_POST['username'];

$password = $_POST['password'];

//3.1.2 Checking the values are existing in the database or not

$query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";

  

$result = mysql_query($query) or die(mysql_error());

$count = mysql_num_rows($result);

//3.1.2 If the posted values are equal to the database values, then session will be created for the user.

if ($count == 1){

$_SESSION['username'] = $username;

}else{

//3.1.3 If the login credentials doesn't match, he will be shown with an error message.

echo "Invalid Login Credentials.";

}

}

//3.1.4 if the user is logged in Greets the user with message

if (isset($_SESSION['username'])){

$username = $_SESSION['username'];

echo "Hai " . $username . "

";

echo "This is the Members Area

";

echo "<a href='logout.php'>Logout</a>";
}else

//3.2 When the user visits the page first time, simple login form will be displayed.
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="login css.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="register-form">

<h1>Login</h1>

<form action="index.php" method="POST">

    <p><label>User Name : </label>

    <input id="username" type="text" name="username" placeholder="username" /></p>

  

     <p><label>Password : </label>

     <input id="password" type="password" name="password" placeholder="password" /></p>

  

    <a class="btn" href="index.php">Signup</a>

    <input class="btn register" type="submit" name="submit" value="Login" />

    </form>

</div>




    </body>
</html>