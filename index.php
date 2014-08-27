<?php 
	@$page = $_GET['page'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Musicon</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="billeder/favicon (2).ico">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

</head>

<body>
<div id="wrapper">
	<header>
    	<img src="billeder/musicon-logo.png" id="logo">
            <nav>
				<ul>
    				<li><a href="index.php">Forside</a></li>
    				<li><a href="index.php?page=nyheder">Nyheder</a></li>
    				<li><a href="index.php?page=aktiviter">Aktiviter</a></li>
    				<li><a href="index.php?page=kontakt">Kontakt</a></li>	            
        		</ul>
			</nav>   
    </header>
    	<div id="main">  
             <?php
             	switch ($page)	{
			 		case 'forside':
					include ('index.php');
					break;				
				
					case 'nyheder':
					include ('nyheder.php');
					break;
				
					case 'aktiviter':
					include ('aktiviter.php');
					break;
				
					case 'kontakt':
					include ('kontakt.php');
					break;
				
					default :
					include ('mainindex.php');
					break;
				
				 }
             ?>
       	</div>
			<footer>
            	<article>
                	<p>Kontaktoplysninger</p>
                	<p>Adresse:</p>
               	 	<p>Email:</p>
               		<p>Hjemmeside</p>
                	<p>Email:</p>
                </article>
                	<div id="admin">
                    	
                    </div>
			</footer>
</div>


</body>

</html>