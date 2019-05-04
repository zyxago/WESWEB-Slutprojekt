<?php
require "Connect\Connect.php";
$_SESSION["site"] = "index";
if(!empty($_GET["intent"]) && $_GET["intent"] == "out") {
	unset($_SESSION["user"]);
	header("Location: index.php");
}
if(!empty($_POST["+1"])) {
	$sql = "UPDATE article
	SET points=points+1
	WHERE ";//FIXA så att man får tag på rätt articleID.
}
if(!empty($_POST["-1"])) {
	$sql = "UPDATE article
	SET points=points-1
	WHERE ";//FIXA så att man får tag på rätt articleID.
	if($conn->query($sql) === TRUE) {
		echo "YAY";
	}
}
if(!empty($_POST["comment"])) {
	$user = $_SESSION["user"];
	$articleID = $_GET["article"];
	$comment = $_POST["comment"];
	if($sql = mysqli_prepare($conn, "INSERT INTO comments(articleID, user, comment)
			VALUES (?, ?, ?)")) {
				mysqli_stmt_bind_param($sql, "sss", $articleID, $user, $comment);//FIXA så att man får tag på rätt articleID.
				if(mysqli_stmt_execute($sql)) {
					echo "Comment submittet";
				}
				else {
					echo "Error commenting";
				}
				mysqli_stmt_close($sql);
	}
}
$n = 0;
$articles = array(array("text"), array("score"), array("id"), array("userID"));
$comments = array(array("comment"), array("articleID"), array("user"));
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
$m = 0;
$sql = "SELECT *
		FROM comments";
$result = $conn->query($sql);
if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		$comments["comment"][$m] = $row["comment"];
		$comments["articleID"][$m] = $row["articleID"];
		$comments["user"][$m] = $row["user"];
		$m++;
	}
}
function GetUsername($userID, $conn) {
	$sql = "SELECT username
	FROM users
	WHERE $userID = ID";
	$result = $conn->query($sql);
	if(mysqli_num_rows($result)) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "{$row["username"]}";
		}
	}
	else {
		echo $conn->error;
	}
}
function WriteArticle($n, $m, $articles, $comments, $conn) {
	for($i = 0; $i < $n; $i++) {
		echo "<article>
			<p>{$articles["text"][$i]}<br><br>";
		GetUsername($articles["userID"][$i], $conn);
		echo "</p>";
		echo $i;
		if(isset($_SESSION["user"])) {
			echo "<form action='Index.php?article=FIX' method='post'>
			<input type='text' name='comment'>
			<input type='submit' value='Kommentera'>
			</from>";
		}
		echo "<p>Score: {$articles["score"][$i]}";
		if(isset($_SESSION["user"])) {
			echo "<form action='Index.php' method='post'>
			<input type='submit' value='+1'>
			<input type='submit' value='-1'>
			</form></p>";
		}
		else {
			echo "</p>";
		}
			for($j = 0; $j < $m; $j++) {
				if($articles["id"][$i] == $comments["articleID"][$j]) {
					echo "<p>{$comments["user"][$j]}: {$comments["comment"][$j]}</p>";
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