<!DOCTYPE html>
<head>
	<title> foobar </title>
</head>
<body>
	<p> lorem ipsum </p>
	<?php
		$out = array();
		exec("deluge-console info", $out);
		foreach($out as $line) {
			echo '<pre>';
			echo "$line \n";
			echo '</pre>';
		}
	?>

</body>
