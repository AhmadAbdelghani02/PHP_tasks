<?php
$colors = array('white', 'green', 'red');
print "<ul>
<li>$colors[0]</li>
<li>$colors[1]</li>
<li>$colors[2]</li>
</ul> <br>";

/////////////////////

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );

foreach($cities as $x => $y){
    print "The capital of $x is $y <br>";
}
////////////////////////////////////

$color = array (4 => 'white', 6 => 'green', 11=> 'red');
print $color["4"];

////////////////////////////////

function insertAtPosition(array $arr, $item, int $position): array {
    if($position <0){
        $position = 0;
    }
    elseif($position > count($arr)){
        $position = count($arr);
    }

    array_splice($arr, $position, 0, [$item]);
    return $arr;
}

$numbers = [1,2,3,4,5];
$item = "$";
$position = 4;
$numbers = insertAtPosition($numbers, $item, $position);
print implode(" ", $numbers);

//////////////////////////

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
echo "<pre>";
print_r($fruits);
echo "</pre>";

////////////////////////////////

$temperatures  = [
    78,
    60,
    62,
    68,
    71,
    68,
    73,
    85,
    66,
    64,
    76,
    63,
    75,
    76,
    73,
    68,
    62,
    73,
    72,
    65,
    74,
    62,
    62,
    65,
    64,
    68,
    73,
    75,
    79,
    73
];

$averageTemperature = array_sum($temperatures) / count($temperatures);

sort($temperatures);

$lowestTemperatures = array_slice($temperatures, 0, 5);

$highestTemperatures = array_slice($temperatures, -5);
echo "Average Temperature is: " . number_format($averageTemperature, 1) . "<br>";
echo "List of five lowest temperatures: " . implode(', ', $lowestTemperatures) . "<br>";
echo "List of five highest temperatures: " . implode(', ', $highestTemperatures) . "<br>";

///////////////////////

$array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    $array3 = array(...$array1, ...$array2);
    echo "<pre>";
    print_r($array3);

    echo "</pre>";

///////////////////////////////////

$colors = array("red", "blue", "white", "yellow");
$colors = array_map('strtoupper', $colors);

print implode(", ",$colors) ."<br>";

///////////////////////////function


function isPrime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}


$number = 3; 
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}

print "<br>";

//////////////////////////

$str = "remove";
echo strrev($str);
echo "<br>";

///////////////////////////

function swap(int $x, int $y){
    $x = $x + $y;
    $y = $x - $y;
    $x = $x - $y;
    print $x ."......". $y;
}
$x = 23;
$y = 48;
swap($x,$y);
print "<br>";

/////////////////////////

function armstronge(int $x){
    $xstr = (string)$x;
    $length = strlen($xstr);
    $sum = 0;
    for($i=0; $i<$length;$i++){
        $num = (int)$xstr[$i];
        $sum += pow($num,$length);
    }
    if($x == $sum){
        print "$x is Armstrong Number <br>";
    }
    else{
        print "$x is not Armstrong Number <br>";
    }
}
armstronge(407);

////////////////////////

function palindrome(string $str){
    $rts =preg_replace("/[^A-Za-z0-9]/","",strtolower($str));
    if($rts == strrev($rts)){
        print " Yes it is a palindrome <br>";
    }
    else{
        print " No it is not a palindrome <br>";
    }
}

palindrome("Eva, can I see bees in a cave?");


///////////////////////////

$array1 = array(2, 4, 7, 4, 8, 4);
print_r(array_values(array_unique($array1)));
print "<br>";

//////////////////////////////

function checkSum($firstInteger, $secondInteger) {
    $sum = $firstInteger + $secondInteger;
    return ($sum === 30) ? $sum : 'false';
}

$firstInteger = 10;
$secondInteger = 10;

echo checkSum($firstInteger, $secondInteger);
print "<br>";

/////////////////////////////////////

function checkMultipleOfThree($number) {
    return ($number % 3 === 0) ? 'true' : 'false';
}
$number = 20;

echo checkMultipleOfThree($number); 
print "<br>";

///////////////////////////////

function checkInRange($number) {
    return ($number >= 20 && $number <= 50) ? 'true' : 'false';
}

$number = 50;

echo checkInRange($number);
print "<br>";

//////////////////////////

function findLargestNumber($a, $b, $c) {
    return max($a, $b, $c);
}

$numbers = [1, 5, 9];

echo findLargestNumber(...$numbers); 
print "<br>";

//////////////////////////

$units = 300; 
$bill = 0;

