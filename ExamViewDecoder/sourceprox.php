<html>
	<?php
	$url = $_GET['url'];
	echo htmlspecialchars(file_get_contents($url));
	?>
</html>