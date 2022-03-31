<?php
$aux=$_GET["fecha"];
//$aux="2021-03-28";
$ao=date("Y",strtotime($aux));
$fecha=strtotime(date($aux));
$fechaprim=strtotime(date("$ao-03-21"));




if($fecha>$fechaprim && $fecha<=strtotime(date("$ao-04-30"))){

    $fecha2=date('l',$fecha);


if($fecha2=="Sunday"){
    $diad=date("d-m-Y",strtotime($aux));
echo "El dia ".$diad." es domingo de Ramos <br>";
$diad=date("d-m-Y",strtotime($aux."+7 days"));
    echo "El dia ".$diad." es domingo de Resurreccion <br>";

}else{

for($i=0;$i<=6;$i++){
   // 
   if($fecha2!="Sunday"){
    $diad=date("d-m-Y",strtotime($aux."+$i days")); 
   $fecha2=date('l',strtotime($diad));
   }else{
  }
   
}
echo "El dia ".$diad." es domingo de Resurrección  2<br> ";
 

 $diad=date("d-m-Y",strtotime($diad."-7 days"));
    echo "El dia ".$diad." es domingo de Ramos <br>";

}

}else{
    echo "fuera de fecha";
}
?>


