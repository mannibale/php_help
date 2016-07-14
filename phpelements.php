<?php
//This is a comment
$simpleEcho ="<p>This is a simple echo test.</p>";

$mainGreeting ="<h2>PHP - Elements Page</h2>";

$secondPost ="<p>This is where the php elements come to life:</p>";
//Line Break call
$lineBreak ="<br/>";
//Horizontal Rule
$horizontalRule ="<hr/>";

//Primary & Secondary Colors
$primary_col_LIST=array("Red","Blue","Yellow");
$secondary_col_LIST=array("Violet","Orange","Green");

//Color call & Statement Echo
list($a,$b,$c) = $primary_col_LIST;
$prim_col_ECHO="<p>The three Primary Colors are: $a, $b, $c.</p>";

list($d,$e,$f) = $secondary_col_LIST;
$seco_col_ECHO="<p>The three Secondary Colors are: $d, $e, $f.</p>";

//Result of Color Combine - I called both lists because I thought I had to.
list($a,$b,$c) = $primary_col_LIST;
list($d,$e,$f) = $secondary_col_LIST;
$col_res1_ECHO="<p>The combination of $a and $b will yield $d.</p>"; //Violet
$col_res2_ECHO="<p>The combination of $a and $c will yield $e.</p>"; //Orange
$col_res3_ECHO="<p>The combination of $b and $c will yield $f.</p>"; //Green

//White & Black below
$black="<p>Black is the absence of all color.</p>";
$white="<p>White is the presence of all color.</p>";

// echo $simpleEcho;

?>


<!doctype html>

<html>

	<head>

		<title>PHP - Elements</title>

		<style>
			#red{
				color:red;
			}
			#blue{
				color:blue;
			}
			#yellow{
				color:yellow;
			}
			#violet{
				color:violet;
			}
			#orange{
				color:orange;
			}
			#green{
				color:green;
			}
			#black{
				color:black;
			}
			#white{
				color:white;
				text-shadow: 1px 1px black;
			}
		</style>

	</head>

	<body>

		<?php echo $mainGreeting?>

		<?php echo $secondPost?>

		<?php echo $horizontalRule?>

		<?php echo $prim_col_ECHO?>

		<?php echo $seco_col_ECHO?>

		<?php echo $black?>

		<?php echo $white?>

		<?php echo $horizontalRule?>

		<?php echo $col_res1_ECHO?>

		<?php echo $col_res2_ECHO?>

		<?php echo $col_res3_ECHO?>

	</body>

</html>
