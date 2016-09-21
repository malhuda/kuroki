<?php
// Error reporting:

require "./includes/functions_bookmark.php";

// Setting the content-type header to javascript:

// Validating the input data
if(empty($_POST['url']) || empty($_POST['title']) || empty($_POST['image']) || !validateURL($_POST['url']))

// Sanitizing the variables
$_POST['url'] = sanitize($_POST['url']);
$_POST['title'] = sanitize($_POST['title']);
$_POST['image'] = sanitize($_POST['image']);

// Inserting, notice the use of the hash field and the md5 function:
mysqli_query($connect, "	INSERT INTO bookmark (hash,username,url,title,image)
				VALUES (
					'".md5($_POST['url'])."',
					'".$_SESSION['FBID']."',
					'".$_POST['url']."',
					'".$_POST['title']."',
					'".$_POST['image']."'
					
				)");

$message = '';
if(mysqli_affected_rows($connect)!=1)
{
	$message = 'Item ini sudah masuk bookmark';
}
else
$message = 'Ditambahkan ke bookmark';


?>

/* JavaScript Code */

function displayMessage(str)
{
	// Using pure JavaScript to create and style a div element
    
	var d = document.createElement('div');
	
	with(d.style)
	{
    	// Applying styles:
        
		// Applying styles:
        
		position='fixed';
		height = '50px';
		color = '#fff';
		padding = '15px 22px 40px 20px';
		fontSize = '15px';
		fontFamily = '"Myriad Pro",Arial,Helvetica,sans-serif';
		textAlign = 'center';
		zIndex = '100000';
		backgroundColor = 'rgb(23, 22, 29)';
		boxShadow = '0 -3px #eb4f9a inset';
		width = '310px';
		bottom = '0';
		top = '50%';
		margin = '0 auto';
		right = '0';
		left = '0';
        
	}
	
	d.setAttribute('onclick','document.body.removeChild(this)');
    
    // Adding the message passed to the function as text:
	d.appendChild(document.createTextNode(str));
	
    // Appending the div to document
	document.body.appendChild(d);
	
    // The message will auto-hide in 3 seconds:
    
	setTimeout(function(){
		try{
			document.body.removeChild(d);
		}	catch(error){}
	},2000);
}


<?php 

// Adding a line that will call the JavaScript function:
echo 'displayMessage("'.$message.'");';

?>