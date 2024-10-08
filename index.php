<?php 

// $cars = array(
//     array("bmw","germany",100),
//     array("ferrari","itali",999),
//     array("golf2","holande",2),
// );

// echo $cars[0][0] . " :Origjina ". $cars[0][1]. "kosto:". $cars[0][2]. ".<br>" ;
// echo $cars[1][0] . " origjina: ". $cars[1][1]. "kosto:". $cars[1][2]. ".<br>"; 
// echo $cars[2][0] . "origjina" . $cars[2][1] . "kosto" . $cars[2][2] . ".<br>";

// for($row=0; $row<3; $row++ ){
//     echo "<p> Row number $row </p>";
//     echo "<ul>";
//     for($col=0; $col<3; $col++){
//         echo "<li>". $cars[$row][$col]. "</li>";

//     }
//     echo "</ul>";
    
// }


// $phones = array(
//     array("iphone14","20","10"),
//     array("iphone14","20","20"),
//     array("iphone14","20","25"),
// );

// echo $phones[0][0] . " :In stock ". $cars[0][1]. "Sold". $cars[0][2]. ".<br>" ;
// echo $phones[1][0] . " In stock ". $cars[1][1]. "Sold". $cars[1][2]. ".<br>"; 
// echo $phones[2][0] . "In stock" . $cars[2][1] . "Sold" . $cars[2][2] . ".<br>";


// $tabelaarr = array(
//     array(1,2,3),
//     array(1,2,3),
//     array(1,2,3)
// );

// for($i=1; $i<4; $i++){
//     for($j=1; $j<4; $j++){
//         echo "Array: $i elemente $j <br>"; 
//     }
// };


for($i=1; $i<5; $i++){
    for($j=1; $j<=$i; $j++){
    echo "*"; }
    echo "</br>";
    
};

$notat = array(
    "mtm" => "5",
    "mtm1" => "4",
    "mtm2" => "3",
    "mtm3" => "2",
);

foreach($notat as $landa => $nota){
    echo "Landa". $landa .", Nota;" .$nota;
    echo "<br> ";
};


?>

