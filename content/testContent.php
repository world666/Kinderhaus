<?php
	set_include_path("../php" . PATH_SEPARATOR . "php");
	include 'visitorsControl.php';
?>


<div class='container pad_seite'>
	<form class='form-horizontal' id='questions_form' method='POST'>
		<div class='form-group'>
			<h5>1. Erste Frage</h4>
			<div class='col-sm-offset-2 col-sm-10'>
				<div class='radio'>
					<label><input type='radio' value='0' name='question1[]'>&nbsp;Option1</label>
				</div>
			</div>
			<div class='col-sm-offset-2 col-sm-10'>
				<div class='radio'>
					<label><input type='radio' value='1' name='question1[]'>&nbsp;Option2</label>
				</div>
			</div>
			<div class='col-sm-offset-2 col-sm-10'>
				<div class='radio'>
					<label><input type='radio' value='2' name='question1[]'>&nbsp;Option3</label>
				</div>
			</div>
		</div>
		<div class='form-group'>
			<h5>2. Zweite Frage</h4>
			<div class='col-sm-offset-2 col-sm-10'>
				<div class='radio'>
					<label><input type='radio' value='0' name='question2[]'>&nbsp;Option1</label>
				</div>
			</div>
			<div class='col-sm-offset-2 col-sm-10'>
				<div class='radio'>
					<label><input type='radio' value='1' name='question2[]'>&nbsp;Option2</label>
				</div>
			</div>
		</div>
		<div class='form-group'>
			<h5>3. Text Frage</h4>
			<div class='col-sm-offset-2 col-sm-10'>
				<label class='control-label'>Antwort:</label>
				<textarea class='form-control' rows='5' name='question3[]'/>
			</div>
		</div>
		<div class='form-group'>
			<h5>4. Check Frage</h4>
			<div class='col-sm-offset-2 col-sm-10'>
				<div class='checkbox'>
					<label><input type='checkbox' value='0' name='question4[]'>&nbsp;Option1</label>
				</div>
			</div>
			<div class='col-sm-offset-2 col-sm-10'>
				<div class='checkbox'>
					<label><input type='checkbox' value='1' name='question4[]'>&nbsp;Option2</label>
				</div>
			</div>
		</div>
		<div class='form-group'>
			<button style='background-color: #14A54A;' type='submit' class='btn btn-default'>Senden</button>
		</div>
	</form>
</div>