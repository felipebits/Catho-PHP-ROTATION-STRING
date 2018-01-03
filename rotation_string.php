<?php
  $s1="vistaremotaentre";
  $s2="entrevistaremots";
  $aux=$s1;
  $ok=0;
  //Rotation
  for ($i=0;$i<strlen($aux);$i++){
    $aux=Rotacao($aux);
    if($aux==$s2){
      $ok=1;
      break;
    }
  }
  
  if($ok) echo $s1." é uma rotação de ".$s2;
  else echo $s1." é não uma rotação de ".$s2;

  
  function Rotacao($string){
    return substr($string, -1).substr($string, 0,-1);
  }
?>
