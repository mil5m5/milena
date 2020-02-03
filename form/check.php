<?php
    $numbers = [0,1,2,3,4,5,6,7,8,9];
    $letters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z" ];
    $row = [];
    $res_num = "";
    $res_let = "";
    if (isset($_POST["send"])){
        $length_row = $_POST["length_row"];
        $content = $_POST["content"];
        for ($i = 0; $i < $length_row; $i++){
            if ($content == "int"){
                array_push($row, $numbers[rand(0,count($numbers)-1)]);
            }else if ($content == "let"){
                array_push($row, $letters[rand(0,count($letters)-1)]);
            }
        }
        if ($content == "int_let"){
            for ($j = 0; $j < $length_row/2; $j++){
                array_push($row, $numbers[rand(0,count($numbers)-1)]);
                array_push($row, $letters[rand(0,count($letters)-1)]);
            }
        }
        for ($s = 0; $s < count($row); $s++){
            if(is_int($row[$s])){
                $res_num = $res_num.$row[$s];
            }else{
                $res_let = $res_let.$row[$s];
            }
        }
        print_r($row);
        echo "<br/>";
        echo "Numbers: ". $res_num."<br/>";
        echo "Letters: ". $res_let."<br/>";
    }