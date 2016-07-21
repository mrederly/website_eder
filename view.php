<?php
	if (! defined ( 'session' ))
	{
		die ();
	}
	
	
	function getLoginForm()
	{
		getHeader();
		?>
					<br> Username
					<input id="username" name="username" type="text" />
					<br> Kennwort
					<input id="password" name="password" type="password" />
					<br>
					<a href="#" onclick="anmelden();">Anmelden</a>  
					<script type="text/javascript">
		
					function anmelden(){
						//Elemente/Werte von der Seite holen
						var username= document.getElementById("username").value;
						var password = document.getElementById("password").value;
						
						
						//Ajax
						var objAjax = new XMLHttpRequest();
						objAjax.open("POST", "index.php");
						objAjax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
						objAjax.onreadystatechange=function(){
							if(objAjax.readyState==4)
							location.reload();
						};
						objAjax.send("username="+username+"&password="+password);
					}
					</script>
					<?php
					
			getFooter();
	}
	function getHeader()
	{
		?>
				<HTML>
					<head>
						<title>Wohoo ein Projekt!</title>
							<script type="text/javascript">
						
		
							function updateClock ( )
							{
							  var currentTime = new Date ( );
							
							  var currentHours = currentTime.getHours ( );
							  var currentMinutes = currentTime.getMinutes ( );
							  var currentSeconds = currentTime.getSeconds ( );
							  
							
							  currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
							  currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;
	
							 
							
							  var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";
							
							  
							  currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;
							
							
							  currentHours = ( currentHours == 0 ) ? 12 : currentHours;
								
							  
							  var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
							
							
								
							  document.getElementById("clock").firstChild.nodeValue = currentTimeString;
	
							
							  var sound = new Audio('008_rgr.mp3');
							  if(currentSeconds == '00') {
									sound.play();
								}
							}
							</script>
					</head>
					<body onload="updateClock(); setInterval('updateClock()', 1000 )">
			<?php 
		}
		
		function getFooter()
		{	
			?>
					<div style="width: 10em; text-align: center; margin: 20px auto;">
						<span id="clock">&nbsp;</span>
					</div>
					</body>
				</HTML>
			<?php 
		}
?>