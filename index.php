<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>n25</title>
</head>
<body>

<?php
    //-----------------------
    // indeksinis masyvas  1
    //-----------------------
    // $indexed_arr = ["Mindaugas", "Jonas", "Antanas", "Mantas"];
    // for($i = 0; $i < count($indexed_arr); $i++){
    //     if ($i < count($indexed_arr)-1) {
    //         print($indexed_arr[$i] . "," .'<br>');
    //     } else {
    //         print($indexed_arr[$i] .'<br>');       
    //     }
    // }
            
    //-----------------------
    // Asociatyvus masyvas  1
    //-----------------------
    // $assoc_arr = ['AAA' => 1, 'BBB' => 2, 'CCC' => 3];
    // for($i = 0; $i < count(array_keys($assoc_arr)); ++$i) {
    //     if ($i< count($assoc_arr)-1) {
    //         echo array_keys($assoc_arr)[$i] .
    //          ' --> ' . $assoc_arr[array_keys($assoc_arr)[$i]] . ',' . "<br>";
    //     } else {
    //         echo array_keys($assoc_arr)[$i] .
    //          ' --> ' . $assoc_arr[array_keys($assoc_arr)[$i]] . ' ';
    //     }   
    // }

    //-----------------------
    // indeksinis masyvas 2
    //-----------------------
    // $indexed_arr = ["Mindaugas", "Jonas", "Antanas", "Mantas"];
    // for($i = 0; $i < count($indexed_arr); $i++){
    //     if  ($i % 2 != 0) {
    //         print($indexed_arr[$i] .'<br>');   
    //     } 
    // }

    //-----------------------
    // Asociatyvus masyvas  2
    //-----------------------
    // $assoc_arr = ['AAA' => 1, 'BBB' => 2, 'CCC' => 3, 'DDD' => 8];
    // for($i = 0; $i < count(array_keys($assoc_arr)); ++$i) {
    //     if ($i % 2 != 0) {
    //         echo array_keys($assoc_arr)[$i] .
    //          ' --> ' . $assoc_arr[array_keys($assoc_arr)[$i]] . ',' . "<br>";
    //     }
    // }

    /*
    //-----------------------
    // Daugybos lentele (paprasta)
    //-----------------------
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $ugis = $_POST['ugis'];  
        $svoris = $_POST['svoris']; 
    } 
    print(" DAUGYBOS LENTELĖ");
    print("<br>");
    $kmi = $svoris * $ugis ;
    print("<br>");
    ?>
    <form action="./" method="POST">  
    <label for="ugis">Įveskite pirmą daugiklį:</label><br>
    <input type="number" step="0.01" id="ugis" name="ugis"><br>
    <label for="svoris">Įveskite antrą daugiklį:</label><br>
    <input type="number" id="svoris" name="svoris"><br>
    <input type="submit" value="Skaičiuoti">
    </form>
    <? 
    print("<br>");
    print(" ATSAKYMAS: " . $kmi); 
    */
   
    //-----------------------
    // Daugybos lentele v2
    //-----------------------
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $ugis = $_POST['ugis'];  
        $svoris = $_POST['svoris']; 
    } 
    print("<br>");
    print(" DAUGYBOS LENTELĖ pagal Jūsų įvestą skaičių:");
    print("<br>");
    print("<br>");
    ?>

    <form action="./" method="POST">  
    <label for="ugis">Įveskite skaičių:</label><br>
    <input type="number" step="0.01" id="ugis" name="ugis"><br>
    <input type="submit" value="Išvesti daugybos lentelę">
    </form>

    <?     
    for($i = 1; $i <= $ugis; $i++){
        print("<br>");
        for($j = 1; $j <= $ugis; $j++){
            $kmi = $j * $i ;  
            print($i . 'x' . $j . ' = ' . $kmi . '<br>');
        } 
    }  
    

    ?>          
</body>
</html>