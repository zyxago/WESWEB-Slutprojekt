<?php
require "Connect\Connect.php";
$_SESSION["site"] = "write";

//Lägger till en artikel om man har skrivit en och submitat den
if(!empty($_POST["text"])) {
$user = $_SESSION["user"];
$articleText = $_POST["text"];
	$sql = "SELECT ID
			FROM users
			WHERE '$user' = username";
	$result = $conn->query($sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			$userID = $row["ID"];
		}
	}
	if($sql = mysqli_prepare($conn, "INSERT INTO article(userID, articleText)
			VALUES (?, ?)")) {
				mysqli_stmt_bind_param($sql, "ss", $userID, $articleText);
				if(mysqli_stmt_execute($sql)) {
					echo "New article added";
				}
				else {
					echo $conn->error;
				}
				mysqli_stmt_close($sql);
	}
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Skriv artikel</title>
    <link href="CSS\cssStyleSheet.css" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
		<?php
		require "Templates\Header.html";
		require "Templates\Nav.php";
		?>
		<main class="write">
			<p>Skriv artikel här</p>
			<form action="WriteArticle.php" method="post">
				<textarea placeholder="Skriv artikeln här" name="text" rows="40" cols="150" required></textarea><br><br>
				<input type="submit" value="Submit">
			</form>
		</main>
		<?php
		require "Templates\Footer.html";
		?>
  </div>
</body>
</html>