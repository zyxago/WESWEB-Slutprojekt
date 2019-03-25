<?php
require "Header.html";
require "D:\Dokument\GitHub\WESWEB-Slutprojekt\Backend\ConnectDB\Connect.php"
//if()Om man är inloggad:
echo "  <nav>
			<a href="WriteArticle.php">Skriv en artikel</a>
			<a href="UserPage.php">Mian Uppgifter</a>
			<a href="">Logga ut</a>
		</nav>"
else {
	echo "<nav>
			<a href="LoginOrRegister">Registrera</a>
			<a href="LoginOrRegister">Logga in</a>
		  </nav>"
}


//Ska komma i slutet på sidan
require "Footer.html";