<?php

require 'core/init.php';

if ($data_web['status'] == 0) {
	require 'templates/shutdown.php';
	exit;
}

require 'includes/header.php';


require 'templates/content.php';


require 'includes/footer.php';

?>