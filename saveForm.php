<?php 

$conn=mysqli_connect('localhost','root','','manan');

if (isset($_POST['saveForm'])) 
{
	$full_name=$_POST['full_name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	$sql="INSERT INTO `messages`(`full_name`, `email`, `phone`, `subject`, `message`) 
		  VALUES('$full_name','$email','$phone','$subject','$message')";
	$data=mysqli_query($conn,$sql);

	if ($data) 
	{
		$status=(array("statusCode"=>200));
	}

	echo json_encode($status);
}

?>