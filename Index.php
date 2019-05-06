<?php
require "Connect\Connect.php";
$_SESSION["site"] = "index";

//Loggar ut användaren
if(!empty($_GET["intent"]) && $_GET["intent"] == "out") {
	unset($_SESSION["user"]);
	header("Location: index.php");
}

//Ger en artikel plus eller minus poäng
if(isset($_POST["plus"])) {
	$articleID = $_GET["article"];
	$sql = "UPDATE article
	SET points=points+1
	WHERE $articleID = ID";
	if($conn->query($sql) === TRUE) {
		echo "YAY";
	}
}
if(isset($_POST["minus"])) {
	$articleID = $_GET["article"];
	$sql = "UPDATE article
	SET points=points-1
	WHERE $articleID = ID";
	if($conn->query($sql) === TRUE) {
		echo "YAY";
	}
}

//Lägger till en kommentar
if(!empty($_POST["comment"])) {
	$userID = GetUserID($_SESSION["user"], $conn);
	$articleID = $_GET["article"];
	$comment = $_POST["comment"];
	if($sql = mysqli_prepare($conn, "INSERT INTO comments(articleID, userID, comment)
			VALUES (?, ?, ?)")) {
				mysqli_stmt_bind_param($sql, "sss", $articleID, $userID, $comment);
				if(mysqli_stmt_execute($sql)) {
					echo "Comment submittet";
				}
				else {
					echo "Error commenting";
					echo $conn->error;
				}
				mysqli_stmt_close($sql);
	}
}

//$n är array key "räkanre" för articles array
$n = 0;
$articles = array(array("text"), array("score"), array("id"), array("userID"));
$comments = array(array("comment"), array("articleID"), array("userID"));
$sql = "SELECT *
		FROM article";
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		$articles["text"][$n] = $row["articleText"];
		$articles["score"][$n] = $row["points"];
		$articles["id"][$n] = $row["ID"];
		$articles["userID"][$n] = $row["userID"];
		$n++;
	}
}

//$m är array key "räkanre" fär comments array
$m = 0;
$sql = "SELECT *
		FROM comments";
$result = $conn->query($sql);
if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		$comments["comment"][$m] = $row["comment"];
		$comments["articleID"][$m] = $row["articleID"];
		$comments["userID"][$m] = $row["userID"];
		$m++;
	}
}

//Hämtar användar id utifrån användarnamn
function GetUserID($username, $conn) {
	$sql = "SELECT ID
	FROM users
	WHERE '$username' = username";
	$result = $conn->query($sql);
	if(mysqli_num_rows($result)) {
		while($row = mysqli_fetch_assoc($result)) {
			return $row["ID"];
		}
	}
	else {
		echo $conn->error;
	}
}

//Hämtar användarnamn från användar id
function GetUsername($userID, $conn) {
	$sql = "SELECT username
	FROM users
	WHERE $userID = ID";
	$result = $conn->query($sql);
	if(mysqli_num_rows($result)) {
		while($row = mysqli_fetch_assoc($result)) {
			return $row["username"];
		}
	}
	else {
		echo $conn->error;
	}
}

//Skriver ut artiklar och kommentarer på artiklarna
function WriteArticle($n, $m, $articles, $comments, $conn) {
	for($i = 0; $i < $n; $i++) {
		echo "<article>
			<p>{$articles["text"][$i]}<br><br>";
		GetUsername($articles["userID"][$i], $conn);
		echo "</p>";
		if(isset($_SESSION["user"])) {
			echo "<form action='Index.php?article={$articles["id"][$i]}' method='post'>
			<input type='text' name='comment'>
			<input type='submit' value='Kommentera'>
			</from>";
		}
		echo "<p>Score: {$articles["score"][$i]}";
		if(isset($_SESSION["user"])) {
			echo "<form action='Index.php?article={$articles["id"][$i]}' method='post'>
			<input type='submit' value='+1' name='plus'>
			<input type='submit' value='-1' name='minus'>
			</form></p>";
		}
		else {
			echo "</p>";
		}
			for($j = 0; $j < $m; $j++) {
				if($articles["id"][$i] == $comments["articleID"][$j]) {
					$username = GetUsername($comments["userID"][$j], $conn);
					echo "<p>{$username}: {$comments["comment"][$j]}</p>";
				}
			}
		echo "</article>";
	}
}
?>
<!DOCTYPE html>

<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Fantastiska Forumet</title>
    <link href="CSS\cssStyleSheet.css" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
		<?php
		require "Templates\Header.html";
		require "Templates\Nav.php";
		?>
		<main>
			<?php
				WriteArticle($n, $m, $articles, $comments, $conn);
			?>
		</main>
		
	<?php
	require "Templates\Footer.html";
	?>
	</div>
</body>