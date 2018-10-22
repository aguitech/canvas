<!DOCTYPE html>
<html>
	<head>
	
	</head>
	<body>
		<canvas width="500" height="500" id="canvas"></canvas>
		<script>
			var cnv = document.getElementById("canvas");
			var ctx = cnv.getContext("2d");
			var INNER_RADIUS = 50;
			var OUTER_RADIUS = 80;

			ctx.beginPath();
			ctx.fillStyle = "green";
			ctx.arc(100, 100, OUTER_RADIUS, Math.PI * 2 * 0.125, Math.PI * 2 * 0.40, 0);
			ctx.arc(100, 100, INNER_RADIUS, Math.PI * 2 * 0.4, Math.PI * 2 * 0.125, 0);
			
			ctx.fill();
			
			ctx.beginPath();
			ctx.strokeStyle = "yellow";
			ctx.arc(100, 100, OUTER_RADIUS, Math.PI * 2 * 0.4, Math.PI * 2 * 0.65, 0);
			ctx.stroke();

			ctx.beginPath();
			ctx.strokeStyle = "red";
			ctx.arc(100, 100, OUTER_RADIUS, Math.PI * 2 * 0.65, Math.PI * 2 * 0.85, 0);
			ctx.stroke();
		</script>
	</body>
</html>