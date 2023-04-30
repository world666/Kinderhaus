<?php
	set_include_path("../php" . PATH_SEPARATOR . "php");
	include 'visitorsControl.php';
	
	$mysqli = new mysqli($dbIPAddr, $dbUser, $dbPassword, $dnName);
	if ($mysqli->connect_errno)
		die("<p>Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error . "</p>");
	
	if (!isset($_GET["token"]))
	{
		echo "Error: token was not set";
		die();
	}
	
	$token = $_GET["token"];
	$result = $mysqli->query("SELECT `active` FROM `question_tokens` WHERE `token`='" . $token . "'");
	if ($result->num_rows <= 0)
	{
		echo "Error: token was not found";
		die();
	}
	$row = $result->fetch_assoc();
	if (!$row["active"])
	{
		echo "Error: token is not valid";
		die();
	}	
	
	$noParamsSet = TRUE;
	$selectSql = "SELECT `id` FROM `questions`";
	$result = $mysqli->query($selectSql);
	if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			$paramNames = "question" . $row["id"];
			if (isset($_POST[$paramNames]))
			{
				$noParamsSet = FALSE;
				foreach ($_POST[$paramNames] as $paramName)
				{
					if (!$mysqli->query("INSERT INTO `answers` (`id`, `answer`, `question_id`) VALUES (NULL, '" . $paramName . "', '" . $row["id"] . "')"))
					{
						echo "Error: data insertion error";
						die();
					}
				}
			}
		}
	}
	
	if (!$noParamsSet)
	{
		if (!$mysqli->query("UPDATE `question_tokens` SET `active`='0' WHERE `token`='" . $token . "'"))
		{
			echo "Error: token update";
			die();
		}
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
				if (strpos($row["answers"], '|') !== false)
				{
					$optionIndex = 0;
					$options = explode("|", $row["answers"]);
					foreach ($options as $option)
					{
						echo "<div class='radio'>";
						echo "<label><input type='radio' value='" . $optionIndex . "' name='question" . $row["id"] . "[]'>&nbsp;" . $option . "</label>";
						echo "</div>";
						$optionIndex++;
					}
				}
				else if (strpos($row["answers"], '&') !== false)
				{
					$optionIndex = 0;
					$options = explode("&", $row["answers"]);
					foreach ($options as $option)
					{
						
						echo "<div class='checkbox'>";
						echo "<label><input type='checkbox' value='" . $optionIndex . "' name='question" . $row["id"] . "[]'>&nbsp;" . $option . "</label>";
						echo "</div>";
						$optionIndex++;
					}
				}
			}
			else
			{
				echo "<div class='form-group'>";
				echo "<label for='comment'>Comment:</label>";
				echo "<textarea class='form-control' rows='5' name='question" . $row["id"] . "[]'></textarea>";
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

 
