<?php
    include"dbcon.php";

    $id=$_GET['id'];
	$query= (" SELECT * FROM userdata WHERE  id='$id'");
	$run=mysqli_query($con,$query);
	$cheak=mysqli_fetch_assoc($run);
	if(isset($_POST['submit']))
{
	$con=mysqli_connect('localhost','root','','updel');
	
    $name=$_POST['name'];
	$id2=$_POST['id1'];
	
    $email=$_POST['email'];
	$password=$_POST['password'];
	  $imagename=$_FILES['img1']['name'];
	  $tempimagename=$_FILES['img1']['tmp_name'];
	  move_uploaded_file($tempimagename,"images/$imagename");
	
     $query= "UPDATE userdata SET name='$name',email='$email',password='$password', images='$imagename' WHERE id=$id2; ";
	$run=mysqli_query($con,$query);
	
	if($run==true)
	{
		?>
		<script>alert("data is updated"); 
		
		</script>
		
		<?php
	}
}
        
		?>
	
	
	
	
	
	
	




<form  action=" " method="post" enctype="multipart/form-data">
<input type ="text" name="name" value="<?php echo $cheak['name']; ?>"placeholder="user name">
<input type ="text" name="email" value="<?php echo $cheak['email']; ?>"   placeholder="user email">
<input type ="text" name="password" value="<?php echo $cheak['password']; ?>"  placeholder="password******">
<input type="file" name="img1" value="<?php echo $cheak['images']; ?>">
<input type="hidden" name="id1" value="<?php echo $cheak['id']; ?>">
<input type ="submit" value ="click me!" name="submit">

</form>
<a href="record.php"> show all record</a>
