<!DOCTYPE html>
<html>
	<head>
	
	</head>
	<body>
		<canvas width="900" height="600" id="canvas"></canvas>
		<script>
			var cv = document.getElementById("canvas");
			var cx = cv.getContext("2d");

			var bkgData;
			
			var bkg = new Image();
			bkg.onload= function(){
				cx.drawImage(bkg, 0, 0)
				bkgData = cx.getImageData(0,0, cv.width, cv.height);
				cx.clearRect(0,0,cv.width,cv.height);
			}
			bkg.src = "http://2.bp.blogspot.com/-AJcOnTouX4M/VDodxT8n2LI/AAAAAAAAMm8/sP7O9X4uN0Y/s1600/201159__amazon-forest_p.jpg";
			//bkg.src = "http://aguitech.com/blue/images/logo_aguitech/Aguitech_logo.png";
		</script>
	</body>
</html>