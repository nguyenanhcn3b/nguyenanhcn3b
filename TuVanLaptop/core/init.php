<?php


require_once 'admin/classes/DB.php';
require_once 'admin/classes/Session.php';
require_once 'admin/classes/Functions.php';


$db = new DB();
$db->connect();
$db->set_char('utf8');

$_DOMAIN = 'http://localhost/TuVanLaptop/';

$sql_get_data_web = "SELECT * FROM website";
if ($db->num_rows($sql_get_data_web)) {
	$data_web = $db->fetch_assoc($sql_get_data_web, 1);
}

?>