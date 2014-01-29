<?php
class utilities{	
	public function connect_db(){
		$dbh=mysqli_connect("localhost","root","","ezeepay");
		if(mysqli_connect_errno()){
	  		echo "<script>alert('Failed to connect to MySQL');</script>";
	  	}else{
			return $dbh;
		}
	}
	public function getName($uname){
		$connection=self::connect_db();
		$query="SELECT name from master_user where username='$uname'";
		$result=$connection->query($query);
		$temp_array=$result->fetch_array();
		$name=$temp_array[0];
		echo $name;
	}
	public function isAlreadyRegistered($user){
		$conn=self::connect_db();
		$query="SELECT COUNT(username) from master_user where username='$user'";
		$result=$conn->query($query);
		$temp_array=$result->fetch_array();
		if($temp_array[0]>0)
			return 1;
		else
			return 0;
	}
}
?>