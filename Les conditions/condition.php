<?php
$age= 17;
 if($age>=18)
     {
        echo "Vous etes Majeur."     ;
     }else {   
             echo "Vous etes Mineur." ;

     }

     $note=14;
     if( $note>=16) {
        echo "Tres bien"; 
     }elseif($note>=10) {
       echo "passable";
}else {

  echo "Echec";
  }
  $jour="lundi";
  switch($jour){
        case "lundi":
                echo "echo debut de semaine";
                break;  
         case "vendredi":
                echo "Derniere jour avant le wekend";
                break;
          default:
        echo "Jour normal";
}



  

    
     ?>
