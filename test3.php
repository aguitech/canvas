<!DOCTYPE html>
<html>
	<head>
	
	</head>
	<body>
		<canvas width="1200" height="800" id="lienzo"></canvas>
		<script>
			var cnv, ctx, pos_x = 0, img;
			function anim(){

				ctx.clearRect(0, 0, 1200, 800);
				ctx.drawImage(img, pos_x, 0);
				pos_x += 1;
				setTimeout(anim, 50);
			}
			window.onload = function(){
				img = new Image();
				img.src = "http://aguitech.com/blue/images/logo_aguitech/Aguitech_logo.png";
				cnv = document.getElementById("lienzo");
				ctx = cnv.getContext("2d");
				//iniciar animacion
				anim();
			}
		</script>
	</body>
</html>