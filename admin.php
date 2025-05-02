<?php
$servername="localhost";
$username="root";
$password="";
$db_database="pgc";
$conn=mysqli_connect($servername,$username,$password,$db_database);
$sql="SELECT * FROM admin";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		echo "admin:".$row["admin"]."<br/>"."password:".$row["password"]."<br/>";
     }
}
?>