<?php
	
	// LOGIN.PHP
	
	// errori muutujad peavad igal juhul olemas olema 
	$email_error = "";
	$password_error = "";
	$name_error = "";
	$phone_error = "";
	$email_error1 = "";
	$password_error1 = "";
	
	// kontrollime et keegi vajutas input nuppu
	//if($_SERVER['REQUEST_METHOD'] == 'POST') {
		//sign up errorid
		if(isset($_POST['sign_up'])){
		//echo "keegi vajutas nuppu";
		//kontrollin et e-post ei ole t�hi
		if ( empty($_POST['name']) ) {
			$name_error = "See v�li on kohustuslik";
		}
			if ( empty($_POST["phone"]) ) {
			$phone_error = "See v�li on kohustuslik";
		} else { 
		if(is_numeric($_POST["phone"])){
		}
		else{
			$phone_error = "siin peab olema number";
			}
		}
		if ( empty($_POST["email"]) ) {
			$email_error = "See v�li on kohustuslik";
		}
		//kontrollin, et parool ei ole t�hi
		if ( empty($_POST["password"]) ) {
			$password_error = "See v�li on kohustuslik";
		} else {
			// kui oleme siia j�udnud, siis parool ei ole t�hi
			// kontrollin, et oleks v�hemalt 8 s�mbolit pikk
			if(strlen($_POST["password"]) < 8) { 
				$password_error = "Peab olema v�hemalt 8 t�hem�rki pikk!";
			}
		}
	}
	//log_in errorid
	if(isset($_POST['log_in'])){
		if ( empty($_POST["email"]) ) {
			$email_error1 = "See v�li on kohustuslik";
		}
		if ( empty($_POST["password"]) ) {
			$password_error1 = "See v�li on kohustuslik";
		} else {
			if(strlen($_POST["password"]) < 8) { 
				$password_error1 = "Peab olema v�hemalt 8 t�hem�rki pikk!";
			}
		
	}}
?>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	
	<h2>Log in</h2>
		
		<form action="login.php" method="post" >
			<input name="email" type="email" placeholder="E-post"> <?php echo $email_error1; ?>
			<br><br>
			<input name="password" type="password" placeholder="Parool"> <?php echo $password_error1; ?> 
			<br><br>
			<input type="submit" value="Log in" name="log_in">
		</form><br>
	<a href=?create_user>Create User</a>
	
		<h2>Create User</h2>
		<form action="login.php"method="post"id="create_user">
		
			<input type="text" name="name" id="name" placeholder="Taisnimi" required /><?php echo $name_error; ?>
			<br><br>
			<input type="tel" name="phone" id="phone" placeholder="Telefoni nr."><?php echo $phone_error; ?>
			<br><br>
			<input type="text" name="age" id="age" placeholder="vanus">
			<br><br>
			<input type="text" name="playage" id="playage" placeholder="Mangu aastaid" >
			<br><br>
			<input type="email" name="email" id="email" placeholder="E-post"> <?php echo $email_error; ?>
			<br><br>
			<input type="password" name="password" id="password" placeholder="Parool" > <?php echo $password_error; ?> 
			<br><br>
			
			<input type="submit" value="Sign up" name="sign_up">
		</form>
	<text>
	Tahan teha lehe mis aitaks kokku viima erinevaid pri�i m�ngijaid.
	</text>
	
</body>
</html>