<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Musicon</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="billeder/favicon (2).ico">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

</head>
	<h1>Musicon Magasinet</h1>
    
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
			?>
			
	
    		<?php
    $sql = "SELECT * FROM `nyheder` ORDER BY `dato` DESC LIMIT 3";
    $result = mysql_query ($sql) or die (mysql_error());
 
    while ($row = mysql_fetch_assoc ($result))
    {
         echo "<div class='nyhed'>";
            echo "<h4>$row[titel]</h4>";
            echo "<p>$row[dato]</p>";
            echo "<p>$row[tekst]</p>";
       	echo "</div>";
    }
    ?>
  
                
    
         	 <?php
			
             while ($row = mysql_fetch_assoc ($result))
    {
         echo "<div class='nyhed'>";
            echo "<h4>$row[titel]</h4>";
            echo "<p>$row[dato]</p>";
            echo "<p>$row[tekst]</p>";
			echo "</div>";
       
    }
    ?>
   	
         	
    
</html>