<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series for Beginners</title>
</head>
<body>

    <h2>Fibonacci Series Generator </h2>
    <p>The Fibonacci series starts with 0 and 1, and each new number is the sum of the two before it. (e.g., 0, 1, 1, 2, 3, 5, ...)</p>

    <form method="post">
        Enter how many numbers you want: 
        <input type="number" name="terms" required min="1">
        <br><br>
        <input type="submit" name="submit" value="Generate">
    </form>
    <hr>

    <?php
    
    if (isset($_POST['submit'])) {
    
        $howMany = (int)$_POST['terms'];
        
        // Check if the user entered a positive number.
        if ($howMany > 0) {
            echo "<h3>Here is the Fibonacci series with $howMany numbers:</h3>";
            echo "<p>";

            $firstNumber = 0;
            $secondNumber = 1;

            for ($i = 0; $i < $howMany; $i++) {
                echo $firstNumber;
                 
                if ($i < $howMany - 1) {
                    echo ", ";
                }
              
                $nextNumber = $firstNumber + $secondNumber;
                
                $firstNumber = $secondNumber;
                $secondNumber = $nextNumber;
            }
            
            echo "</p>";

        } else {
            // Show an error if the input is not a positive number.
            echo "<p>Please enter a positive number.</p>";
        }
    }
    ?>
</body>
</html>