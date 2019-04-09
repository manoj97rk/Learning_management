<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"iugale");
if(isset($_POST{"submit"}))
	{
		$name=$_POST["name"];
		$email=$_POST["email"];
		$phno=$_POST["phno"];
		$services=$_POST["services"];
		$result=mysqli_query($link,"insert into home values('$name','$email','$phno','$services')");
		if(strcmp($services, 'Marketing') == 0)
		{
			echo"<script>
			window.location.href='marketing.html';
			</script>";
		}
		else if(strcmp($services, 'Consulting') == 0)
		{
			echo"<script>
			window.location.href='consulting.html';
			</script>";
		}
		else if(strcmp($services, 'Service') == 0)
		{
			echo"<script>
			window.location.href='services.html';
			</script>";
		}
	}
else{
				echo "<script>
                alert('invalid field!');
                window.location.href='index.html';
                </script>";           
	}
?>
   