<?php 
include 'config.php';

echo "<p>IP: <b>" . $dbIPAddr . "</b></p>";
echo "<p>User name: <b>" . $dbUser . "</b></p>";
echo "<p>DB name: <b>" . $dnName . "</b></p>";

function isTableExists($mysqli, $tableName)
{
	if ($mysqli->query("SELECT 1 FROM `" . $tableName . "` LIMIT 1"))
		return TRUE;
	
	return FALSE;
}

function removeTable($mysqli, $tableName)
{
	if (!isTableExists($mysqli, $tableName))
		return FALSE;
	
	if ($mysqli->query("DROP TABLE " . $tableName))
		return TRUE;
	
	echo "<p>removeTable failed: (" . $mysqli->errno . ") " . $mysqli->error . "</p>";
	return FALSE;
}

function createVisitorsTable($mysqli, $tableName)
{
	if (!$mysqli->query("CREATE TABLE `" . $tableName . "` ( `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT , 
	                    `page` VARCHAR(128) NOT NULL , `date_time` DATETIME(6) NOT NULL, `remote_ip` VARCHAR(128) NOT NULL, 
					    PRIMARY KEY (`id`)) ENGINE = InnoDB;"))
	{
		echo "<p>Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error . "</p>";
		return FALSE;
	}
	return TRUE;
}

function createQuestionsTable($mysqli, $tableName)
{
	if (!$mysqli->query("CREATE TABLE `" . $tableName . "` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	                    `question` VARCHAR(2048) NOT NULL, `answers` VARCHAR(4096), PRIMARY KEY (`id`)) ENGINE = InnoDB;"))
	{
		echo "<p>Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error . "</p>";
		return FALSE;
	}
	return TRUE;
}

function createAnswersTable($mysqli, $tableName)
{
	if (!$mysqli->query("CREATE TABLE `" . $tableName . "` ( `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT, 
	                    `answer` VARCHAR(4096), `question_id` INT UNSIGNED,
						KEY `question_ind` (`question_id`),
						PRIMARY KEY (`id`),
						FOREIGN KEY (`question_id`) REFERENCES `questions`(`id`) ON DELETE CASCADE) ENGINE = InnoDB;"))
	{
		echo "<p>Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error . "</p>";
		return FALSE;
	}
	return TRUE;
}

$mysqli = new mysqli($dbIPAddr, $dbUser, $dbPassword, $dnName);
if ($mysqli->connect_errno)
{
    echo "<p>Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error . "</p>";
	exit();
}
echo "<p>Host Info: <b>" . $mysqli->host_info . "</b></p>";

//removeTable($mysqli, "visitors_index");
if (isTableExists($mysqli, "visitors_index"))
{
	echo "<p>Table 'visitors_index' already exists</p>";
}
else
{
	echo "<p>Table 'visitors_index' not exists, create one</p>";
	if (createVisitorsTable($mysqli, "visitors_index"))
		echo "<p>Table 'visitors_index' successfully created</p>";
}

//removeTable($mysqli, "questions");
if (isTableExists($mysqli, "questions"))
{
	echo "<p>Table 'questions' already exists</p>";
}
else
{
	echo "<p>Table 'questions' not exists, create one</p>";
	if (createQuestionsTable($mysqli, "questions"))
		echo "<p>Table 'questions' successfully created</p>";
}

//removeTable($mysqli, "answers");
if (isTableExists($mysqli, "answers"))
{
	echo "<p>Table 'answers' already exists</p>";
}
else
{
	echo "<p>Table 'answers' not exists, create one</p>";
	if (createAnswersTable($mysqli, "answers"))
		echo "<p>Table 'answers' successfully created</p>";
}

?>
