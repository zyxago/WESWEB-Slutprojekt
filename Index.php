<?php
require "Connect\Connect.php";
$_SESSION["site"] = "index";
if(!empty($_GET["intent"]) && $_GET["intent"] == "out") {
	unset($_SESSION["user"]);
	header("Location: index.php");
}
if(!empty($_POST["comment"])) {
	//lägg till kommentar på artikel
}
$n = 0;
$articles = array(array("text"), array("score"), array("id"));
$comments = array(array("comment"), array("articleID"));
$sql = "SELECT *
		FROM article";
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		$articles["text"][$n] = $row["articleText"];
		$articles["score"][$n] = $row["points"];
		$articles["id"][$n] = $row["ID"];
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
		$m++;
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
				for($i = 0; $i < $n; $i++) {
					echo "<article>
						<p>{$articles["text"][$i]}</p>";
					echo '<form action="Index.php?action=comment" method="post">
						<input type="text" name="comment">
						<input type="submit" value="Kommentera">
						</from>';
					echo "<p>Score: {$articles["score"][$i]}</p>";
						for($j = 0; $j < $m; $j++) {
							if($articles["id"][$i] == $comments["articleID"][$j]) {
								echo "<p>{$comments["comment"][$j]}</p>";
							}
						}
					echo "</article>";
				}
			?>
		</main>
		
	<?php
	require "Templates\Footer.html";
	?>
	</div>
</body>