if ($units <= 50) {
    $bill = $units * 2.50;
} elseif ($units <= 150) {
    $bill = 50 * 2.50 + ($units - 50) * 5.00;
} elseif ($units <= 250) {
    $bill = 50 * 2.50 + 100 * 5.00 + ($units - 150) * 6.20;
} else {
    $bill = 50 * 2.50 + 100 * 5.00 + 100 * 6.20 + ($units - 250) * 7.50;
}

echo "The electricity bill for $units units is: " . number_format($bill, 2) . " JOD. <br>";

//////////////////////////////////

$age = 15;

if ($age >= 18) {
    echo "is eligible to vote <br>";
} else {
    echo "is not eligible to vote <br>";
}

/////////////////////////////////

$number = -60;

if ($number > 0) {
    echo "Positive <br>";
} elseif ($number < 0) {
    echo "Negative <br>";
} else {
    echo "Zero <br>";
}

///////////////////////////////

$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];

$average = array_sum($scores) / count($scores);

if ($average >= 90) {
    $grade = 'A';
} elseif ($average >= 80) {
    $grade = 'B';
} elseif ($average >= 70) {
    $grade = 'C';
} elseif ($average >= 60) {
    $grade = 'D';
} else {
    $grade = 'F';
}

echo "Average Score: " . $average . "<br>";
echo "Grade: " . $grade . "<br>";

/////////////////////////////

for ($i = 1; $i <= 10; $i++) {
    if ($i != 10) {
        echo $i . "-";
    } else {
        echo $i . "<br>";
    }
}

///////////////////////////

$total = 0;
for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}
echo "Total: " . $total . "<br>";

//////////////////////////////

for ($i=0; $i < 5; $i++) { 
    for ($j=0; $j < 5; $j++) { 
        if ($i == 2 && $j > 1) {
            print "C";
        }
        elseif ($i == 1 && $j > 2) {
            print "B";
        }
        elseif ($i == 3 && $j > 0) {
            print "D";
        }
        elseif ($i == 4 && $j >= 0) {
            print "E";
        }
        else{
            print "A";
        }
        if($j == 4){
            print "<br>";
        }
    }
}

////////////////////////////

for ($i=0; $i < 5; $i++) { 
    for ($j=0; $j < 5; $j++) { 
        if ($i == $j) {
            print $i+1;
        }
        else{
            print 0;
        }
        if($j == 4){
            print "<br>";
        }
    }
}

////////////////////////////////
echo "<table border=1>";
for ($i=1; $i < 7; $i++) { 
    echo "<tr>";
    for ($j=1; $j < 6; $j++) { 
        $mul = $i * $j;
        echo "<td>$i * $j = $mul</td>";
    }
    echo "</tr>";
}
echo "</table>";

/////////////////////////////////
$inputString = "input string";
$uppercase = strtoupper($inputString);
$lowercase = strtolower($inputString);
$firstLetterUpper = ucfirst($inputString);
$eachWordCapitalized = ucwords($inputString);
print "$uppercase <br>";
print "$lowercase <br>";
print "$firstLetterUpper <br>";
print "$eachWordCapitalized <br>";

/////////////////////////////////////

$numericString = '085119';

$formattedTime = substr($numericString, 0, 2) . ":" . substr($numericString, 2, 2) . ":" . substr($numericString, 4, 2);

echo "Formatted Time: $formattedTime <br>";

///////////////////////////////////////

$sentence = 'I am a full stack developer at orange coding academy';
$word = 'Orange';

if (stripos($sentence, $word) !== false) {
    echo "Word Found! <br>";
} else {
    echo "Word Not Found! <br>";
}

///////////////////////////

$url = 'www.orange.com/index.php';
$fileName = basename($url);

echo "File Name: $fileName <br>";

//////////////////////////////

$email = 'info@orange.com';
$username = strstr($email, '@', true);

echo "Username: $username <br>";


///////////////////////////////////

$email = 'info@orange.com';
$lastThreeChars = substr($email, -3);

echo "Last three characters: $lastThreeChars <br>";

//////////////////////////////

function generateRandomPassword($string, $minLength = 8, $maxLength = 16) {
    $strLength = strlen($string);
    $length = random_int($minLength, $maxLength);
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $index = random_int(0, $strLength - 1);
        $password .= $string[$index];
    }

    return $password;
}
$string = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
echo generateRandomPassword($string) . "<br>";

///////////////////////////////////////////

function replaceFirstWord($sentence, $newWord) {
    $words = explode(' ', $sentence);
    $words[0] = $newWord;
    $newSentence = implode(' ', $words);
    return $newSentence;
}
$sentence = 'That new trainee is so genius.';
$newWord = 'Our';
echo replaceFirstWord($sentence, $newWord);
?>