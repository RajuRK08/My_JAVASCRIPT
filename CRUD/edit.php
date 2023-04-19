<?php
$db=mysqli_connect("localhost","root","","phpcrud_db");
if(!$db)
{
	die('error in db'.mysqli_error($db));
}
else
{
	$qry="select * from user where user_id";
	$run=$db->query($qry);
	if($run->num_rows>0)
	{
		while($row=$run->fetch_assoc())
		{
			$name=$row['name'];
			$email=$row['email'];
			$address=$row['address'];
		}
	}
}
?>
<html>
<head>
<title>Edit User</title>
</head>
<body>
<form method="post">
<label>Name</label>
<input type="text"name="name"value="<?php echo $name;?>">
<br><br>
<label>Email</label>
<input type="email"name="email"value="<?php echo $email;?>">
<br><br>
<label>address</label>
<input type="text"name="address"value="<?php echo $address;?>">
<br><br>
<input type="submit"name="update"value="Update">
</form>
</body>
</html>
<?php
if(isset($_POST['update']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$qry="update user set name='$name',email='$email',address='$address'where user_id";
	if(mysqli_query($db,$qry))
	{
		header('location:user.php');
	}
	else
	{
		echo mysqli_error($db);
	}
}
?>