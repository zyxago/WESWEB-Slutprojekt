<?php
require "Connect\Connect.php";
$_SESSION["site"] = "LogOrReg";
if(!empty($_GET["action"])) {
	if($_GET["action"] == "register") {
		if(!empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
			$username = $_POST["username"];
			$email = $_POST["email"];
			$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
			if($sql = mysqli_prepare($conn, "INSERT INTO users(username, email, password)
			VALUES (?, ?, ?)")) {
				mysqli_stmt_bind_param($sql, "sss", $username, $email, $password);
				if(mysqli_stmt_execute($sql)) {
					echo "New user registerd! :)";
				}
				else {
					echo "Could not creat new user :(";
				}
				mysqli_stmt_close($sql);
			}
		}
	}
	else if($_GET["action"] == "login") {
		if(!empty($_POST["username"]) && !empty($_POST["password"])) {
			$username = $_POST["username"];
			$password = $_POST["password"];
			if($sql = mysqli_prepare($conn, "SELECT username, password 
			FROM users
			WHERE username = ?")) {
				mysqli_stmt_bind_param($sql, "s", $username);
				if(mysqli_stmt_execute($sql)) {
					mysqli_stmt_bind_result($sql, $col1, $col2);
					while(mysqli_stmt_fetch($sql)) {
						if(password_verify($password, $col2)) {
							$_SESSION["user"] = $col1;
							header("Location: index.php");
						}
						else {
							echo "Wrong password :(";
						}
					}
				}
			}
			else {
				echo "Invalid username :(";
			}
		}
	}
}
?>
<!DOCTYPE html>

<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Logga in eller Registrera</title>
    <link href="Frontend\CSS\cssStyleSheet.css" rel="stylesheet">
</head>
<body id="">
	<div id="wrapper">
		<?php
		require "Templates\Header.html";
		require "Templates\Nav.php";
		?>
    <main>
		<?php
		if(empty($_GET["intent"])) {
			
		}
		else {
			if($_GET["intent"] == "LoggaIn") {
				echo '<h2>Logga in</h2>
					<form action="LoginOrRegister.php?action=login" method="post">
						<label for="username">Användarnamn</label>
						<input type="text" id="username" name="username" required><br><br>
						<label for="password">Lösenord</label>
						<input type="password" id="password" name="password" required><br><br>
						<input type="submit" value="Logga in">
					</form>';
			}
			else {
				echo '<h2>Registrera</h2>
					  <form action="LoginOrRegister.php?action=register" method="post">
						<label for="username">Användarnamn</label>
						<input type="text" id="username" name="username" required><br><br>
						<label for"email">Email</label>
						<input type="text" id="email" name="email" required><br><br>
						<label for="password">Lösenord</label>
						<input type="password" id="password" name="password" required><br><br>
						<input type="submit" value="Registrera">
					</form>';
			}
		}
		?>
    </main>
    
	<?php
	require "Templates\Footer.html";
	?>
  </div>
</body>
</html>