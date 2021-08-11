<?php
session_start();
	include 'controllers/cat_control.php';
	
?>

<html>
	<body>
	<h1>Welcome <?php echo $_SESSION["loggeduser"];?></h1>
	<h1><?php echo $db_err;?></h1>
		<form action="" method="POST">
			<table align="center">
				<tr>
					<td>
						<input type="text" name="cn" value="<?php echo $cname;?>" placeholder="Category name"><span><?php echo $err_cname;?></span>
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="submit" name="addcategory" value="Add Category">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>