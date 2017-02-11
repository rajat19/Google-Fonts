<!DOCTYPE html>
<html>
<head>
	<?php $fontArray = array('CaveatBrush', 'Exo', 'IndieFlower', 'Lobster', 'Pangolin', 'Raleway', 'Sansita', 'Slabo', 'TitilliumWeb');?>
	<title>Fonts Google</title>
	<link rel="stylesheet" type="text/css" href="materialize.custom.css">
	<?php
		echo '<style type="text/css">';
		foreach($fontArray as $font) {
			echo "@font-face {
				  font-family: $font;
				  src: local('$font Regular'),
				       local('$font-Regular'),
				       url(fonts/$font-Regular.ttf);
				  font-weight: bold;
				}";
			echo ".$font { font-family: '$font', cursive; }";
		}
		echo '</style>';
	?>
</head>
<body class="red lighten-4">
<div class="container">
	<div class="row">
		<div class="card z-depth-3">
			<div class="card-content blue-grey white-text">
				<span class="card-title">Fonts sponsored by Google</span>
			</div>
			<div class="card-content">				
				<table class="">
					<?php
						foreach($fontArray as $font) {
							echo "<tr>";
							echo "<td><h3 class='$font'>Hi I'm in $font font</h3></td>";
							echo "<td><a href='fonts/$font-Regular.ttf' class='btn waves-effect waves-light blue-grey lighten-1'>Download</a></td>";
							echo "</tr>";
						}
					?>
				</table>
			</div>
		</div>	
	</div>
</div>
</body>
</html>