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

function createQuestionTypesTable($mysqli, $tableName)
{
	if (!$mysqli->query("CREATE TABLE `" . $tableName . "` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	                    `question_type` VARCHAR(256) NOT NULL,
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
	                    `question` VARCHAR(2048) NOT NULL, `question_type_id` INT UNSIGNED NOT NULL,
						PRIMARY KEY (`id`),
						FOREIGN KEY (`question_type_id`) REFERENCES `question_types`(`id`) ON DELETE CASCADE) ENGINE = InnoDB;"))
	{
		echo "<p>Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error . "</p>";
		return FALSE;
	}
	return TRUE;
}

function createQuestionAnswersTable($mysqli, $tableName)
{
	if (!$mysqli->query("CREATE TABLE `" . $tableName . "` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	                    `answer` VARCHAR(4096) NOT NULL, `text_field` TINYINT UNSIGNED DEFAULT 0, `question_id` INT UNSIGNED,
						PRIMARY KEY (`id`),
						FOREIGN KEY (`question_id`) REFERENCES `questions`(`id`) ON DELETE CASCADE) ENGINE = InnoDB;"))
	{
		echo "<p>Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error . "</p>";
		return FALSE;
	}
	return TRUE;
}

function createAnswersTable($mysqli, $tableName)
{
	if (!$mysqli->query("CREATE TABLE `" . $tableName . "` ( `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT, 
	                    `answer` VARCHAR(4096), `answer_id` INT UNSIGNED DEFAULT NULL, `token` VARCHAR(256) NOT NULL,
						PRIMARY KEY (`id`),
						FOREIGN KEY (`answer_id`) REFERENCES `question_answers`(`id`) ON DELETE CASCADE) ENGINE = InnoDB;"))
	{
		echo "<p>Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error . "</p>";
		return FALSE;
	}
	return TRUE;
}

function createQuestionTokensTable($mysqli, $tableName)
{
	if (!$mysqli->query("CREATE TABLE `" . $tableName . "` ( `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT, 
	                    `token` VARCHAR(256) NOT NULL, `active` BOOLEAN,
						PRIMARY KEY (`id`)) ENGINE = InnoDB;"))
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


//removeTable($mysqli, "answers");
//removeTable($mysqli, "question_answers");
//removeTable($mysqli, "questions");
//removeTable($mysqli, "question_types");

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

//removeTable($mysqli, "question_types");
if (isTableExists($mysqli, "question_types"))
{
	echo "<p>Table 'question_types' already exists</p>";
}
else
{
	echo "<p>Table 'question_types' not exists, create one</p>";
	if (createQuestionTypesTable($mysqli, "question_types"))
		echo "<p>Table 'question_types' successfully created</p>";
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

//removeTable($mysqli, "question_answers");
if (isTableExists($mysqli, "question_answers"))
{
	echo "<p>Table 'question_answers' already exists</p>";
}
else
{
	echo "<p>Table 'question_answers' not exists, create one</p>";
	if (createQuestionAnswersTable($mysqli, "question_answers"))
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

//removeTable($mysqli, "question_tokens");
if (isTableExists($mysqli, "question_tokens"))
{
	echo "<p>Table 'question_tokens' already exists</p>";
}
else
{
	echo "<p>Table 'question_tokens' not exists, create one</p>";
	if (createQuestionTokensTable($mysqli, "question_tokens"))
		echo "<p>Table 'question_tokens' successfully created</p>";
}
?>
