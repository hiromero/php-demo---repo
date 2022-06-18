<HTML>
	<HEAD>
		<TITLE>Using Arithmetic Operators</TITLE>
	</HEAD>
	<BODY>
		<?php
			$a = 85;
			$b = 24;
			echo "<P>Original value of \$a is $a and \$b is $b</P>";
			$c = $a + $b;
			echo "<P>Added \$a and \$b and got $c</P>";
			$c = $a - $b;
			echo "<P>Subtracted \$b from \$a and got $c</P>";
			$c = $a * $b;
			echo "<P>Multiplied \$a and \$b and got $c</P>";
			$c = $a / $b;
			echo "<P>Divided \$a by \$b and got $c</P>";
			$c = $a % $b;
			echo "<P>The modulus of \$a and \$b is $c</P>";
		?>
	</BODY>
</HTML>

