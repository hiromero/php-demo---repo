<HTML>
	<HEAD>
		<TITLE>Calculation Result</TITLE>
	</HEAD>
	<BODY>
		<?php
			if (($_POST['val1'] == "") || ($_POST['val2'] == "") || ($_POST['calc'] =="")) {
				header("Location: calculate_form.php");
				exit;
				}
			if ($_POST['calc'] == "add") {
				$result = $_POST['val1'] + $_POST['val2'];
			} else if ($_POST['calc'] == "subtract") {
				$result = $_POST['val1'] - $_POST['val2'];
			} else if ($_POST['calc'] == "multiply") {
				$result = $_POST['val1'] * $_POST['val2'];
			} else if ($_POST['calc'] == "divide") {
				$result = $_POST['val1'] / $_POST['val2'];
			}
		?>
		<P>The result of the calculation is: <?php echo "$result"; ?></P>
	</BODY>
</HTML>