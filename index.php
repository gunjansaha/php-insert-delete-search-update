<?php
   
	if(isset($_POST["submit"]))
{   
    $con=mysqli_connect('localhost','root','','updel');
    $name=$_POST['name'];
	
    $email=$_POST['email'];
	$password=$_POST['password'];
	
	   $imagename=$_FILES['img1']['name'];
	  $tempimagename=$_FILES['img1']['tmp_name'];
	  move_uploaded_file($tempimagename,"images/$imagename");
	 
	  
	  $query="INSERT INTO userdata(name,email,password,images) VALUES ('$name','$email','$password','$imagename')" ;
	 $run=mysqli_query($con,$query);
	
	
	if($run==true)
	{
		?>
		<script>alert("data is inserted");</script>
		<?php
		
	}
}
        
		?>


<html>
<form  action=" " method="post" enctype="multipart/form-data">
<input type ="text" name="name" placeholder="user name">
<input type ="text" name="email" placeholder="user email">
<input type ="text" name="password" placeholder="password******">
<input type="file" name="img1">
<input type ="submit" value ="click me!" name="submit">

</form>
<a href="record.php"> show all record</a>
</html>
