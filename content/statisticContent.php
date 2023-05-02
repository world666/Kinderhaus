<?php
	set_include_path("../php" . PATH_SEPARATOR . "php");
	include 'visitorsControl.php';
	
	$mysqli = new mysqli($dbIPAddr, $dbUser, $dbPassword, $dnName);
	if ($mysqli->connect_errno)
		die("<p>Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error . "</p>");
	
	$questionsResult = $mysqli->query("SELECT `id`, `question`, `answers` FROM `questions`");
	if ($questionsResult->num_rows > 0)
	{
		$questionNumber = 1;
		echo "<div class='container pad_seite'>";
		echo "<h2>Statistic</h2>";
		echo "<br>";
		while($question = $questionsResult->fetch_assoc())
		{
			echo "<div class='form-group'>";
			echo "<h5>" . $questionNumber++ . ". " . $question["question"] . "</h5>";
			if ($question["answers"] != NULL)
			{
				if (strpos($question["answers"], '|') !== false)
				{
					$optionIndex = 0;
					$options = explode("|", $question["answers"]);
					foreach ($options as $option)
					{
						$answersResult = $mysqli->query("SELECT `answer` FROM `answers` WHERE `question_id`='" . $question["id"] . "' AND `answer`='" . $optionIndex ."'");
						echo "<div class='col-sm-offset-2 col-sm-10'>";
						echo "<label>" . $option . ": " . $answersResult->num_rows ."</label>";
						echo "</div>";
						$optionIndex++;
					}
				}
				else if (strpos($question["answers"], '&') !== false)
				{
					$optionIndex = 0;
					$options = explode("&", $question["answers"]);
					foreach ($options as $option)
					{
						$answersResult = $mysqli->query("SELECT `answer` FROM `answers` WHERE `question_id`='" . $question["id"] . "' AND `answer`='" . $optionIndex ."'");
						echo "<div class='col-sm-offset-2 col-sm-10'>";
						echo "<label>" . $option . ": " . $answersResult->num_rows ."</label>";
						echo "</div>";
						$optionIndex++;
					}
				}
			}
			else
			{
				$answersResult = $mysqli->query("SELECT `answer` FROM `answers` WHERE `question_id`='" . $question["id"] . "'");
				$answerNumber = 1;
				while($answer = $answersResult->fetch_assoc())
				{
					echo "<div class='col-sm-offset-2 col-sm-10'>" . $answerNumber++ . ". " .  $answer["answer"]. "</div>";
				}
			}
			echo "</div>";
		}
		echo "</div>";
	} 
	else 
	{
	  echo "Nicht gefunden";
	}
?>

 
