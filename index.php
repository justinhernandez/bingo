<?php

require('functions.php');

?>

<!DOCTYPE html>
<html>
<head>
  	<title>Bingo!</title>
  	<link href="style.css" media="all" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js" type="text/javascript"></script>
</head>
<body>
	
	<div id="bingo">
		<table>
			<tr>
				<th>S</th>
				<th>W</th>
				<th>H</th>
				<th>N</th>
				<th>L</th>
			</tr>
			<?php print rows($words) ?>

		</table>
	</div>

</body>
</html>