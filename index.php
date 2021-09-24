<?php
    require_once 'Class/Revert.php';

    $class = new Revert;
    $result = $class->revertCharacters('Hey! Long time no see.');
?>

<html lang="RU">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
		<title>Задача</title>
	</head>
	<body>
        <p><?= $result ?></p>
    </body>
</html>