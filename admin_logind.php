<h2>Admin Logind</h2>

<form name="login" action="" method="post">
    Brugernavn<input type="text" name="brugernavn" />
    <br />
    Kodeord<input type="password"  name="kodeord" />
    <br />
    <input type="submit" name="logind" value="Log ind" />
</form>

<?php

if(isset($_POST['logind']))
{	
	$mitbrugernavn = $_POST['brugernavn']; 
	$mitkodeord = $_POST['kodeord'];

	$sql = "SELECT * FROM tbl_brugere WHERE brugernavn='$mitbrugernavn' AND adgangskode='$mitkodeord'";
	
	$result = mysqli_query($sql);
	
	
	{	
		$raekke=mysqli_fetch_array($result);

		$_SESSION['brugernavnloggetind']=$raekke['brugernavn'];
		$_SESSION['brugerIDloggetind']=$raekke['id'];
		header('Location: index.php');
	}
	
	{
		echo "Der er fejl i brugernavn eller kodeord";
	}	
}
?>