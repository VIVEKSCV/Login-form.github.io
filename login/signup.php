<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>
<<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>
<div class="register-photo">
<div class="form-container">
<div class="image-holder"></div>
<form method="post">
<h2 class="text-center"><strong>Create</strong> an account.</h2>
<div class="form-group"><input class="form-control" type="username" name="user_name" placeholder="Username"></div><br>
<div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div><br>
<div class="form-group">
<div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div><br>
</div>
<div class="form-group"><input id="button" type="submit" value="Signup"></div><a class="already" href="login.php">You already have an account? Login here.</a>
</form>
</div>
</div> 
<style type="text/css">
    .register-photo {
    background: #f1f7fc;
    padding: 80px 0
    }
    .register-photo .image-holder {
    display: table-cell;
    width: auto;
    background: url("pic4.jpg");
    background-size: cover
    }
    .register-photo .form-container {
    display: table;
    max-width: 900px;
    width: 90%;
    margin: 0 auto;
    box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1)
    }
    .register-photo form {
    display: table-cell;
    width: 400px;
    background-color: #ffffff;
    padding: 40px 60px;
    color: #505e6c
    }
    @media (max-width:991px) {
    .register-photo form {
    padding: 40px
    }
    }
    .register-photo form h2 {
    font-size: 24px;
    line-height: 1.5;
    margin-bottom: 30px
    }
    .register-photo form .form-control {
    background: transparent;
    border: none;
    border-bottom: 1px solid #dfe7f1;
    border-radius: 0;
    box-shadow: none;
    outline: none;
    color: inherit;
    text-indent: 0px;
    height: 40px
    }
    .register-photo form .form-check {
    font-size: 13px;
    line-height: 20px
    }
    .register-photo form .btn-primary {
    background: green;
    border: none;
    border-radius: 4px;
    padding: 11px;
    box-shadow: none;
    margin-top: 35px;
    text-shadow: none;
    outline: none !important
    }
    .register-photo form .btn-primary:hover,
    .register-photo form .btn-primary:active {
    background: green
    }
    .register-photo form .btn-primary:active {
    transform: translateY(1px)
    }
    .register-photo form .already {
    display: block;
    text-align: center;
    font-size: 12px;
    color: #6f7a85;
    opacity: 0.9;
    text-decoration: none
    }
    #button{
	display: block;
	width: 100%;
	height: 50px;
	border-radius: 25px;
	outline: none;
	border: none;
	background: rgb(0,0,0);
	background-size: 200%;
	font-size: 1.2rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 1rem 0;
	cursor: pointer;
	transition: 777ms;
}
#button:hover{
	background-position: right;
	display: block;
	background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(5,5,5,0) 46%, rgba(12,12,12,1) 100%);
	transform: scale(104%);
}

</style>
</body>
</html>