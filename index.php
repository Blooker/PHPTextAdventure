<html>
	<head>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<?php
				$man = <<<EOT
 
 _______
|       |
|-     -|
|' ___ '|
|_______|
EOT;
				$room = <<<EOT
				
           O                      
 _________/_\____________________ 
|_.-..-_-___.--...-____--.-.-__-.|
|                                |
|                                |
|                                |
|                                |

EOT;
		?>
	</head>
	<body>
	
		<script src="javascript.js"></script>
		<div id="picture">
			<canvas id="canvas"></canvas>
			<div id="snow"></div>
			
			<div class="game">
				<div class="center">
					<pre class="ascii">
						<?php	
							//echo $man;
							echo $room;
						?>
					</pre>
					<div class="buttons">
						<input type="submit" value="Look">
						<input type="submit" value="Backpack">
					</div>
				</div>
			</div>			
		</div>
		
	</body>
</html>