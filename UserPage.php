<?php
require "Connect/Connect.php";
$_SESSION["site"] = "userPage";
$user = $_SESSION["user"];
$admin = 0;
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

if(isset($_POST["ToRemove"])) {
	$id = $_POST["ToRemove"];
	$sql = "DELETE FROM article WHERE ID = '$id'";
	if($conn->query($sql) === TRUE) {
		echo "Removed Successfully!";
	}
	else {
		echo "Error: {$conn->error}";
	}
}

$sql = "SELECT admin
FROM users
WHERE '$user' = username";
$result = $conn->query($sql);
if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		$admin = $row["admin"];
	}
}
else {
	echo $conn->error;
}

function GetArticles($admin, $conn) {
if($admin == 1) {
	$n = 0;
	$articels = array();
	$sql = "SELECT ID
	FROM article";
	$result = $conn->query($sql);
	if(mysqli_num_rows($result)) {
		while($row = mysqli_fetch_assoc($result)) {
			$articles[$n] = $row["ID"];
			$n++;
		}
	}
	echo "<form action='UserPage.php' method='post' class='ArticleToRemove'>";
	foreach($articles as $value) {
		echo "<label for='{$value}'>Artikel: {$value}</label>";
		echo "<input type='radio' value='{$value}' name='ToRemove'>";
	}
	echo "<input type='submit' value='Ta bort artikel'>";
	echo "</form>";
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
    <main class="userPage">
		<?php
		echo "<p>Hej {$_SESSION["user"]}!</p>";
		?>
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
		<?php
		if($admin == 1) {
			GetArticles($admin, $conn);
		}
		?>
    </main>
	<?php
	require "Templates\Footer.html";
	?>
  </div>
</body>
</html>