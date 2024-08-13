<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/fafastore/css/style.css">
	<title>Login Act Admin</title>
</head>
</html>
<body id="bg-login">
	<div>
	<div class="box-login">
		<h2>Login Khusus Admin</h2>
		<form action="" method="POST">
			<input type="text" name="user" placeholder="Username" class="input-control">
			<input type="password" name="pass" placeholder="Password" class="input-control">
			<input type="submit" name="submit" value="Login" class="btn">
		</form>
		<?php 
			if(isset($_POST['submit'])){
				session_start();
				include 'db.php';

				$user = mysqli_real_escape_string($conn, $_POST['user']);
				$pass = mysqli_real_escape_string($conn, $_POST['pass']);

				$cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password = '".MD5($pass)."'");
				if(mysqli_num_rows($cek) > 0){
					$d = mysqli_fetch_object($cek);
					$_SESSION['status_login'] = true;
					$_SESSION['a_global'] = $d;
					$_SESSION['id'] = $d->admin_id;
					echo '<script>window.location="dashboard.php"</script>';
				}else{
					echo '<script>alert("Username atau password Anda salah!")</script>';
				}

			}
		?>
	</div>
	</div>
	<style>
#bg-login {
display: flex;
height: 100vh;
justify-content: center;
align-items: center;
}
.box-login {
	width: 300px;
	min-height: 200px;
	border:1px solid #ccc;
	background-color: #fff;
	padding:15px;
	box-sizing: border-box;
	border-radius: 20px;
}

.box-login h2 {
	text-align: center;
	margin-bottom: 15px;
	color: aqua;
} 
.input-control {
	width:100%;
	padding:10px;
	margin-bottom: 15px;
	box-sizing: border-box;
	border: solid 2px aqua;
	border-radius: 25px;
}
	</style>
</body>
</html>