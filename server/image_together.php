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
// �ı�ͼƬ��src    
img.src = image; 
var check = function(){    
    //document.body.innerHTML += '<div>from:<span style="color:red;">check</span> : width:'+img.width+',height:'+img.height+'</div>';   
};    
var set = setInterval(check,40);    
// ������ɻ�ȡ���    
img.onload = function(){    
    //document.body.innerHTML += '<div>from:<span style="color:blue">onload</span> : width:'+img.width+',height:'+img.height+'</div>';    
    // ȡ����ʱ��ȡ���    
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