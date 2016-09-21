<?php


function checkuser($fuid,$ffname,$femail){
	global $connection;
    $check = mysqli_query($connection, "select * from users where Fuid='$fuid'");
	$check = mysqli_num_rows($check);
	if (empty($check)) { // if new user . Insert a new record		
	$query = "INSERT INTO users (Fuid,Ffname,Femail,Fverified) VALUES ('$fuid','$ffname','$femail','1')";
	mysqli_query($connection, $query);	
	} else {   // If Returned user . update the user record		
	$query = "UPDATE users SET Ffname='$ffname', Femail='$femail' where Fuid='$fuid'";
	mysqli_query($connection, $query);
	}
}

?>
