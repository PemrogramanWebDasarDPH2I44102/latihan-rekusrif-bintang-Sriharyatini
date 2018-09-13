<?php

$baris= 8;
		printPiramida(0);
			function printPiramida($a){
					global $baris;
					printSpace(0,$a);
					printStar($baris,$a);
					echo "<br>";
					if (++$a <$baris);
		printPiramida($a);
		}
			function printSpace($b,$a){
					global $baris;
						if ($b > $baris - $a - 1){
						echo "&nbsp;";
						printSpace($b + 1, $a);
				}
			}
			function printStar($z,$a){
					global $baris;
					if ($z > $baris - $a -1){
					echo "   *&nbsp; " ;
			printStar($z - 1, $a);
	}
	}
?>
