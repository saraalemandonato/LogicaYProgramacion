<html> 
<head> 
  <title>Problema</title> 
</head> 
<body> 
  <?php 
  $estudiante1 = [4.3, 4.5, 4.0, 5.0]; 
  $estudiante2 = [1.0, 5.0, 3.5, 3.7]; 
  $estudiante3 = [2.0, 4.3, 4.2, 4.4];
$promedio= array_sum ($estudiante1) /count($estudiante1); 
$promedio2= array_sum ($estudiante2)/count($estudiante2);
$promedio3 = array_sum ($estudiante3) /count($estudiante3);
  echo "Las notas de el primer estudiante fueron $promedio<br>"; 
  echo "Las notas de el primer estudiante fueron $promedio2<br>"; 
  echo "Las notas de el primer estudiante fueron $promedio3<br>"; 
  ?> 
</body> 
</html>