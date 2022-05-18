<?php
// PHP section

// set some variables
// Image directory! fill in! relative to root
$imageDir = '/front/';
// print_r($_SERVER['DOCUMENT_ROOT'].$imageDir);
// exit();
// print_r(define('SERVERPATH', $_SERVER['DOCUMENT_ROOT'].$imageDir));
define('SERVERPATH', $_SERVER['DOCUMENT_ROOT'].$imageDir);
define('HTTPPATH', 'http://'.$_SERVER['HTTP_HOST'].$imageDir);
// read the names of images from the image directory
$dir = opendir(SERVERPATH);
$javascriptArray = null;
$i = null;
while (false !== ($file = readdir($dir))) {
  if (preg_match('/\.(jpg|jpeg|png|gif|bmp)$/i', $file)){
    print_r($file);
    $javascriptArray .= $i.'"'.HTTPPATH.$file.'"';
    $i = ',';
	}
}
closedir($dir);

// Html section
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
		<title>Rotate Images</title>
		<script type="text/javascript">
			rotatingImages = new Array(<?php echo $javascriptArray; ?>);
			imageCount = rotatingImages.length;
			firstTime = true;
			duration = "2"; //seconds
		
      function startRollRandom(params) {
        console.log('Ayam goreng');
        rotateImage();
        var x = document.getElementById('buttonGenerate');
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
      }

			function rotateImage(){
				// Cycle through images sequencially starting with a random image
				// Do not update the image if loading is not yet completed
				if (document.getElementById('rotatingImage').complete || firstTime){
					if (firstTime) {
						thisImage = Math.floor((Math.random() * imageCount))
						firstTime = false
            console.log("firstTime "+firstTime);
            document.getElementById('rotatingImage').src = rotatingImages[thisImage]
            setTimeout("rotateImage()", duration * 100)
					}else{
            console.log("not firstTime "+firstTime);
						thisImage++
						if (thisImage == imageCount) {
              // break;
							thisImage = 0
              console.log("Break ");
              document.getElementById('rotatingImage').src = rotatingImages[thisImage]
              var x = document.getElementById('buttonGenerate');
              if (x.style.display === "none") {
                x.style.display = "block";
              } else {
                x.style.display = "none";
              }
						}else{
              document.getElementById('rotatingImage').src = rotatingImages[thisImage]
              setTimeout("rotateImage()", duration * 100)
            }
					}
          console.log("thisImage "+thisImage);
      
          //code before the pause
          // setTimeout(function(){
          //   document.getElementById('rotatingImage').src = rotatingImages[thisImage]
          //   //do what you need here
          // }, 2000);
				}
			}

      

		</script>
		<style type="text/css">
			#slideshow{
				width:164px;
				height:124px;
				border-top:2px solid #997;
				border-right:2px solid #997;
				border-bottom:2px solid #664;
				border-left:2px solid #664;
			}
			
			#rotatingImage{
				display:block;
				width:160px;
				height:120px;
				border-top:2px solid #664;
				border-right:2px solid #664;
				border-bottom:2px solid #997;
				border-left:2px solid #997;
			}
		</style>
	</head>
	<body>
		<div id="slideshow">
			<img id="rotatingImage" src="" alt="">
		</div>

    <button onClick="startRollRandom(333)" id="buttonGenerate" type="button" style="display: block;">Click me</button>
		<script type="text/javascript">
			// rotateImage();
		</script>
	</body>
</html>