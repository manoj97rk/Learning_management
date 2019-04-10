<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"Learning");
if(isset($_POST{"submit1"}))
	{
		
		$email=$_POST["email"];
		
		$result=mysqli_query($link,"insert into sub_home values('$email')");
		echo "<script>
         window.location.href='index.html';
		 alert('Thank you');
        </script>";
		
	}
else{
				echo "<script>
                alert('invalid field!');
                window.location.href='index.html';
                </script>";           
	}
?>
   