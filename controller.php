<?php
	if (! defined ( 'session' ))
	{
		die ();
	}
	
	if (!isset($_SESSION['logstat']))
	{
		getLoginform();
	
	}else // Wenn eingeloggt --> Anzeigen vom Link, bzw vom XML
	{
		if($action == "" && $view == "")
		{
			?>
			<a href="index.php?action=view&method=showData">LINK</a>
			<?php 
			}
			else {
				showData();
			}	
		} 
?>
