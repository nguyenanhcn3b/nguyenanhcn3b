<?php


if (isset($_GET['sp']) && isset($_GET['id'])) {
	require 'templates/posts.php';

} else if (isset($_GET['sc'])) {
	require 'templates/categories.php';

} else if (isset($_GET['s'])) {
	require 'templates/search.php';

} else {
	// code
 	require 'templates/latest-news.php';
}

?>