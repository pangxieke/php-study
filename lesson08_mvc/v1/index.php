<?php
$name = 'this is v1';

$html = <<<HTML
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
	</head>
	<body>
		<div style="color:red">$name</div>
	</body>
</html>
HTML;

echo $html;
