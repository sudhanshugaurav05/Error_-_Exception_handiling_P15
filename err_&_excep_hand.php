<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<h2>Simple Error & Exception Handling Demo</h2>
<form method="POST">
    Enter a number:
    <input type="text" name="number">
    <button type="submit">Calculate</button>
</form>
<?php
try {
    // Read input
    $num = isset($_POST['number']) ? $_POST['number'] : "";

    // Check if input is empty
    if ($num === "") {
        throw new Exception("Please enter a number.");
    }

    // Check if input is numeric
    if (!is_numeric($num)) {
        throw new Exception("Only numbers are allowed.");
    }

    // Check divide by zero
    if ($num == 0) {
        throw new Exception("Cannot divide by zero.");
    }

    // Calculation
    $result = 100 / $num;

    echo "<h3>Result: $result</h3>";

} catch (Exception $e) {
    // Display friendly error message
    echo "<p style='color:red;'><strong>Error: </strong>" . $e->getMessage() . "</p>";
}

?>
</body>
</html>

Program2 student_error_demo.php
<?php

try {
    // Read inputs
    $a = isset($_POST['a']) ? $_POST['a'] : "";
    $b = isset($_POST['b']) ? $_POST['b'] : "";

    // If form not submitted yet, skip validation
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Check empty fields
        if ($a === "" || $b === "") {
            throw new Exception("Both fields are required.");
        }

        // Check numeric
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new Exception("Please enter only numbers.");
        }

        // Division by zero
        if ($b == 0) {
            throw new Exception("Cannot divide by zero.");
        }

        // Perform calculation
        $result = $a / $b;

        echo "<h3>Result: $a ÷ $b = $result</h3>";
    }

} catch (Exception $e) {
    echo "<p style='color:red;'><strong>Error: </strong>" . $e->getMessage() . "</p>";
}

?>

<!DOCTYPE html>
<html>
<body>

<h2>Student Friendly Division Program</h2>

<form method="POST">
    Enter Number A:
    <input type="text" name="a"><br><br>

    Enter Number B:
    <input type="text" name="b"><br><br>

    <button type="submit">Divide</button>
</form>

</body>
</html>

Demo program without user input
<?php

try {
    // Two numbers
    $a = 20;
    $b = 0;   // Change this to test errors

    // Check if second number is zero
    if ($b == 0) {
        throw new Exception("Cannot divide by zero.");
    }

    // Check if values are numeric
    if (!is_numeric($a) || !is_numeric($b)) {
        throw new Exception("Values must be numbers.");
    }

    // Division
    $result = $a / $b;
    echo "Result: $a / $b = $result";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>
