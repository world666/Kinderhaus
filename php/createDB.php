<?php 
include 'config.php';

echo "<p>" . $dbIPAddr . "</p>";
echo "<p>" . $dbUser . "</p>";
echo "<p>" . $dnName . "</p>";

$mysqli = new mysqli($dbIPAddr, $dbUser, $dbPassword, $dnName);
if ($mysqli->connect_errno)
{
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	exit();
}
echo "<p>" . $mysqli->host_info . "</p>";

if (!$mysqli->query("DROP TABLE IF EXISTS visitors_index") ||
    !$mysqli->query("CREATE TABLE `visitors_index` ( `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT , `page` VARCHAR(128) NOT NULL  , `date_time` DATETIME(6) NOT NULL , `remote_ip` VARCHAR(128) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;"))
{
    echo "Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
	exit();
}

?>
