<?php 
include 'config.php';

function updateVisitors($currentPage)
{
   $mysqli = new mysqli($GLOBALS['dbIPAddr'], $GLOBALS['dbUser'], $GLOBALS['dbPassword'], $GLOBALS['dnName']);
   if ($mysqli->connect_errno) 
	   exit();

   if (!$mysqli->query("INSERT INTO `visitors_index` (`id`, `page`, `date_time`, `remote_ip`) VALUES (NULL, '" . $currentPage  . "', NOW(6), '" . $_SERVER["REMOTE_ADDR"]  . "')"))
	   exit();
}

updateVisitors(basename($_SERVER["SCRIPT_FILENAME"]));
?>
