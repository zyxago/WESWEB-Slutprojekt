<?php
require "Connect\Connect.php";
$_SESSION["site"] = "write";
if(!empty($_POST["text"])) {//TODO FIXA ALL SQL
	if($sql = mysqli_prepare($conn, "INSERT INTO article(, password)
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
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Logga in eller Registrera</title>
    <link href="CSS\cssStyleSheet.css" rel="stylesheet">
</head>
<body id="">
	<div class="wrapper">
		<?php
		require "Templates\Header.html";
		require "Templates\Nav.php";
		?>
		<main class="write">
			<form action="WriteArticle.php" method="post">
				<textarea placeholder="Skriv artikeln här" id="text" name="text" rows="40" cols="150" required></textarea><br><br>
				<input type="submit">
			</form>
		</main>
	</div>
</body>
<?php
//Ska komma i slutet på sidan
require "Templates\Footer.html";
?>