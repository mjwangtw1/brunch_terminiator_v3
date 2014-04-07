<?php
	$name = $_POST['name'];
	$password = $_POST['password'];
	
	if(!isset($_POST['name'])&&!isset($_POST['password']))
	{
		//Visitor needs to enter a name and password
		
?>

<center>
<h1> Please Log in</h1>
This page requires login.
<form method ="post" action="logindb.php">
<table border = "0">
<tr>
	<th>Email addr</th>
	<td><input type="text" name="name"></td>
</tr>
<tr>
	<th>Password</th>
	<td><input type="password" name="password"></td>
</tr>
<tr>
	<td colspan="2" align="center">
	<input type="submit" value="login">
	</td>
</tr>
</table>
</form>
<a href="create_account.php" style="color:red">Create Account</a><br />
<a>2011 Mou-Chun Wang.</a>
</center>

<?php
	}
	else
	{
		//connect to mysql
		$mysql = mysqli_connect( 'localhost', 'webauth', 'webauth' );
		if(!$mysql)
		{
			echo 'Cannot connect to database1.';
			exit;
		}
		//select the appopriate database
		$selected = mysqli_select_db($mysql, 'auth');
		if(!$selected)
		{
			echo 'Cannot connect to database2';
			exit;
		}
		
		//query the database to see if there is a record which matches
		$query = "select count(*) from authorized_users where
				  name = '$name' and
				  password = '$password'";
				  
		$result = mysqli_query($mysql, $query);
		if(!$result)
		{
			echo 'Cannot run query.';
			exit;
		}
		
		$row = mysqli_fetch_row($result);
		$count = $row[0];
		
		if($count >0)
		{
				//Visitor's name and password combination are correct
			echo ' <center><h1>Login Success!</h1>';
			echo '<h2>there you go.</h2>';
			echo '<img src="http://www.iconarchive.com/icons/sykonist/peter-griffin/256/Peter-Griffin-Football-head-icon.png" ¡@align=center>';
			echo '<h3>Heading to main page....</h3>';
			
			
			
			echo '</center>';
		}
		else
		{
			//visitor's name and password combination are not correct
			echo '<center><h1>Authorize fail</h1>';
			echo '<h2>Wrong password or ID does not exist</h2>';
			echo '<img src="http://images3.wikia.nocookie.net/__cb20091006204128/cleveland/images/e/e4/1210meg_griffin.gif" ¡@align=center>';
			echo '<h2>Redirect to login in 3 seconds</h2></center>';
			echo '<meta http-equiv="refresh" content="3;url=logindb.php" />';
		
		}
		
		$mysql->close();
	}	
?>
	
	
	