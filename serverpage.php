

<?php

if(isset($_GET['text']))
$data=$_GET['text'];
$string=['padar','chancon','shadin','tuser','mamun','munna','polash'];
  if(in_array($data,$string)){
      echo "found your searching dada .....";
  }else{
      echo"Not found your searching dada ....";
  }
?>