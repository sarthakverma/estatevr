<?php

DEFINE ('DB_USER', 'signup');
DEFINE ('DB_PASSWORD', 'sarthak');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'project1');
 

 
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());

if(isset($_POST['submit'])){

 $data_missing = array();
  if(empty($_POST['Name'])){
 
        
        $data_missing[] = 'Name';
 
    }

else{

$Name = $_POST['Name'];
}

if(empty($_POST['Email'])){
 
        
        $data_missing[] = 'Email';
 
    }
else{

$Email = $_POST['Email'];
}

if(empty($_POST['Message'])){
 
        
        $data_missing[] = 'Message';
 
    }
else{

$Message = $_POST['Message'];
}


	$sql= "INSERT INTO `contact` (`Name`, `Email`, `Message`) VALUES ('$Name','$Email','$Message') ";

	 if (mysqli_query($dbc ,$sql))
{
	echo "<script> alert('Thankyou.. We will get back to you shortly') ;</script>";
}
}



?>