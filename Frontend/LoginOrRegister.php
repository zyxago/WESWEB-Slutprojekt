<?php
require "D:\Dokument\GitHub\WESWEB-Slutprojekt\Templates\Header.html";
require "D:\Dokument\GitHub\WESWEB-Slutprojekt\Backend\ConnectDB\Connect.php";
?>
<!DOCTYPE html>

<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Logga in eller Registrera</title>
    <link href="D:\Dokument\GitHub\WESWEB-Slutprojekt\Frontend\CSS\cssStyleSheet.css" rel="stylesheet">
</head>
<body id="">
	<div id="wrapper">
		<?php
		require "D:\Dokument\GitHub\WESWEB-Slutprojekt\Templates\Header.html";
		?>
    <main>
        <h2>Logga in</h2>
        <form>
			<label for="username">WIP</label>
			<input type="text" id="username" name="user"><br><br>
			<label for="password">WIP</label>
			<input type="password" id="password" name="password"><br><br>
			<input type="submit" value="Logga in">
        </form>
		
		<h2>Registrera</h2>
		  <form>
			<label for="username">WIP</label>
			<input type="text" id="username" name="user"><br><br>
			<label for="password">WIP</label>
			<input type="password" id="password" name="password"><br><br>
			<input type="submit" value="Registrera">
        </form>
    </main>
    
	<?php
	require "D:\Dokument\GitHub\WESWEB-Slutprojekt\Templates\Footer.html";
	?>
  </div>
</body>
</html>