<HTML>
	<HEAD>
		<TITLE>Using assignment operators</TITLE>
	</HEAD>
	<BODY>
		<?php
			$origVar = 100;
			echo "<P>Original value is $origVar</P>";
			$origVar -= 12;
			echo "<P>Subtracted a value, now it's $origVar</P>";
			$origVar .= " chickens";
			echo "<P>Final answer: $origVar</P>";
		?>
	</BODY>
</HTML>
