<?php
class utilities{	
	function connect_db(){
		$dbh=mysqli_connect("localhost","root","","ezeepay");
		if(mysqli_connect_errno()){
	  		echo "<script>alert('Failed to connect to MySQL');</script>";
	  	}else{
			return $dbh;
		}
	}
}
?>