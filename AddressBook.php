<!doctype html>
<html>
  <head>
		<title>Address Book Entry</title>
	</head>

	<body>
		<?php
			error_reporting(E_ALL|E_STRICT);

			/*
			 * Given an array of key/value pairs provided by an
			 * HTML form, use the array_keys function to determine
			 * the names of the keys of the _POST array, then retrieve
			 * and print each value from the array using the key.
			*/

			print "<h3>Address Book Entry</h3>";

			foreach (array_keys($_POST) as $key) {
				$value=$_POST[$key];
				print "$key => $value<br>";
			}

		?>
	</body>
</html>
