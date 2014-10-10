<?php
/* start the session */
session_start();
?>

<!DOCTYPE html>
<html lang="es-MX">

<head>
 <title>Check Login</title>
 <meta charset = "utf8" />
</head>

<body>

<?php

 $host_db = "mysql.hostinger.mx";
 $user_db = "u459510198_black";
 $pass_db = "uCzHCwa@T0276StL;V";
 $db_name = "u459510198_don";
 $tbl_name = "usuarios";

// Connect to server and select databse.
mysql_connect("$host_db", "$user_db", "$pass_db")or die("Cannot Connect to Data Base.");

mysql_select_db("$db_name")or die("Cannot Select Data Base");

// sent from form
$username = $_POST['username'];
$password = $_POST['password'];

$sql= "SELECT * FROM $tbl_name WHERE username = '$username' and password='$password'";

$result=mysql_query($sql);

// counting table row
$count = mysql_num_rows($result);
// If result matched $username and $password

if($count >= 1){

 $_SESSION['loggedin'] = true;
 $_SESSION['username'] = $username;
 $_SESSION['start'] = time();
 $_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ;

echo "<br> Bienvenido! " . $_SESSION['username'];

}
 else {
 echo "<br/>Username o Password estan incorrectos.<br>\n<br>Si usted solo quiere molestar, larguese</br>";

 echo "<a href='http://donquinielas.zz.vc/login.html'>Volver a Intentarlo</a>";
}

?>

</body>
</html>
	