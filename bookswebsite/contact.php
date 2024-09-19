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
	 $firstname = $_POST['firstname'];
	 $lastname = $_POST['lastname'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $message = $_POST['message'];

	 $sql_query = "INSERT INTO contact_us (firstname,lastname,email,mobile,message) VALUES ('$firstname','$lastname','$email','$mobile','$message')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
        echo"Your Details Send Successfully !";
    }
    else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>