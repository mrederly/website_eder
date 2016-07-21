<?php
if (! defined ( 'session' )) {
	die ();
	
getHead ();
	
getHeader ();
	
getSection ();

	
getAside ();
	
getFooter ();
	
	
}
function getHead() {
	?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/main.css">
<link rel="shortcut icon" href="images/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ISS Live Monitoring</title>
<script type="text/javascript" src="js/time.js"></script>
</head>
<body onload="uhr_anzeigen()">
	<?php
}
function getHeader() {
	?>
<header></header>

<?php
}
function getSection() {
	?>
	<section>
	<p>test</p>
	</section>

<?php
}
function getAside() {
	?>
	<aside></aside>
	
<?php
}
function getFooter() {
	?>

</body>
</html>
<?php
}
?>