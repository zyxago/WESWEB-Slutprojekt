<?php
require "Connect\Connect.php";
//WIP
if(!empty($_POST["user"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
	if($stmt = mysqli_prepare($conn, "INSERT INTO users(username, email, password)
	VALUES (?, ?, ?)")){
		mysqli_stmt_bind_param($stmt, $_POST["user"], $_POST["email"], $_POST["password"]);
		mysqli_stmt_execute($stmt);
	}
	/*
	if($conn->query($sql) === TRUE) {
		echo "New user created! :D";
	}
	else {
		echo "Error: {$sql} <br> {$conn->error}";
	}*/
}
else {
	echo "erorr :/";
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
		?>
    <main>
		<?php
		if(empty($_GET["intent"])) {
			
		}
		else {
			if($_GET["intent"] == "LoggaIn") {
				echo '<h2>Logga in</h2>
					<form action="LoginOrRegister.php" method="post">
						<label for="username">Användarnamn</label>
						<input type="text" id="username" name="user" required><br><br>
						<label for="password">Lösenord</label>
						<input type="password" id="password" name="password" required><br><br>
						<input type="submit" value="Logga in">
					</form>';
			
			}
			else {
				echo '<h2>Registrera</h2>
					  <form action="LoginOrRegister.php" method="post">
						<label for="username">Användarnamn</label>
						<input type="text" id="username" name="user" required><br><br>
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