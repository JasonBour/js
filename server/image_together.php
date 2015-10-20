<?php

$image = "5.png";
$tem = "./templates/001.png";


?>

<body onload="load()">
<canvas id="canvas">
</canvas>
<img src="<?php echo $image ;?>" id="image" >
<img src="<?php echo $tem ; ?>" style="visibility:hidden;margin_left:100000px;" id="tem">


<script type="text/javascript" charset="utf-8">
function load(){
	
	 var image=document.getElementById('image').attributes["src"].nodeValue+"?"+Date.parse(new Date());
	
	 var img = new Image(); 
     var width = null ;
     var height = null;	 
// 改变图片的src    
img.src = image; 
var check = function(){    
    //document.body.innerHTML += '<div>from:<span style="color:red;">check</span> : width:'+img.width+',height:'+img.height+'</div>';   
};    
var set = setInterval(check,40);    
// 加载完成获取宽高    
img.onload = function(){    
    //document.body.innerHTML += '<div>from:<span style="color:blue">onload</span> : width:'+img.width+',height:'+img.height+'</div>';    
    // 取消定时获取宽高    
    clearInterval(set);   
  width = img.width;
  height = img.height;  
var canvas = document.getElementById('canvas');
var context = canvas.getContext("2d");
var tem = document.getElementById('tem');
canvas.style.width=width;
canvas.style.height=height;

context.drawImage(document.getElementById('image'),0,0);
//context.drawImage(tem,0,0);
  };



}
</script>
</body>