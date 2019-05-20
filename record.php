	 <center> <form method="post" action=" ">
             <input type='text' value="" name="ss" id="txtsearch" />
             <input type="submit" name="submit" value="submit"/>
			 </form></center>



<table border="2">
<tr>
<th>id </th>
<th> name</th>
<th> email</th>
<th> password</th>
<th>photo </th>
<th> edit</th>
<th> del</th>
</tr>




<?php 
 $con=mysqli_connect('localhost','root','','updel');
  if($con==false)
{
	echo"con notok";
}
   if(!empty($_POST['ss']))
        {

	$ss=($_POST['ss']);
	
	$query=" SELECT * FROM `userdata` WHERE name LIKE '%".$ss."%'";
	$run=mysqli_query($con,$query);
		  while($data=mysqli_fetch_assoc($run))
	  {
		  ?>
		  
	 <tr>
		  
		  <td><?php echo $data['id']; ?></td>
		   <td><?php echo $data['name']; ?></td>
		    <td><?php echo $data['email']; ?></td>
			 <td><?php echo $data['password']; ?></td>
			 <td> <img src="images/<?php echo $data['images']; ?>" width="200" height="200"></td>
			  <td><a href="edit.php?id=<?php echo $data['id']; ?>">edit</a></td>
			  <td><a href="del.php?id=<?php echo $data['id']; ?>">delete</a></td>
			  </tr>
			  
			  
			  <?php
	  }
		}
		
	  
	








else
{
$con=mysqli_connect('localhost','root','','updel');
$query=" SELECT * FROM `userdata`";
$run=mysqli_query($con,$query);
 	if($run==TRUE)
	{
	   while($data=mysqli_fetch_assoc($run))
	  {
		  ?>
		 
		  <tr>
		  
		  <td><?php echo $data['id']; ?></td>
		   <td><?php echo $data['name']; ?></td>
		    <td><?php echo $data['email']; ?></td>
			 <td><?php echo $data['password']; ?></td>
			 <td> <img src="images/<?php echo $data['images']; ?>" width="200" height="200"></td>
			  <td><a href="edit.php?id=<?php echo $data['id']; ?>">edit</a></td>
			  <td><a href="del.php?id=<?php echo $data['id']; ?>">delete</a></td>
			  </tr>
			  
			  <?php
	  
	  }
	}
	}
	
 function showdata(){
	 global $con;
 }
 
 

?>
</table>
<br>
<a href="index.php"> insert more</a>

