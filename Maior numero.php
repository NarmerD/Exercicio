<html>
 <head>
  <title>Atividade</title>
 </head>
 <body>
 <form action="" method="get">
   Número 1:<input type="number" name="n1" /><br />
   Número 2:<input type="number" name="n2" /><br />
   Número 3:<input type="number" name="n3" /><br />
   Número 4:<input type="number" name="n4" /><br />
   Número 5:<input type="number" name="n5" /><br />
  <input type="submit" name="submit" value="Inserir" />
 </form> 
 <?php 
  $n1=$_GET['n1'];
  $n2=$_GET['n2'];
  $n3=$_GET['n3'];
  $n4=$_GET['n4'];
  $n5=$_GET['n5'];
  

  $maior = $n1;
  if($n2>$maior) $maior=$n2;
  if($n3>$maior) $maior=$n3;
  if($n4>$maior) $maior=$n4;
  if($n5>$maior) $maior=$n5;
  echo "O maior numero é $maior<br />";
  


 ?>
 </body>
</html>