<?php 
 
  // Operações
    echo "Mathematics operations: ";
     $A = 2;
     $B = 3;
     $Soma = $A + $B;
     print $Soma;

  // Operações Condicionais   
  
  echo "<br> If and Else: ";
  $A1 = 5;
  $B1 = 2;
      
    if($B1 % 2 == 1){
         echo "Numero impar";
    }else{
         echo "Numero par";
    }

  // Laços de Repetição

  echo "<br> While: ";
  $i = 0;

    while ($i < 10){
        echo $i;
        $i++;
    }

  echo "<br> Do...while: ";
  $i = 0;
    
    do{
        echo $i;
        $i++; 
    }while($i < 10);

  echo "<br> For: ";

    for($i = 0; $i < 10; $i++){
        echo $i;
    }

  echo "<br> Foreach: ";
  $i = [0,1,2,3,4,5,6,7,8,9];
  
    foreach ($i as $j){
        echo $j;
    }
