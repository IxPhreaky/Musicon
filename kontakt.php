<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kontakt</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="billeder/favicon (2).ico">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

</head>


				<fieldset>
<form method="post" action="">
<ul>
	<li>
		<label for="Fulde_navn">Navn:</label>
		<input name="Navn" type="text" placeholder="Skriv dit navn her" value="" required autofocus />
	</li>

<li>
<label for="Email">Email:</label>
<input name="Email" type="text" placeholder="Jens@live.dk Etc." required pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,5})$" title="the given email adress is not valid" /></li>

<li><label for="Mobil">Mobil Nummer:</label><input name="Mobil" pattern="[0-9]{8,8}"  type="tel" placeholder="12345678" required > </li>

<li><label for="Besked">Besked:</label><textarea name="Besked" cols="5" rows="5" placeholder="Skriv Her"></textarea> </li>

<li><button id="button" type="submit" name="submit" value="Send">Send</button></li>

</ul>
</form>
</fieldset>	
</html>