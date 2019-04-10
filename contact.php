<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"Learning");
if(isset($_POST{"submit1"}))
	{
		$board=$_POST["board"];
		$subject=$_POST["subject"];
		$name=$_POST["name"];
		$email=$_POST["email"];
		$phno=$_POST["phno"];
		$message=$_POST["message"];
		$result=mysqli_query($link,"insert into contact values('$board','$subject','$name','$email','$phno','$message')");
		echo "<script>
         window.location.href='contact.html';
		 alert('Thank you');
        </script>";
		
	}
else{
				echo "<script>
                alert('invalid field!');
                window.location.href='contact.html';
                </script>";           
	}
?>
   