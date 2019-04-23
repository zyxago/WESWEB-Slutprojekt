<?php
require "Connect/Connect.php";
$_SESSION["site"] = "userPage";

if(!empty($_GET["action"]) && $_GET["action"] == "change") {
	if(!empty($_POST["changeUser"])) {
		if(!empty($_POST["username"])) {
			
		}
	}
	if(!empty($_POST["changeEmail"])) {
		if(!empty($_POST["email"])) {
			
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