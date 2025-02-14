<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body>
    <h2>PHP Calculator</h2>

<form method="post" action="">
    <label for="num1">Number 1:</label>
    <input type="number" name="num1" required><br><br>

    <label for="num2">Number 2:</label>
    <input type="number" name="num2" required><br><br>

    <label for="operation">Choose Operation:</label>
    <select name="operation" required>
        <option value="addition">Addition</option>
        <option value="subtraction">Subtraction</option>
        <option value="multiplication">Multiplication</option>
        <option value="division">Division</option>
    </select><br><br>

    <input type="submit" value="Calculate">
</form>
<form method="get" action="">
    <label for="factorial">Number</label>
    <input type="number" name="factorial" required><br>
    <input type="submit" value="find the factorial">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = "";
    
    switch ($operation) {
        case "addition":
            $result = $num1 + $num2;
            break;
        case "subtraction":
            $result = $num1 - $num2;
            break;
        case "multiplication":
            $result = $num1 * $num2;
            break;
        case "division":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Cannot divide by zero!";
            }
            break;
        default:
            $result = "Invalid operation";
    }
    
}
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $factorial = $_GET["factorial"];
    $result2 = 1;
    for ($i=1; $i <= $factorial ; $i++) { 
        $result2 *= $i;
    }
}
if(isset($result)){
    echo "<h3>Result: $result</h3>";
}
if(isset($result2)){
    print "<h3> The factorial is: $result2</h3>";
}
?>
</body>
</html>