<?php
	set_include_path("../php" . PATH_SEPARATOR . "php");
	include 'visitorsControl.php';
	
	$mysqli = new mysqli($dbIPAddr, $dbUser, $dbPassword, $dnName);
	if ($mysqli->connect_errno)
		die("<p>Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error . "</p>");
	
	if (!isset($_GET["token"]))
	{
		echo "token was not set";
		die();
	}

	$result = $mysqli->query("SELECT 1 FROM `question_tokens` WHERE `token`='" . $_GET["token"] . "'");
	if ($result->num_rows <= 0)
	{
		echo "token was not found";
		die();
	}
	
	$noParamsSet = TRUE;
	$selectSql = "SELECT `id` FROM `questions`";
	$result = $mysqli->query($selectSql);
	if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			$paramName = "question" . $row["id"];
			if (isset($_POST[$paramName]))
			{
				$noParamsSet = FALSE;
				if (!$mysqli->query("INSERT INTO `answers` (`id`, `answer`, `question_id`) VALUES (NULL, '" . $_POST[$paramName] . "', '" . $row["id"] . "')"))
				{
					echo "Test error";
					die();
				}
			}
		}
	}
	
	if (!$noParamsSet)
	{
		echo "Test done";
		$mysqli->close();
		exit();
	}
	

	$selectSql = "SELECT `id`, `question`, `answers` FROM `questions`";
	$result = $mysqli->query($selectSql);
	
	if ($result->num_rows > 0)
	{
		$questionNumber = 1;
		echo "<form id='questions_form' method='POST'>";
		while($row = $result->fetch_assoc())
		{
			echo "<div class='container pad_seite'>";
			echo "<h4>" . $questionNumber++ . ". " . $row["question"] . "</h4>";

			if ($row["answers"] != NULL)
			{
				$optionIndex = 0;
				$options = explode("|", $row["answers"]);
				foreach ($options as $option)
				{
					echo "<div class='radio'>";
					echo "<label><input type='radio' value='" . $optionIndex . "' name='question" . $row["id"] . "'>" . $option . "</label>";
					echo "</div>";
					$optionIndex++;
				}
			}
			else
			{
				echo "<div class='form-group'>";
				echo "<label for='comment'>Comment:</label>";
				echo "<textarea class='form-control' rows='5' name='question" . $row["id"] . "'></textarea>";
				echo "</div>";
			}
			echo "</div>";
		}
		echo "<button class='btn btn-default'>Senden</button>";
		echo "</form>";
	} 
	else 
	{
	  echo "Not found";
	}
?>

 