<HTML>
	<HEAD>
		<TITLE>Using Arithmetic Operators</TITLE>
	</HEAD>
	<BODY>
		<?php
		$degrees = "95";
		$hot = "yes";
		if (($degrees > 100) || ($hot == "yes")) {
			echo "<P>TEST 1: It's <strong>really</strong> hot!</P>";
			} 
		else {
			echo "<P>TEST 1: It's bearable.</P>";
			}
		if (($degrees > 100) && ($hot == "yes")) {
			echo "<P>TEST 2: It's <strong>really</strong> hot!</P>";
			}
		else {
			echo "<P> TEST 2: It's bearable.</P>";
			}
		?>
	</BODY>
</HTML>

