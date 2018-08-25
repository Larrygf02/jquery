<?php 
//Arreglo de nombres
 $a[] = "Anna";
 $a[] = "Brittany";
 $a[] = "Cindy";
 $a[] = "Diana";
 $a[] = "Eva";
 $a[] = "Fiona";
 $a[] = "Gunda";
 $a[] = "Guisel";
 $a[] = "Gimena";
 //conseguir el parametro de la URL
 $q=$_REQUEST["q"];
 $hint= "";

 if($q !== ""){
 	$q =strtolower($q);
 	$len=strlen($q);
 	foreach ($a as $name) {
 		if(stristr($q, substr($name, 0,$len))){
 			if($hint=== ""){
 				$hint = $name;
 			}else{
 				$hint.= ",$name";
 			}
 		}
 	}
 }
 echo $hint === "" ? "no sugerencia" : $hint;
 ?>