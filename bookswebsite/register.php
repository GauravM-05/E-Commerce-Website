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
	 $fullname = $_POST['fullname'];
	 $pass = $_POST['pass'];
	 $email = $_POST['email'];

	 $sql_query = "INSERT INTO register_form (fullname, pass, email) VALUES ('$fullname','$pass','$email')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		header("Location: loginpage.html");
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>