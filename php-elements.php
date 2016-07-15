<?php
	$primary_colors = array( 'Red', 'Blue', 'Yellow' );
	$secondary_colors = array( 'Violet', 'Orange', 'Green' );
?>

<!doctype html>
<html>
  <head>
    <title>PHP - Elements</title>
  </head>
  <body>
    <h2>PHP - Elements Page</h2>
    <p>This is where the php elements come to life:</p>
    <hr />
    <p>The three Primary Colors are:</p><?php
      foreach( $primary_colors as $color ) { ?>
        <span style="color: <?php echo $color; ?>"><?php echo $color; ?></span>,&nbsp;<?php
      } ?>
    <p>The three Secondary Colors are:</p><?php
      foreach( $secondary_colors as $color ) { ?>
        <span style="color: <?php echo $color; ?>"><?php echo $color; ?></span>,&nbsp;<?php
      } ?>
    <p>Black is the absence of all color.</p>
    <p>White is the presence of all color.</p>
    <hr />
    <p>The combination of <?php echo $primary_colors[0]; ?> and <?php echo $primary_colors[1];?> will yield <?php echo $secondary_colors[0]; ?>.</p>
    <p>The combination of <?php echo $primary_colors[0]; ?> and <?php echo $primary_colors[2];?> will yield <?php echo $secondary_colors[1]; ?>.</p>
    <p>The combination of <?php echo $primary_colors[1]; ?> and <?php echo $primary_colors[2];?> will yield <?php echo $secondary_colors[2]; ?>.</p>
  </body>
</html>
