<?php
	require_once 'clases/auth.php';
	require_once 'clases/validate.php';
	require_once 'clases/dbJSON.php';
	require_once 'clases/dbMySQL.php';

	$auth = new Auth();
	$validator = new Validator();

	$typeDB = 'mysql';

	switch ($typeDB) {
		case 'json':
			$db = new dbJSON();
			break;
		case 'mysql':
			$db = new dbMYSQL();
			break;
		default:
			$db = NULL;
			break;
	}

?>
