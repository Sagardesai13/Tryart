<?php
// Turn off all error reporting
error_reporting(0);
?>

<?php

$sname= "localhost";
$uname= "root";
$password = "";

$db_name = "tryart";
$conn = mysqli_connect($sname, $uname, $password, $db_name);
/*if (!$conn) {
	echo "<br>"."Starting Connection failed!";
}
else{
	echo "<br>"."Success";
}*/

$rating = $_POST['rating'];
$filename = $_FILES['file'];
$name = $_POST['name'];
$email = $_POST['email'];
$feedback_txt = $_POST['suggestion'];


function checkEmail($email) {
    //$email = mysqli_real_escape_string($email);
    $sql = mysqli_query("SELECT * FROM feedback_form WHERE email='$email'");
    if (mysqli_num_rows($sql) == 0) {
        return true;
    }
    return false;
}
/*if (checkEmail($_POST['email'])) {
    echo "hello";
} else {
    echo "Oops";
}*/


if(isset($_POST['submit']))
{

	$var1 = rand(1111,9999);  // generate random number in $var1 variable
    	$var2 = rand(1111,9999);  // generate random number in $var2 variable

    	$var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
    	$var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

	$allowed_extension = array('png', 'jpg', 'jpeg', 'gif');
	$filename = $_FILES['file']['name'];
	$file_extension = pathinfo($filename, PATHINFO_EXTENSION);
	if (!in_array($file_extension, $allowed_extension)) 
	{
		echo '<script>alert("Select an Image, Only png, jpg, jpeg, gif files are allowed"); window.location.href = "feedback/index.php";</script>';
	}
	else if (file_exists("uploads/". $_FILES['file']['name']))
	{
		$filename = $_FILES['file']['name'];
		echo '<script>alert("Image is already exists"); window.location.href = "index.php";</script>';
	}
	else
	{

		if (empty($_POST['rating'])) 
		{
			echo '<script>alert("Please select a rating"); window.location.href = "index.php";</script>';
		}
    		else if (empty($_POST['name']))
		{
			echo '<script>alert("Please enter a name"); window.location.href = "index.php";</script>';
		}
		else if (!preg_match ("/^[a-zA-Z-' ]*$/", $name) )
		{
	  		echo '<script>alert("Please enter a valid name"); window.location.href = "index.php";</script>';
		}
		else if (empty($_POST['email'])) 
		{
			echo '<script>alert("Please enter an email"); window.location.href = "index.php";</script>';
		}
		else if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email))
		{ 
			echo '<script>alert("Please enter a valid email"); window.location.href = "index.php";</script>';
		}
		else if (!checkEmail($_POST['email'])) 
		{
    			echo '<script>alert("Email is already exists"); window.location.href = "index.php";</script>';
		}
		else if (empty($_POST['suggestion']))
		{
			echo '<script>alert("Please enter a feedback"); window.location.href = "index.php";</script>';
		}
		else
		{	
			$filename = $_FILES["file"]["name"];
    			$tempname = $_FILES["file"]["tmp_name"];
    			$folder = "uploads/".$var3.$filename;
    			//echo "$folder";
    			$dst_db = "uploads/".$var3.$filename;
    			//$dst_db = $var3.$filename;
    			move_uploaded_file($tempname,$folder);

			$query ="insert into `feedback_form` (`Name`, `Email Id`, `Rating`,`Image`, `Feedback`)values('$name', '$email', '$rating', '$dst_db', '$feedback_txt')";
			$result = mysqli_query($conn, $query);
			if (!$result) 
			{
				echo "<br>"."Connection failed!";
			}
			else
			{
				echo '<script>alert("Thank you for your feedback!"); window.location.href = "index.php";</script>';
			}
		}
	}
}
?>
