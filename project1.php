<?php
$servername="localhost";
$username="root";
$password="";
$db_database="pgc";
$conn=mysqli_connect($servername,$username,$password,$db_database);
$sql="SELECT * FROM form";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		echo "name:".$row["name"]."<br/>"."father_name:".$row["father_name"]."<br/>"."mother_name:".$row["mother_name"]."<br/>"."dob".$row["dob"]."<br/>"."address:".$row["address"]."<br/>";
	}
}

?>