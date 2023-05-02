<?php
	set_include_path("../php" . PATH_SEPARATOR . "php");
	include 'visitorsControl.php';
	
	$mysqli = new mysqli($dbIPAddr, $dbUser, $dbPassword, $dnName);
	if ($mysqli->connect_errno)
		die("<p>Verbindung zu MySQL fehlgeschlagen: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error . "</p>");
	
	if (!isset($_GET["token"]))
	{
		echo "Fehler: Token wurde nicht gesetzt";
		die();
	}
	
	$token = $_GET["token"];
	$result = $mysqli->query("SELECT `active` FROM `question_tokens` WHERE `token`='" . $token . "'");
	if ($result->num_rows <= 0)
	{
		echo "Fehler: Token wurde nicht gefunden";
		die();
	}
	$row = $result->fetch_assoc();
	if (!$row["active"])
	{
		echo "Fehler: Token ist nicht mehr gültig";
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
						echo "Fehler beim Einfügen der Daten";
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
			echo "Fehler: Token-Update";
			die();
		}
		echo "Test wurde erfolgreich durchgeführt";
		$mysqli->close();
		exit();
	}
	
	$selectSql = "SELECT `id`, `question`, `answers` FROM `questions`";
	$result = $mysqli->query($selectSql);
	
	if ($result->num_rows > 0)
	{
		$questionNumber = 1;
		echo "<div class='container pad_seite'>";
		echo "<h2>Bitte beantworten Sie die folgenden Fragen</h2>";
		echo "<br>";
		echo "<form class='form-horizontal lead' id='questions_form' method='POST'>";
		while($row = $result->fetch_assoc())
		{
			echo "<div class='form-group'>";
			echo "<h5>" . $questionNumber++ . ". " . $row["question"] . "</h5>";
			if ($row["answers"] != NULL)
			{
				if (strpos($row["answers"], '|') !== false)
				{
					$optionIndex = 0;
					$options = explode("|", $row["answers"]);
					foreach ($options as $option)
					{
						echo "<div class='col-sm-offset-2 col-sm-10'>";
						echo "<div class='radio'>";
						echo "<label><input type='radio' required value='" . $optionIndex . "' name='question" . $row["id"] . "[]'>&nbsp;" . $option . "</label>";
						echo "</div>";
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
						
						echo "<div class='col-sm-offset-2 col-sm-10'>";
						echo "<div class='checkbox'>";
						echo "<label><input type='checkbox' value='" . $optionIndex . "' name='question" . $row["id"] . "[]'>&nbsp;" . $option . "</label>";
						echo "</div>";
						echo "</div>";
						$optionIndex++;
					}
				}
			}
			else
			{
				echo "<div class='col-sm-offset-2 col-sm-10 text-field'>";
				echo "<textarea class='form-control' rows='5' id='comment' name='question" . $row["id"] . "[]'></textarea>";
				echo "</div>";
			}
			echo "</div>";
		}
		
		echo "<div class='form-group'>";
		echo "<button style='margin-bottom: 2rem;' type='submit' class='submit btn btn-success'>Senden</button>";
		echo "</div>";
		echo "</form>";
		echo "</div>";
	} 
	else 
	{
	  echo "Keine fragen gefunden";
	}
?>

 
