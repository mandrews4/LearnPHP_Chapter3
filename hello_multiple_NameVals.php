<!doctype html>
<html>
  <head>
		<title>Feedback Form</title>
	</head>

	<body>
		<?php
			error_reporting(E_ALL|E_STRICT);

			/*
			 * Given an array of key/value pairs provided by an
			 * HTML form, use the array_keys function to determine
			 * the names of the keys of the $_GET array, then retrieve
			 * and print each value from the array using the key.
			*/

			foreach (array_keys($_GET) as $key) {
				$value=$_GET[$key];
				print "$key => $value<br>";
			}

		?>
	</body>
</html>
