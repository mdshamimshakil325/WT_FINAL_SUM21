<?php
	include 'controllers/user_control .php';
	
?>
<html>
	<body>
	<form action="" method="POST">
		<table align="center" border="1">
			<tr align="center">
				<td colspan="2">
					Log In<br>
					<?php echo $error; ?>
				</td>	
				
			</tr>
			<tr>
				<td>
					Username:
				</td>
				<td>
					<input type="text" name="username" value="<?php echo $uname; ?>" placeholder="Username"> <br>
					<span><?php echo $err_uname; ?></span>
				</td>
			</tr>
			<tr>
				<td>
					Password:
				</td>
				<td>
					<input type="password" name="password" value="<?php echo $pass; ?>" placeholder="Password"> <br>
					<span><?php echo $err_pass; ?></span>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="login" value="LogIn"><br>
					<a target="" href="Signup.php">Not registered? Sign Up</a>
				</td>
			</tr>
			
		</table>
	</form>
	</body>
</html>