<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>
      <?php
        $primaveraVariable= 2;
        echo $primaveraVariable. "<br>";
        $segundaVariable=12345;
        echo $segundaVariable;
        ?>
        </h1>
        <p>
        <h2>
            <?php
           //sumar datos 
              echo 'esto es otra seccion';
               $primaveraVariable= 2;
                $segundaVariable=5;
                $lenguaje='javascript';
                echo '<br>';
                echo $primaveraVariable + $segundaVariable; 
                if ($primaveraVariable < 1){
                echo '<br>';    
               echo 'soy menor';
               }
            else {
                   echo 'soy mayor';
                 }
                 echo '<br>';
                 switch ($lenguaje) {
                     case "php":
                         echo 'php';
                         break;
                     case "javascript":
                         echo 'javascript';
                         break;
                     case "html":
                         echo 'html';
                         break;
                   }
                   
                   $arreglo=[2, "HOLA",5];
                   echo $arreglo[1];
            ?>
                    </p>
            </h2>
            <pre>
            <h3>
                <?php
                     print_r($arreglo);
                 ?>
         </h3>
           </pre>
        
        <pre>
            <h3>
                <?php
                     var_dump($arreglo);
                     echo '<br>';
                     $arreglo[]='phyton';
                     var_dump($arreglo);
                     
                 ?>
         </h3>
           </pre>
     </body>
</html>
