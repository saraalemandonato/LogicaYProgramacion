<html> 
 
<head> 
  <title>Problema</title> 
</head> 
 
<body> 
  <?php 
  $num = rand(1, 3); 
  if ($num ==1) {
echo "Muy deficiente";
} elseif ($num ==2 ) {
echo "Deficiente" ;
} elseif ($num ==3 ) {
echo "Suficiente" ;
} elseif ($num ==4 ) {
echo "Notable" ;
} elseif ($num ==5 ) {
echo "Sobrasaliente" ;
}
; 
  
   
  ?> 
</body> 
 
</html> 