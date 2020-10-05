<!-- Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->
<?php
  // Array che contiene le partite della giornata
 $matches = [
   //Array partita
   [
     "Casa" => "Olimpia Milano",
     "Ospiti" => "Universo Treviso",
     "Punti casa" => 104,
     "Punti ospiti" => 64
   ],
   [
     "Casa" => "Brescia",
     "Ospiti" => "Virtus Bologna",
     "Punti casa" => 80,
     "Punti ospiti" => 81
   ],
   [
     "Casa" => "Dinamo Sassari",
     "Ospiti" => "Trieste",
     "Punti casa" => 72,
     "Punti ospiti" => 74
   ],
   [
     "Casa" => "Brindisi",
     "Ospiti" => "Virtus Roma",
     "Punti casa" => 104,
     "Punti ospiti" => 64
   ],
   [
     "Casa" => "Cantù",
     "Ospiti" => "VL Pesaro",
     "Punti casa" => 81,
     "Punti ospiti" => 72
   ]
 ];
 //var_dump(count($matches));
 //var_dump($matches[0]);

 for ($i=0; $i < count($matches) ; $i++) {
   //var_dump($matches[$i]["Casa"]);
   $home = $matches[$i]["Casa"];
   $guest = $matches[$i]["Ospiti"];
   $home_score = $matches[$i]["Punti casa"];
   $guest_score = $matches[$i]["Punti ospiti"];

   echo $home." - ".$guest." | ".$home_score."-".$guest_score."<br>";
 }
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>PHP Snack 1</title>
   </head>
   <body>

   </body>
 </html>
