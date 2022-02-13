<?php
session_start();
?>
<?php
$cookie_name = "rubel";
$cookie_value = "rubel";
// setcookie("myCookie", $value, time()+3600);
setcookie($cookie_name, $cookie_value, time() + 14400, "/"); // 3600 = 1 hour
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<title>User Login</title>
</head>
<body>

<?php
if($_SESSION["name"]) {
?>
<h1 style="text-align:center;">Welcome To Admin Panel</h1>
Welcome <?php echo $_SESSION["name"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
<br>
<a href="table/index.php" class="btn btn-info" role="button">See the Table</a>
<br>

<?php
}else echo "<h1>Please login first .</h1>";
?>


</body>
</html>