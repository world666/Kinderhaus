<?php
	set_include_path("../php" . PATH_SEPARATOR . "php");
	include 'visitorsControl.php';
	
	function displayQuestions($mysqli)
	{
		$questionsResult = $mysqli->query("SELECT `id`, `question`, `question_type_id` FROM `questions`");
		if ($questionsResult->num_rows > 0)
		{
			$questionNumber = 1;
			echo "<div class='container pad_seite'>";
			echo "<h2>Bitte beantworten Sie die folgenden Fragen</h2>";
			echo "<br>";
			echo "<form class='form-horizontal' id='questions_form' method='POST'>";
			while($questionsRow = $questionsResult->fetch_assoc())
			{
				echo "<div class='form-group'>";
				echo "<h4>" . $questionNumber++ . ". " . $questionsRow["question"] . "</h4>";
				if ($questionsRow["question_type_id"] == 3) // 3 - text answer
				{
					$answersResult = $mysqli->query("SELECT `id`, `answer`, `text_field` FROM `question_answers` WHERE `question_id`='" . $questionsRow["id"] . "'");
					$answersRow = $answersResult->fetch_assoc();
					echo "<div class='col-sm-offset-2 col-sm-10 text-field'>";
					echo "<textarea style='font-size: 1.5em' class='form-control' rows='5' id='comment' name='text" . $answersRow["id"] . "[]'></textarea>";
					echo "</div>";
				}
				else
				{
					$answersResult = $mysqli->query("SELECT `id`, `answer`, `text_field` FROM `question_answers` WHERE `question_id`='" . $questionsRow["id"] . "'");
					while($answersRow = $answersResult->fetch_assoc())
					{
						if ($questionsRow["question_type_id"] == 1) // 1 - radio
						{ 
							echo "<div class='col-sm-offset-2 col-sm-10'>";
							echo "<div class='radio'>";
							echo "<label style='font-size: 1.5em'><input type='radio'";
							echo "        required value='" . $answersRow["id"] . "' name='radio" . $questionsRow["id"] . "[]'>&nbsp;" . $answersRow["answer"] . "</label>";
							if ($answersRow["text_field"])
								echo "<textarea class='form-control' style='display:none;' rows='5' id='comment' name='radiotext" . $answersRow["id"] . "[]'></textarea>";
							echo "</div>";
							echo "</div>";
						}
						else if ($questionsRow["question_type_id"] == 2) // 2 - checkbox
						{
							echo "<div class='col-sm-offset-2 col-sm-10'>";
							echo "<div class='checkbox'>";
							echo "<label style='font-size: 1.5em'><input type='checkbox' onclick='handleClick(this);'";
							echo "        value='true' name='check" . $answersRow["id"] . "[]'>&nbsp;" . $answersRow["answer"] . "</label>";
							if ($answersRow["text_field"])
								echo "<textarea class='form-control' style='display:none;' rows='5' id='comment' name='checktext" . $answersRow["id"] . "[]'></textarea>";
							echo "</div>";
							echo "</div>";
						}
					}
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
	}
	
	function checkAndReturnToken($mysqli)
	{
		if (!isset($_GET["token"]))
			die("<br><h2 style='color:red; text-align: center; width:100%'>Fehler: Token wurde nicht gesetzt</h2>");
	
		$token = $_GET["token"];
		$result = $mysqli->query("SELECT `active` FROM `question_tokens` WHERE `token`='" . $token . "'");
		if ($result->num_rows <= 0)
			die("<br><h2 style='color:red; text-align: center; width:100%'>Fehler: Token wurde nicht gefunden</h2>");
		
		$row = $result->fetch_assoc();
		if (!$row["active"])
			die("<br><h2 style='color:red; text-align: center; width:100%'>Fehler: Token ist nicht mehr gültig</h2>");
		
		return $token;
	}
	
	function terminateWithError($mysqli, $text)
	{
		$mysqli->close();
		die($text);
	}
	
	function deactivateToken($mysqli, $token)
	{
		if (!$mysqli->query("UPDATE `question_tokens` SET `active`='0' WHERE `token`='" . $token . "'"))
			terminateWithError($mysqli, "Fehler: Token-Update");
	}
	
	$mysqli = new mysqli($dbIPAddr, $dbUser, $dbPassword, $dnName);
	if ($mysqli->connect_errno)
		die("Verbindung zu MySQL fehlgeschlagen: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error . "");
	
	$token = checkAndReturnToken($mysqli);
	
	$noParamsSet = TRUE;
	$result = $mysqli->query("SELECT `id` FROM `questions`");
	if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			if (isset($_POST["radio" . $row["id"]]))
			{
				if ($noParamsSet)
				{
					deactivateToken($mysqli, $token);
					$noParamsSet = FALSE;
				}
				
				$paramValue = $_POST["radio" . $row["id"]][0];
				$answerText = "";
				if (isset($_POST["radiotext" . $paramValue]))
					$answerText = $_POST["radiotext" . $paramValue][0];
				
				$mysqli->query("INSERT INTO `answers` (`id`, `answer`, `answer_id`, `token`) VALUES (NULL, '" . $answerText . "', '" . $paramValue . "', '" . $token . "')");
			}
		}
	}
	
	$result = $mysqli->query("SELECT `id` FROM `question_answers`");
	if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			if (isset($_POST["check" . $row["id"]]))
			{
				if ($noParamsSet)
				{
					deactivateToken($mysqli, $token);
					$noParamsSet = FALSE;
				}
				$paramValue = $_POST["check" . $row["id"]][0];
				if ($paramValue != TRUE)
					continue;

				$answerText = "";
				if (isset($_POST["checktext" . $row["id"]]))
					$answerText = $_POST["checktext" . $row["id"]][0];
				
				$mysqli->query("INSERT INTO `answers` (`id`, `answer`, `answer_id`, `token`) VALUES (NULL, '" . $answerText . "', '" . $row["id"] . "', '" . $token . "')");
			}
			else if (isset($_POST["text" . $row["id"]]))
			{
				if ($noParamsSet)
				{
					deactivateToken($mysqli, $token);
					$noParamsSet = FALSE;
				}
				$paramValue = $_POST["text" . $row["id"]][0];
				if ($paramValue == "")
					continue;
				
				$mysqli->query("INSERT INTO `answers` (`id`, `answer`, `answer_id`, `token`) VALUES (NULL, '" . $paramValue . "', '" . $row["id"] . "', '" . $token . "')");
			}
		}
	}
	
	if (!$noParamsSet)
	{
		echo "<br><h2 style='color:green; text-align: center; width:100%'>Die Umfrage erfolgreich durchgeführt</h2>";
		$mysqli->close();
		exit();
	}
	
	displayQuestions($mysqli);
?>