<?php 
    include ('showImages.php');
	
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title></title> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
       <link media="all" rel="stylesheet" href="./main.css" type="text/css">
		<style type="text/css" media="screen">
		body 	{ font: 75% "Lucida Grande", "Trebuchet MS", Verdana, sans-serif; background-color: #333333;}
		/*
		canvas background-color: transparent;
		background: url('./server/templates/001.png');
		*/
		canvas 	{  border: 1px solid gray; top: 0; left: 0; position: absolute;}
		canvas.resize-ne { cursor: ne-resize; }
		canvas.resize-se { cursor: se-resize; }
		canvas.resize-sw { cursor: sw-resize; }
		canvas.resize-nw { cursor: nw-resize; }
		canvas.move { cursor: move; }
		canvas.default { cursor: default; }
		
		input 	{ margin-left: 20px; }
		fieldset {   width: 80%; }
		.fieldset {  width: 80%; }
		#ft 	{  height: 96px; width: 99%; border-top: 1px solid ; padding: 5px; position: absolute;  top: 0; left: 0; }
		#ft span { width: 100%; }
		#templates {height: 96px; width: 99%; margin-top: 35% ; position: absolute;  left: 0;}

           ul,li { list-style:none}
 .footer { position:relative; margin:20px auto; width:440px;}
 .footer .prev,.img-scroll .next { position:absolute; display:block; width:50px; height:100px; background-color:#000;
 top:0; color:#FFF; text-align:center; line-height:100px}
 .footer .prev { left:0;cursor:pointer;}
 .footer .next { right:0;cursor:pointer;}
 .img-list { position:relative; width:920px; height:100px; margin-left:10px; overflow:hidden}
 .img-list ul { width:9999px;}
 .img-list li { float:left; display:inline; width:100px; margin-right:10px; height:100px; background-color:#BDBDDF; text-align:center; line-height:100px;}
 div.canvasdemo{ float: right; }


	</style>
    </head>
    <body id="canvasdemo" onLoad="">
	<canvas id="canvid1"></canvas>

	<img src="Images/px.png" id="px" style="visibility: hidden;">
   <div class="left" style="height: 812px;">
    <h3>效果</h3>
    <ul id="effects" class="effects">
    <li class="e_item"><div class="imgWrapper"><img src="./AlloyPhoto 简约版--Tencent AlloyTeam_files/e1.jpg" alt="">原图</div></li>
    <li class="e_item"><div class="imgWrapper"><img src="./AlloyPhoto 简约版--Tencent AlloyTeam_files/e1.png" alt="">美肤效果</div></li>
    <li class="e_item"><div class="imgWrapper"><img src="./AlloyPhoto 简约版--Tencent AlloyTeam_files/e2.png" alt="">素描效果</div></li>
    <li class="e_item"><div class="imgWrapper"><img src="./AlloyPhoto 简约版--Tencent AlloyTeam_files/e3.png" alt="">自然增强</div></li>
    <li class="e_item"><div class="imgWrapper"><img src="./AlloyPhoto 简约版--Tencent AlloyTeam_files/e4.png" alt="">紫调效果</div></li>
    <li class="e_item"><div class="imgWrapper"><img src="./AlloyPhoto 简约版--Tencent AlloyTeam_files/e5.png" alt="">柔焦效果</div></li>
    <li class="e_item"><div class="imgWrapper"><img src="./AlloyPhoto 简约版--Tencent AlloyTeam_files/e6.png" alt="">复古效果</div></li>
    <li class="e_item"><div class="imgWrapper"><img src="./AlloyPhoto 简约版--Tencent AlloyTeam_files/e7.png" alt="">黑白效果</div></li>
    <li class="e_item"><div class="imgWrapper"><img src="./AlloyPhoto 简约版--Tencent AlloyTeam_files/e8.png" alt="">仿lomo</div></li>
    <li class="e_item"><div class="imgWrapper"><img src="./AlloyPhoto 简约版--Tencent AlloyTeam_files/e9.png" alt="">亮白增强</div></li>
    <li class="e_item"><div class="imgWrapper"><img src="./AlloyPhoto 简约版--Tencent AlloyTeam_files/e10.png" alt="">灰白效果</div></li>
    <li class="e_item"><div class="imgWrapper"><img src="./AlloyPhoto 简约版--Tencent AlloyTeam_files/e11.png" alt="">灰色效果</div></li>
    <li class="e_item"><div class="imgWrapper"><img src="./AlloyPhoto 简约版--Tencent AlloyTeam_files/e12.png" alt="">暖秋效果</div></li>
    <li class="e_item"><div class="imgWrapper"><img src="./AlloyPhoto 简约版--Tencent AlloyTeam_files/e13.png" alt="">木雕效果</div></li>
    <li class="e_item"><div class="imgWrapper"><img src="./AlloyPhoto 简约版--Tencent AlloyTeam_files/e14.png" alt="">粗糙效果</div></li>
    </ul>
  </div>



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
			
            <img name='<?php echo 'img'.$i ;?>' src='<?php echo $files[$i] ;?>' id='<?php echo 'img'.$i ;?>' onClick="add(this)" style="height:70px">


			<?php
			}

			?>
			<input type="button"  onClick="saveToimage();" value="Add  more photos"  style="float: right"></input>
		</fieldset>
</div>
 
	<div id="toggle"  style="margin-left: 50%" > 
		<img src="Images/slide.png">
		 </div>
		</div>


 <div id="templates"   >
    <div id="toggle2">
    	
    </div>		 
	<div id="footer">	
	<fieldset>   
	<div class="img-list">
	<img src="Images/pre.png" style="float: left;padding-top: 30px;" class="prev">
		<ul>       
       <?php 
			for($i=0;$i<count($files1);$i++){?>
			
            <li class='<?php echo 'tem'.$i ;?>'><img  src='<?php echo $files1[$i] ;?>' id='<?php echo 'tem'.$i ;?>' onClick="addTem(this)" style="height:70px"></li>
            
			<?php
			 echo "<img id='tem$i' src='$files1[$i]' style='display: block; visibility: hidden; position: absolute; top: -1000; left: -1000;'>";

			}

			?>
             </ul>
              <img src="Images/next.png" style="padding-top: 30px;float: left;" class="next">

                          </div>
             
			</fieldset>
	  </div>				
		</div>
<img src="" id="test">
	<script src="canvas_files/utilitie.js" type="text/javascript" charset="utf-8"></script>
	<script src="canvas_files/canvasEl.js" type="text/javascript" charset="utf-8" ></script>
	<script src="canvas_files/canvasIm.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript" charset="utf-8">

function slide(){
 var show =1 ;
 $('#toggle2').click(
 	
   function(){

    if($('#footer').is(':hidden')){
           		$('#footer').slideUp('slow');
           		show=0;
            }else{
            	$('#footer').slideDown('slow');
            	show=1;
            }


   } 

 	);

};



 function DY_scroll(wraper,prev,next,img,speed,or)
 { 
  var wraper = $(wraper);
  var prev = $(prev);
  var next = $(next);
  var img = $(img).find('ul');
  var w = img.find('li').outerWidth(true);
  var s = speed;
  next.click(function()
       {
        img.animate({'margin-left':-w},function()
                  {
                   img.find('li').eq(0).appendTo(img);
                   img.css({'margin-left':0});
                   });
        });
  prev.click(function()
       {
        img.find('li:last').prependTo(img);
        img.css({'margin-left':-w});
        img.animate({'margin-left':0});
        });
  if (or == true)
  {
   ad = setInterval(function() { next.click();},s*1000);
   wraper.hover(function(){clearInterval(ad);},function(){ad = setInterval(function() { next.click();},s*1000);});

  }
 }
 DY_scroll('.footer','.prev','.next','.img-list',3,false);
  
  </script>


	<script type="text/javascript" charset="utf-8">
	 
     $(function(){
		
           $('#toggle').click(
           	function(){
           		
            if($('#header').is(':hidden')){
           		$('#header').slideDown('slow');
           		
            }else{
            	$('#header').slideUp('slow');
            	
            }

           	}
	);
	  
	
	  

     });


	</script>
	
	<script type="text/javascript" charset="utf-8">
	  
	    function add(th){
	 
	  var	id =th.name; 
		 
		 CanvasDemo.togglePolaroid(id);
	 };

	 function addTem(th){
       //alert("更换模板会导致当前进度丢失，请先保存当前任务");
	 	var	path =document.getElementById(th.id).attributes["src"].nodeValue;
            //  alert(path);
             document.getElementById('canvid1').style.background="url("+path+")";
             
		//$('canvid1').css('background-image',"url(./server/templates/001.png)" );
        // li.css({'background-color':'#5344C3'});
		 //CanvasDemo.AddTemplate(id);
      
	 };

	 function saveToimage(){
          alert("正在保存");
         // this.addImage(new Canvas.Img('px',{}));
          //document.getElementById('canvid1').style.background="transparent";
       
          var YD = YAHOO.util.Dom;
			var YE = YAHOO.util.Event;
           var  canvas = document.getElementById('canvid1');

         var context = canvas.getContext("2d");
             context.drawImage(document.getElementById('tem1'),0,0);

			var width = YD.getViewportWidth()-250 ; //这个和下面的对应 到时候记得一起改
            var height = YD.getViewportHeight() - 55 ;
             var imageData = canvas.toDataURL().split(',');  //这个默认是返回base64编码格式的png   返回的数据是除掉  data:image/png;base64, 的base64字符串
            
           $.ajax({
             type: 'POST',
            // url:'http://1.universities.sinaapp.com/test.php',
             url: './server/imageUpload.php',
            data: 'image='+imageData[1],
          success: function(){

          	alert('保存成功');
          },
          error: function(){
                alert('抱歉，保存失败');
            },    
           dataType: "text",//"xml", "html", "script", "json", "jsonp", "text",
});
         // window.location.href='./server/imageUpload.php';
          // document.getElementById("test").src = canvas.toDataURL();

	 };
	
		var CanvasDemo = function() {
		
			var YD = YAHOO.util.Dom;
			var YE = YAHOO.util.Event;
			 var template_id = "tem1" ; 	
			var canvas1 = new Canvas.Element();
			
			var img = [];
			return {
				init: function() {
					 
					canvas1.init('canvid1',  { width: YD.getViewportWidth()-250, height: YD.getViewportHeight() - 55 });			
					//img[img.length] = new Canvas.Img(template_id, {});					
					// @param array of images ToDo: individual images
					
					//canvas1.addImage(img[0]);
					//canvas1._aImages[0].setCornersVisibility(true);
					
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
				
					canvas1._aImages =[];
					
					 
				    canvas1.addImage(new Canvas.Img(imageid,{}));
				    //canvas1.addImage(new Canvas.Img('px',{}));
					 
				      //canvas1.addImage(new Canvas.Img("jason",{})); 
				//context.drawImage(img,0,0);
				     //   canvas1.AddTemplate(new Canvas.Img("img1",{}));
				//document.getElementById('canvid1').style.background="url('./server/templates/002.png')";
				
					for (var i = 0, l = canvas1._aImages.length; i < l; i += 1) {
						canvas1._aImages[i].setCornersVisibility(true);
					}
					canvas1.renderAll();
						
              
              



         










				
				},
			    AddTemplate:	function(imageid){
			    	 //canvas1.AddTemplate(new Canvas.Img("tem1",{}));
			    	canvas1._aImages=[];
			    	canvas1.addImage(new Canvas.Img(imageid,{})); 
			    	canvas1._aImages[0].setCornersVisibility(true);
			    } ,
				
				
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