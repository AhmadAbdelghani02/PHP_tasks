<?php
$string = "Twinkle, twinkle, little star.";
$array = explode(', ', $string);
var_dump($array);
print "<br>";

/////////////////////////////////

function nextLetter($char) {
    $ascii = ord($char);
    if ($char === 'z') {
        return 'a';
    } 
    if ($char === 'Z') {
        return 'A';
    }
    return chr($ascii + 1);
}
$char = 'a';
echo nextLetter($char) . "<br>";

//////////////////////////////////

function insertStringBetweenWords($original, $word1, $word2, $insert) {
    $words = explode(' ', $original);
    
    $word1Index = array_search($word1, $words);
    $word2Index = array_search($word2, $words);
    
    if ($word1Index !== false && $word2Index !== false && $word2Index > $word1Index) {
        array_splice($words, $word1Index + 1, 0, $insert);
    }

    return implode(' ', $words);
}
$originalString = 'The brown fox';
$insertString = 'quick';
$word1 = 'The';
$word2 = 'brown';

echo insertStringBetweenWords($originalString, $word1, $word2, $insertString) . "<br>";

///////////////////////////////////

$str = "0000657022.24";
        $newStr = str_replace("0", "", $str);
        echo $newStr . "<br>";

////////////////////////////////

$str = "The quick brown fox jumps over the lazy dog---";
        $newStr = str_replace('-', '', $str);
        echo $newStr . "<br>";

////////////////////////////////

$str = "The quick brown fox jumps over the lazy dog";
        $arr = explode(" ", $str);
        $cuttedArray = array_slice($arr, 0, 5);
        $arr = implode(" ", $cuttedArray);
        echo $arr . "<br>";

///////////////////////////////////

$str = "2,543.12";
echo str_replace(",", "", $str) . "<br>";

/////////////////////////////

$first = 0;
$second = 1;

echo $first . ', ' . $second;

for ($i = 2; $i < 9; $i++) {
    $next = $first + $second;
    echo ', ' . $next;

    $first = $second;
    $second = $next;
}
print "<br>";

//////////////////////////////////

$line = 1;
for ($i=1; $i < 6; $i++) { 
    for ($j=1; $j <= $i; $j++) { 
        print $line ;
        $line++;
    }
    print "<br>";
}

/////////////////////////
// print "<pre>";
// $row =26;
// for ($i=1; $i <= $row*2-1; $i++) { 
//     $star = ($i <= $row)?$i:($row*2-$i);
//     $char = "A";
//     for ($j = 0; $j < $row;$j++) { 
//         if($j<($row-$star)){
//             print " ";
//         }
//         else{
//             print $char++ . " ";
//         }
//     }
//     print "<br>";
// }
// print "</pre>";

print "<pre>";
$row =26;
$char2 = "A";
for ($i=1; $i <= $row*2-1; $i++) { 
    if ($i <= $row){
         $star = $i; 
        } 
    else {
         $star = ($row * 2 - $i); 
        }
    $char = "A";
    $space = $row-$star;
       echo str_repeat(" ",$space);
       echo implode(" ", range($char, $char2));
       if ($i < $row){
        $char2 = chr(ord($char2) + 1);}
        else{
            $char2 = chr(ord($char2) - 1);
        }
    print "<br>";
}

print "</pre>";

////////////////////////////////////////

function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return "This year is a leap year <br>";
    } else {
        return "This year is not a leap year <br>";
    }
}
$year = 2013;
echo isLeapYear($year);

///////////////////////////////

function checkSeason($temperature) {
    if ($temperature < 20) {
        return "It is wintertime! <br>";
    } else {
        return "It is summertime! <br>";
    }
}
$temperature = 27;
echo checkSeason($temperature);

///////////////////////////////////

function sumOrTriple($a, $b) {
    $sum = $a + $b;
    if ($a === $b) {
        return "($a + $b) * 3 = " . ($sum * 3) . "<br>";
    } else {
        return "$a + $b = $sum" . "<br>";
    }
}
$firstInteger = 2;
$secondInteger = 2;
echo sumOrTriple($firstInteger, $secondInteger);

/////////////////////////////

for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0) {
        echo $i;
        if ($i < 248) {
            echo ", ";
        }
    }
}
print "<br>";

//////////////////////////

function generateUniqueRandomNumbers($min, $max, $count) {
    if (($max - $min + 1) < $count) {
        return "Range is too small for unique numbers!";
    }
    $numbers = range($min, $max);
    shuffle($numbers);
    $randomNumbers = array_slice($numbers, 0, $count); 
    
    return implode(" ", $randomNumbers);
}
echo generateUniqueRandomNumbers(11, 20, 10);
?>
