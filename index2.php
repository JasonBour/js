<?php 
    include ('showImages.php');
	
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title></title> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    
		
<!--
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
		<script src="booklet/jquery.easing.1.3.js" type="text/javascript"></script>
		<script src="booklet/jquery.booklet.1.1.0.min.js" type="text/javascript"></script>

		<link href="booklet/jquery.booklet.1.1.0.css" type="text/css" rel="stylesheet" media="screen" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
		-->
		<style type="text/css" media="screen">
		body 	{ font: 75% "Lucida Grande", "Trebuchet MS", Verdana, sans-serif; }
		canvas 	{ background-color: transparent; border: 1px solid gray; top: 0; left: 0; position: absolute;}
		canvas.resize-ne { cursor: ne-resize; }
		canvas.resize-se { cursor: se-resize; }
		canvas.resize-sw { cursor: sw-resize; }
		canvas.resize-nw { cursor: nw-resize; }
		canvas.move { cursor: move; }
		canvas.default { cursor: default; }
		
		input 	{ margin-left: 20px; }
		fieldset {   width: 100%; }
		.fieldset {  width: 100%; }
		#ft 	{  height: 96px; width: 99%; border-top: 1px solid ; padding: 5px; position: absolute; top: 0; left: 0; }
		#ft span { width: 100%; }
	</style>
    </head>
    <body id="canvasdemo" onLoad="">
	<canvas id="canvid1"></canvas>
	<!--
	<img id="img4" src="canvas_files/4.jpg" />
	<img id="img1" src="canvas_files/7.jpg" />
	<img id="img2" src="canvas_files/8.png" />
	<img id="img3" src="canvas_files/9.jpg" />
	<img id="img4" src="canvas_files/5.jpg" />
	<img id="bg" src="canvas_files/bg.jpg" />
	
   -->
   <img id="jason" src="canvas_files/8.png" style="visibility:hidden;"/>
   <?php
   for($i=0;$i<count($files);$i++){
  echo "<img id='img$i' src='$files[$i]' style='display: block; visibility: hidden; position: absolute; top: -1000; left: -1000;'>";
  echo "<br/>";
}
   
   ?>
	<div id="ft"  class="content" >
	<div id="header">
	<fieldset>
			<legend>Photo</legend>
			<?php 
			for($i=0;$i<count($files);$i++){?>
			
            <img name='<?php echo 'img'.$i ;?>' src='<?php echo $files[$i] ;?>' onClick="add(this)" style="height:70px">
			<?php
			}

			?>
			<!--
			<img src="canvas_files/8.png" style="height:70px"  onClick="add(this)" name="img2" id="togglepolaroid">
			<img src="canvas_files/8.png" style="height:70px"name="img3" onClick="add(this)">
			<img src="canvas_files/8.png" style="height:70px">
			<img src="canvas_files/8.png" style="height:70px">
			-->
		</fieldset>
</div>
	<div id="toggle"  style="margin-left: 40%" > 
		<img src="Images/slide.png">
		 </div>
		</div>
	
	   


				<script src="canvas_files/utilitie.js" type="text/javascript" charset="utf-8"></script>
	<script src="canvas_files/canvasEl.js" type="text/javascript" charset="utf-8" ></script>
	<script src="canvas_files/canvasIm.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/1.6.4/jquery.js"></script>
	<script type="text/javascript" charset="utf-8">
	  function move(){
            var haederDiv = document.getElementById('ft');
            haederDiv.style.visibility="hidden";
            alert("set");
	  }


     $(function(){
           $('#toggle').click(
           	function(){
            if($('#header').is(':hidden')){
           		$('#header').slideDown('slow');
           		//$('#toggle').value('slideUp');
            }else{
            	$('#header').slideUp('slow');
            	$('#toggle').value('slideDown');
            }

           	}
	);

     });

  	
	</script>
	<script type="text/javascript" charset="utf-8">
	  
	    function add(th){
	  var	id =th.name; 
		 
		 CanvasDemo.togglePolaroid(id);
	 }
	
		var CanvasDemo = function() {
		
			var YD = YAHOO.util.Dom;
			var YE = YAHOO.util.Event;
			
			var canvas1 = new Canvas.Element();
			
			var img = [];
			return {
				init: function() {
					
					canvas1.init('canvid1',  { width: YD.getViewportWidth() - 5, height: YD.getViewportHeight() - 5 });			
					img[img.length] = new Canvas.Img('jason', {});
					
				
					
					
					
					
					
					// @param array of images ToDo: individual images
					
					canvas1.addImage(img[0]);
					
					
				
					
					
					//this.adaback();
					
					this.initEvents();
				},
				
				  
				initEvents: function() {
					YE.on('togglebg','click', this.toggleBg, this, true);
					YE.on('showcorners','click', this.showCorners, this, true);
					YE.on('togglenone','click', this.toggleNone, this, true);
					YE.on('toggleborders','click', this.toggleBorders, this, true);
					YE.on('togglepolaroid','click', this.togglePolaroid,  this, true);
					YE.on('pngbutton','click', function() { this.convertTo('png') }, this, true);
					YE.on('jpegbutton','click', function() { this.convertTo('jpeg') }, this, true);
				},
				switchBg: function() {
					canvas1.fillBackground = (canvas1.fillBackground) ? false : true;							
					canvas1.renderAll();
				},
				
				//! insert these functions to the library. No access to _aImages should be done from here
				showCorners: function() {
					this.cornersvisible = (this.cornersvisible) ? false : true;
					for (var i = 0, l = canvas1._aImages.length; i < l; i += 1) {
						canvas1._aImages[i].setCornersVisibility(this.cornersvisible);
					}
					canvas1.renderAll();
				},
				toggleNone: function() {
					for (var i = 0, l = canvas1._aImages.length; i < l; i += 1) {
						canvas1._aImages[i].setBorderVisibility(false);
					}
					canvas1.renderAll();
				},
				toggleBorders: function() {
					for (var i = 0, l = canvas1._aImages.length; i < l; i += 1) {
						canvas1._aImages[i].setBorderVisibility(true);
					}
					canvas1.renderAll();
				},
				
				
				togglePolaroid: function(imageid) {
 var context = canvas1.getContext("2d");
					context.clearRect(0,0,Canvas.height,Canvas.width);
				      canvas1.addImage(new Canvas.Img(imageid,{}));
				
				
				
				
				
				
				
				},
				
				
				convertTo: function(format) {
					var imgData = canvas1.canvasTo(format);
					window.open(imgData, "_blank");
				},
				whatever: function(e, o) {
					// console.log(e);
					// console.log(o);
				}
			}
		}();
		
		
		
		
		YAHOO.util.Event.on(window, 'load', CanvasDemo.init, CanvasDemo, true);
		
		
	


                  
</script>
    </body>
</html>