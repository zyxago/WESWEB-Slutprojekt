<?php
require "Connect\Connect.php";
session_start();
//Hämta alla artiklar och kommentarer, spara de sen i arrayer som sedans skrivs ut i <main>
$sql = ""
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
			<article>
			
			</article>
		</main>
		
	<?php
	require "Templates\Footer.html";
	?>
	</div>
</body>