<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic HTML document setup -->
    <meta charset="UTF-8"> <!-- Character encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive viewport -->
    <title>Document</title> <!-- Page title -->
</head>

<body>
    <!-- Main heading -->
    <h1>This is my first php website!</h1>

    <?php
    // Basic PHP output
    echo "hello world"; // Prints "hello world"
    echo "<br>"; // Adds a line break in HTML
    
    // Variable declaration and arithmetic
    $variable1 = 20; // Assigns value 20 to variable1
    $variable2 = 10; // Assigns value 10 to variable2
    $answer = $variable1 + $variable2; // Adds the two variables
    echo $result; // This will produce an error as $result isn't defined yet
    
    // Operators demonstration
    $var1 = 5; // Assigns value 5 to var1
    $var2 = 10; // Assigns value 10 to var2
    $result; // Declares result variable (currently empty)
    
    // Arithmetic Operators Section
    echo "Addition of $var1 and $var2 is: " . ($var1 + $var2) . "<br>"; // Addition
    echo "Subtraction of $var1 and $var2 is: " . ($var1 - $var2) . "<br>"; // Subtraction
    echo "Multiplication of $var1 and $var2 is: " . ($var1 * $var2) . "<br>"; // Multiplication
    echo "Division of $var1 and $var2 is: " . ($var1 / $var2) . "<br>"; // Division
    
    // Assignment Operators Section
    $x = 10; // Initial assignment
    $x += 5; // Equivalent to $x = $x + 5
    echo "After adding 5, x is: $x <br>";
    $x -= 3; // Equivalent to $x = $x - 3
    echo "After subtracting 3, x is: $x <br>";
    $x *= 2; // Equivalent to $x = $x * 2
    echo "After multiplying by 2, x is: $x <br>";
    $x /= 4; // Equivalent to $x = $x / 4
    echo "After dividing by 4, x is: $x <br>";

    // Comparison Operators Section
    $a = 5;
    $b = 10;

    // Equality check
    if ($a == $b) {
        echo "$a is equal to $b <br>";
    } else {
        echo "$a is not equal to $b <br>";
    }

    // Less than check
    if ($a < $b) {
        echo "$a is less than $b <br>";
    } else {
        echo "$a is not less than $b <br>";
    }

    // Greater than check
    if ($a > $b) {
        echo "$a is greater than $b <br>";
    } else {
        echo "$a is not greater than $b <br>";
    }

    // Less than or equal to check
    if ($a <= $b) {
        echo "$a is less than or equal to $b <br>";
    } else {
        echo "$a is not less than or equal to $b <br>";
    }

    // Greater than or equal to check
    if ($a >= $b) {
        echo "$a is greater than or equal to $b <br>";
    } else {
        echo "$a is not greater than or equal to $b <br>";
    }

    // Not equal check
    if ($a != $b) {
        echo "$a is not equal to $b <br>";
    } else {
        echo "$a is equal to $b <br>";
    }

    // Logical Operators Section
    $x = 5;
    $y = 10;

    // Logical AND (both conditions must be true)
    if ($x < 10 && $y > 5) {
        echo "Both conditions are true <br>";
    } else {
        echo "One or both conditions are false <br>";
    }

    // Logical OR (at least one condition must be true)
    if ($x < 10 || $y < 5) {
        echo "At least one condition is true <br>";
    } else {
        echo "Both conditions are false <br>";
    }

    // Logical NOT (inverts the condition)
    if (!($x > 10)) {
        echo "x is not greater than 10 <br>";
    } else {
        echo "x is greater than 10 <br>";
    }

    // Bitwise Operators Section
    $a = 5; // Binary: 0101
    $b = 3; // Binary: 0011
    
    // Bitwise AND (bits set in both operands)
    echo "Bitwise AND of $a and $b is: " . ($a & $b) . "<br>"; // Result: 0001 (1 in decimal)
    
    // Bitwise OR (bits set in either operand)
    echo "Bitwise OR of $a and $b is: " . ($a | $b) . "<br>"; // Result: 0111 (7 in decimal)
    
    // Bitwise XOR (bits set in one operand but not both)
    echo "Bitwise XOR of $a and $b is: " . ($a ^ $b) . "<br>"; // Result: 0110 (6 in decimal)
    
    // Bitwise NOT (inverts all bits)
    echo "Bitwise NOT of $a is: " . (~$a) . "<br>"; // Result depends on system (typically -6 in two's complement)
    
    // Increment/Decrement Operators Section
    $count = 5;
    echo "Initial count: $count <br>";

    // Post-increment (returns value then increments)
    echo "Post-increment: " . $count++ . "<br>"; // Outputs 5, then increments to 6
    echo "After post-increment: $count <br>"; // Outputs 6
    
    // Pre-increment (increments then returns value)
    echo "Pre-increment: " . ++$count . "<br>"; // Increments to 7, then outputs
    echo "Post-decrement: " . $count-- . "<br>"; // Outputs 7, then decrements to 6
    echo "After post-decrement: $count <br>"; // Outputs 6
    
    // Pre-decrement (decrements then returns value)
    echo "Pre-decrement: " . --$count . "<br>"; // Decrements to 5, then outputs
    echo "Final count: $count <br>"; // Outputs 5
    ?>
</body>

</html>