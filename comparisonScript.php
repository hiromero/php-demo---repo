<HTML>
	<HEAD>
		<TITLE>Using Comparison Operators</TITLE>
	</HEAD>
	<BODY>
		<?php
			$a = 21;
			$b = 15;
			echo "<P>Original value of \$a is $a and \$b is $b</P>";
			if ($a == $b) {
				echo "<P>TEST 1: \$a equals \$b</P>";
				}
			else {
				echo "<P>TEST 1: \$a is not equal to \$b</P>";
				}
			if ($a != $b) {
				echo "<P>TEST 2: \$a is not equal to \$b</P>";
				}
			else {
				echo "<P>TEST 2: \$a is equal to \$b</P>";
				}
			if ($a > $b) {
				echo "<P>TEST 3: \$a is greater than \$b</P>";
				}
			else {
				echo "<P>TEST 3: \$a is not greater than \$b</P>";
				}
			if ($a < $b) {
				echo "<P>TEST 4: \$a is less than \$b</P>";
				}
			else {
				echo "<P>TEST 4: \$a is not less than \$b</P>";
				}
			if ($a >= $b) {
				echo "<P>TEST 5: \$a is greater than or equal to \$b</P>";
				} 
			else {
				echo "<P>TEST 5: \$a is not greater than or equal to \$b</P>";
				}
			if ($a <= $b) {
				echo "<P>TEST 6: \$a is less than or equal to \$b</P>";
				} 
			else {
				echo "<P>TEST 6: \$a is not less than or equal to \$b</P>";
				}
		?>
	</BODY>
</HTML>

