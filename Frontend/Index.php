<?php
require "D:\Dokument\GitHub\WESWEB-Slutprojekt\Backend\ConnectDB\Connect.php";
session_start();
//Hämta alla artiklar och kommentarer, spara de sen i arrayer som sedans skrivs ut i <main>
$sql = ""
?>
<!DOCTYPE html>

<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Fantastiska Forumet</title>
    <link href="D:\Dokument\GitHub\WESWEB-Slutprojekt\Frontend\CSS\cssStyleSheet.css" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
		<?php
		require "D:\Dokument\GitHub\WESWEB-Slutprojekt\Templates\Header.html";
		require "D:Dokument\GitHub\WESWEB-Slutprojekt\Templates\Nav.php";
		?>
		<main>
			<article>
			
			</article>
		</main>
		
	<?php
	require "D:\Dokument\GitHub\WESWEB-Slutprojekt\Templates\Footer.html";
	?>
	</div>
</body>