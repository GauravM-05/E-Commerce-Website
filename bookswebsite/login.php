<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="bookstore";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $username = $_POST['username'];
	 $pass = $_POST['pass'];

	 $sql_query = "INSERT INTO login_form (username, pass) VALUES ('$username', '$pass')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		header("Location: index.html");
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>

