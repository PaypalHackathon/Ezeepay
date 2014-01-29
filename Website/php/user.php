<?php require_once("utilities.php");
$utils=new utilities();
session_start();
if(isset($_SESSION['user']))$user=$_SESSION['user'];
else header("location:../index.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ezee Pay | User</title>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../css/jquery-ui/jquery-ui-1.10.4.custom.min.css">
<link href="../css/user.css" rel="stylesheet">
<script src="../js/jquery.js"></script>
<script src="../js/jquery-ui.js"></script>
<script src="../js/user.js"></script>
</head>
<body>
<fieldset id="content">
	<legend>Welcome, <?php $utils->getName($user);?></legend>
    <table class="table table-condensed table-striped" id="userTable">
    	<tr><td><b>Unique ID:<b></td><td><b>asdegfurndhsjhrdopsnghddedsdgyhu<b></td></tr>
        
    </table>
</fieldset>
</body>
</html>
