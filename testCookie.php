<?php
if(isset($_COOKIE['cpt'])){
	$counter=$_COOKIE['cpt'];
	$counter++;
	setcookie('cpt',$counter);
	
}else{
	$counter=1;
	setcookie('cpt',$counter);//creation
	
	
	
}
?>
<html>
<head>
<title></title>
</head>
<body><?php
if($counter==1){
	echo'welcome your first visit';
	
}
else{
	
	echo 'thanks for your '.$counter.' visit'; 
}
?></body></html>