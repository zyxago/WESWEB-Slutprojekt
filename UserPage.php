<?php
require "Connect/Connect.php";
$_SESSION["site"] = "userPage";
$user = $_SESSION["user"];
if(!empty($_GET["action"]) && $_GET["action"] == "change") {
	if(!empty($_POST["changeUser"])) {
		if(!empty($_POST["username"])) {
			$newUsername = $_POST["username"];
			if($sql = mysqli_prepare($conn, "UPDATE users SET username = ? WHERE username = ?")) {
				mysqli_stmt_bind_param($sql, "ss", $newUsername, $user);
				if(mysqli_stmt_execute($sql)) {
					echo "Username changed!";
					$_SESSION["user"] = $newUsername;
				}
				else {
					echo "Failed to change username";
					echo $conn->error;
				}
			}
		}
	}
	if(!empty($_POST["changeEmail"])) {
		if(!empty($_POST["email"])) {
			$newEmail = $_POST["email"];
			if($sql = mysqli_prepare($conn, "UPDATE users SET email = ? WHERE username = ?")) {
				mysqli_stmt_bind_param($sql, "ss", $newEmail, $user);
				if(mysqli_stmt_execute($sql)) {
					echo "Email changed!";
				}
				else {
					echo "Failed to change email";
				}
			}
		}
	}
}
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Mina uppgifter</title>
    <link href="CSS\cssStyleSheet.css" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
		<?php
		require "Templates\Header.html";
		require "Templates\Nav.php";
		?>
    <main>
		<p>Markera de uppgifter du vill ändra<p>
		<form action="UserPage.php?action=change" method="post">
			<label for="username">Användarnamn</label>
			<input type="text" name="username">
			<input type="checkbox" name="changeUser" value="username"><br><br>
			<label for="email">Email</label>
			<input type="text" name="email">
			<input type="checkbox" name="changeEmail" value="email"><br><br>
			<input type="submit" value="Redigera">
		</form>
    </main>
	<?php
	require "Templates\Footer.html";
	?>
  </div>
</body>
</html>