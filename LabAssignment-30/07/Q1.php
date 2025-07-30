<!DOCTYPE html>
<html>
<head>
    <title>Simple Number Operations</title>
</head>
<body>

<?php
    $resultMessage = "";
    if (isset($_POST['submit'])) {
        $number = (int)$_POST['number'];
        $choice = $_POST['choice'];
        
        //  OPERATION 1: Check Positive/Negative 
        if ($choice == "pos_neg") {
            if ($number > 0) {
                $resultMessage = "The number $number is Positive.";
            } elseif ($number < 0) {
                $resultMessage = "The number $number is Negative. ";
            } else {
                $resultMessage = "The number is Zero. ";
            }
        }
        
        // OPERATION 2: Check Even/Odd 
        elseif ($choice == "even_odd") {
            if ($number % 2 == 0) {
                $resultMessage = "The number $number is Even.";
            } else {
                $resultMessage = "The number $number is Odd.";
            }
        }

        // OPERATION 3: Find the Square 
        elseif ($choice == "square") {
            $square = $number * $number;
            $resultMessage = "The square of $number is $square.";
        }

        // OPERATION 4: Find the Cube
        elseif ($choice == "cube") {
            $cube = $number * $number * $number;
            $resultMessage = "The cube of $number is $cube.";
        }
    }
?>

    <h2>Number Operations</h2>
    <form method="post" action="">
        Enter a number: <input type="number" name="number" required><br><br>
        
        <p>Select an operation:</p>
        <input type="radio" name="choice" value="pos_neg" required> Check Positive/Negative<br>
        <input type="radio" name="choice" value="even_odd"> Check Even/Odd<br>
        <input type="radio" name="choice" value="square"> Find Square<br>
        <input type="radio" name="choice" value="cube"> Find Cube<br><br>
        
        <input type="submit" name="submit" value="Calculate">
    </form>
    <hr>

    <?php
        if ($resultMessage != "") {
            echo "<h3>Result:</h3>";
            echo "<p>$resultMessage</p>";
        }
    ?>

</body>
</html>