<?php
//include('resizeimage.php');
$path = './server/upload'; 
$path1 = './server/templates';

if(!is_dir($path))
	   echo "not a dir";
   $handle  = opendir($path);
   $files = array();
   while(false !== ($file = readdir($handle))){         
    if($file != '.' && $file!='..'){
     $path2= $path.'/'.$file;
     if(is_dir($path2)){
     getfiles($path2);         
     }else{
        if(preg_match("/\.(gif|jpeg|jpg|png|bmp)$/i", $file)){
        $files[] = $path.'/'.$file;
     }
     }         
    }
   }  
  


 $files1 = array();
if(!is_dir($path1))
     echo "not a dir";
   $handle  = opendir($path1);
  
   while(false !== ($file = readdir($handle))){         
    if($file != '.' && $file!='..'){
     $path2= $path.'/'.$file;
     if(is_dir($path2)){
     getfiles($path2);         
     }else{
        if(preg_match("/\.(gif|jpeg|jpg|png|bmp)$/i", $file)){
        $files1[] = $path1.'/'.$file;
     }
     }         
    }
   }  
  

?>

