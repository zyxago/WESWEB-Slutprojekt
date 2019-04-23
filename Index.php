<?php
require "Connect\Connect.php";
$_SESSION["site"] = "index";
if(!empty($_GET["intent"]) && $_GET["intent"] == "out") {
	unset($_SESSION["user"]);
	header("Location: index.php");
}
$n = 0;
$articles = array(array("text"), array("score"));
$sql = "SELECT *
		FROM article";
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		$articles["text"][$n] = $row["articleText"];
		$articles["score"][$n] = $row["points"];
		$n++;
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
						<p>{$articles["text"][$i]}</p>
						<p>Score: {$articles["score"][$i]}</p>
						</article>";
				}
			?>
		</main>
		
	<?php
	require "Templates\Footer.html";
	?>
	</div>
</body>