<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>

    <h2>A Simple Factorial Calculator</h2>

    <form method="post">
        Enter a number: <input type="number" name="number" required><br><br>
        <input type="submit" name="submit" value="Find Factorial">
    </form>
    <hr>

    <h3>Result:</h3>
    <?php
    
    if (isset($_POST['submit'])) {
        $number = $_POST['number'];

        // 2. CHECK FOR NEGATIVE NUMBERS
        // Factorials are not defined for negative numbers, so we show an error.
        if ($number < 0) {
            echo "Please enter a positive number or zero.";
        } else {
            // 3. CALCULATE THE FACTORIAL
            $factorial = 1;
            // For example, if the number is 4, it calculates: 1 * 2 * 3 * 4
            for ($i = 1; $i <= $number; $i++) {
                $factorial = $factorial * $i;
            }

            // Display the result
            echo "The factorial of $number is $factorial.";
        }
    }
    ?>
</body>
</html>