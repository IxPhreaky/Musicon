<?php 
	@$page = $_GET['page'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>future designs</title>

<link href="css/css.css" rel="stylesheet" type="text/css">

</head>

<body>
<div id="wrapper">
	<header>
    	<h1>terminal love</h1>
    </header>
    
    <nav>
		<ul>
    		<li><a href="index.php">front page</a></li>
    		<li><a href="index.php?page=water">water</a></li>
    		<li><a href="index.php?page=earth">earth</a></li>
    		<li><a href="index.php?page=air">air</a></li>	            
        	<li><a href="index.php?page=contact">Contact</a></li>
        </ul>
	</nav>    

	
      
             <div id="main">  
             <?php
             switch ($page)	{
			 	case 'front page':
				include ('index.php');
				break;				
				
				case 'n':
				include ('navnpåfil.php');
				break;
				
				case 'navn':
				include ('navnpåfil.php');
				break;
				
				case 'navn':
				include ('navnpåfil.php');
				break;
				
				case 'navn':
				include ('navnpåfil.php');
				break;				
				
				default :
				include ('mainindex.php');
				break;
				
			 }
             ?>
             
             

</div>
<footer>
	<p>copyright @ the people</p>
</footer>
</div>


</body>

</html>
