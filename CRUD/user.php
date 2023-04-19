<?php
$db=mysqli_connect("localhost","root","","phpcrud_db");
?>
<html>
<head>

<title>PHP CRUD</title>
</head>
<body>
<form method="post">
<hr>
<h3>User List</h3>
<table style="width:80%" border="1">
<tr>
<th>S.No</th>
<th>Name</th>
<th>Email</th>
<th>Address</th>
<th>Operations</th>
</tr>
<?php
$i=1;
$qry="select * from user";
$run=$db->query($qry);
if($run->num_rows>0)
{
	while($row=$run->fetch_assoc())
	{
		$id=$row['user_id'];
?>
<tr>
<td><?php echo $i++;?></td>
<td><?php echo $row['name']?></td>
<td><?php echo $row['email']?></td>
<td><?php echo $row['address']?></td>
<td>
<a href="edit.php?id=<?php echo $id;?>">Edit</a>
<a href="delete.php?id=<?php echo $id;?>" onclick="return confirm('Are you Sure?')">Delete</a>
</td>
</tr>

<?php
	}
}
?>


<label>Name:</label>
<input type="text"name="name"placeholder="Enter your name"required>
<br><br>
<label>Email:</label>
<input type="email"name="email"placeholder="Enter your Email">
<br><br>
<label>Address:</label>
<input type="text"name="address"placeholder="Enter your address">
<br><br>
<input type="submit"name="submit"value="Submit">
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$qry="insert into user values(null,'$name','$email','$address')";
	if(mysqli_query($db,$qry))
	{
		echo'<script>alert("User Registration Successfully");</script>';
		header('location:user.php');
	}
	else
	{
		echo mysqli_error($db);
	}
}
?>