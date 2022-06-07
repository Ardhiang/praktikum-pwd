
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewspot" content="width=device-width, initial-scale=1">
		<title>login page</title>
	</head>
	<body>
		<form action="cek login.php" method="post" class="form-login">
			<?php
			    if(isset($_GET['pesan'])){
			    	if($_GET['pesan']=="gagal"){
			    		echo "<h1><center>username dan password tidak sesuai !</center></h1";
			    	}
			    }
			    ?>
			<div class="bgf">
				<div class="f-out">
					<h4>login</h4>
					<div class="line">
						<input type="text" placeholder="username" name="uname" class="from control"
						required>
					</div>
					<div class="line">
						<input type="password" placeholder="password" name="psw" class="
						from-control" required>	
					</div>
					<div class="line">
						<button type="submit" class="btn btn-danger"> login</button>
						<a href="index.php"><button type="button" class="btn btn-light">cancel</button></a>
					</div>
					<div class="line">
						<label>Don't have an account? Click <a href="register.php">here</a></label
							>
					</div>
				</div>
			</div>
		</form>
	</body>
</html>							