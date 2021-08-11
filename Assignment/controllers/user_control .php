<?php
	session_start();
	include 'controllers/control.php';
	//include 'controllers/user_control .php';
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$err_db="";
	$error="";
	$pname="";
	$err_pname="";
	$pprice="";
	$err_pprice="";
	$sales="";
	$err_sales="";
	$ptype="";
	$err_ptype="";
	$hasError=false;
	
	if(isset($_POST["login"]))
	{
		
		if($_POST["username"]=="")
		{
			$err_uname="Username required";
			$hasError=true;
		}
		else
		{
			$uname=$_POST["username"];
		}
		if($_POST["password"]=="")
		{
			$err_pass="Password required";
			
			$hasError=true;
		}
		else
		{
			$pass=$_POST["password"];
		}
		if(authentication($_POST["username"],$_POST["password"]))
		{
				
				$_SESSION["loggeduser"] = $_POST["username"];
				header("Location: Add_cateogories.php");
			
		}
		$error="Username Password Invalid";
		
		
		
		
	}
	
	if(isset($_POST["signup"]))
	{
		if($_POST["name"]=="")
		{
			$err_name="Name required";
			$hasError=true;
		}
		else
		{
			$name=$_POST["name"];
		}
		if($_POST["username"]=="")
		{
			$err_uname="Username required";
			$hasError=true;
		}
		else
		{
			$uname=$_POST["username"];
		}
		if($_POST["password"]=="")
		{
			$err_pass="Password required";
			$hasError=true;
		}
		else
		{
			$pass=$_POST["password"];
		}
		
		if(!$hasError)
		{
			$rs=insertuser($_POST["name"],$_POST["username"],$_POST["password"]);
			if($rs === true)
			{
				header("Location: Login.php");
			}
				$error= "Username already taken";
		}
		
		
	}
	
	function insertuser($name,$uname,$pass)
	{
		 $query = "insert into users values (NULL,'$name','$uname','$pass')";
		 return execute($query);
		
	}
	function authentication($uname,$pass)
	{
		$query="select * from users where username='$uname' and passw='$pass'";
		$rs = get($query);
		if(count($rs)>0)
		{
			return true;
		}	
		return false;
		
	}
?>