<?php

$image = "5.png";
$tem = "./templates/002.png";


?>

<body onload="load()">
<img src="5.png" id="image"  >
<canvas id="canvas" width="1670px;" height="894px;">
</canvas>

<img src="<?php echo $tem ; ?>" style="visibility:hidden;margin_left:100000px;"  id="tem">


<script type="text/javascript" charset="utf-8">
 function load(){
	 var image = document.getElementById('image');
var canvas = document.getElementById('canvas');
var context = canvas.getContext("2d");
var tem = document.getElementById('tem');


context.drawImage(image,0,0);
context.drawImage(tem,0,0);
canvas.toDataURl();

 }
</script>
</body>