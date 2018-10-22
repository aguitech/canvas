<!-- https://www.youtube.com/watch?v=iTiEYrZfm4A -->

<!DOCTYPE html>
<html>
	<head>
	
	</head>
	<body style="background:black;">
		<canvas width="900" height="600" id="canvas"></canvas>
		<script>
		var cv = document.getElementById('lienzo')
		var cx = cv.getContext('2d')

		var bkgData, maskData

		var mask = new Image()
		var bkg = new Image()
		bkg.onload = function() {
		    cx.drawImage(bkg, 0, 0)
		    bkgData = cx.getImageData(0, 0, cv.width, cv.height)
		    cx.clearRect(0, 0, cv.width, cv.height)
		    mask.src = 'https://vignette.wikia.nocookie.net/lossimpson/images/b/bd/Homer_Simpson.png/revision/latest?cb=20100522180809&path-prefix=es'
			    
		}
		bkg.src = 'http://aguitech.com/blue/images/logo_aguitech/Aguitech_logo.png'

		mask.onload = function() {
		    cx.drawImage(mask, 0, 0)
		    maskData = cx.getImageData(0, 0, cv.width, cv.height)
		    cx.clearRect(0, 0, cv.width, cv.height)

		    var npixels = maskData.width * maskData.height

		    for (var index = 0; index < npixels; index++) {
		        bkgData.data[index * 4 + 3] = maskData.data[index * 4 + 3]
		    }

		    cx.putImageData(bkgData, 0, 0)
		}

						
			//mask.src = "http://aguitech.com/blue/images/logo_aguitech/Aguitech_logo.png";
			//";
		</script>
	</body>
</html>