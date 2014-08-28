<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kontakt</title>
<link href="../../../Users/331232/Desktop/Musicon/style.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="../../../Users/331232/Desktop/Musicon/billeder/favicon (2).ico">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

</head>
<?php
				
					$con = mysql_connect("localhost", "root",""); /*Her connecter jeg til Local host*/
					$db = mysql_select_db("musicon",$con); /*Her Specificere jeg databasen*/
					if(!$con){	
						die("Fejl i oprettelsen til databasen,tjek domain, username eller pw" . mysql_error());		}
						/* Her oprettes forbindelse til Databasen db*/
						
					/*Her vælger jeg at Data basen skal dø hvis der ikke bliver oprettet forbindelse*/	
					if (!$db)
					{ die ("Ingen database oprettet!" . mysql_error());	} 
						
						/* Danske bogstaver æøå */
						mysql_query("SET NAMES utf8"); 
						mysql_query("SET character_set_results=’utf8'");
						
					
					if(isset($_POST['submit'])){ /*Her tjekker vi om submit knappen bliver trykket */
						$Navn = $_POST['Navn']; /* Den her tager input name fra formularen og laver dem om til variabler*/
						$Mobil = $_POST['Mobil'];
						$Email = $_POST['Email'];
						$Besked = $_POST['Besked'];
						
                    /*Her tjekker vi om alle felterne er udfyldt */
					if(!$Navn || !$Mobil|| !$Email ||!$Besked){ 
					echo "udfyld venligst alle felter<br/>";
					}
					
				/*her tager den dataen som er blevet inskrevet i formularen og indsætter dem i tablen i data basen*/			
						mysql_query("INSERT INTO `musicon`.`kontaktliste` (`Navn`, `Mobil`, `Email`,`Besked`)
							VALUES('$Navn', '$Mobil', '$Email','$Besked')"
						);
				
					
				}
				
				?>

	<fieldset>
		<form method="post" action="">
			<ul>
				<li>
					<label for="Fulde_navn">Navn:</label>
					<input name="Navn" type="text" placeholder="Skriv dit navn her" value="" required autofocus />
				</li>

				<li>
					<label for="Email">Email:</label>
						<input name="Email" type="text" placeholder="Jens@live.dk Etc." required pattern=							"^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,5})$" title="the given email adress is not valid" /></li>

				<li><label for="Mobil">Mobil Nummer:</label><input name="Mobil" pattern="[0-9]{8,8}"  type="tel" placeholder="12345678" required > </li>

				<li><label for="Besked">Besked:</label><textarea name="Besked" cols="5" rows="5" placeholder="Skriv Her"></textarea> </li>

				<li><button id="button" type="submit" name="submit" value="Send">Send</button></li>

			</ul>
		</form>
	</fieldset>	
</html>