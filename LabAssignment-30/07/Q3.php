<!DOCTYPE html>
<html>
<head>
    <title>Sum and Average</title>
</head>
<body>

    <h2>Sum and Average of First N Numbers</h2>

    <form method="post">
        Enter a number (n): <input type="number" name="n_value">
        <br><br>
        <input type="submit" name="submit" value="Calculate">
    </form>
    <hr>

    <?php
   
    if (isset($_POST['submit'])) {
        // Get the number 'n' that the user typed in the form
        $n = $_POST['n_value'];

        // Make sure the user entered a positive number
        if ($n > 0) {
            $sum = 0;
            // 2. Loop from 1 up to the user's number 'n'
            //  On each loop, '$i' will be 1, then 2, then 3, and so on.
            for ($i = 1; $i <= $n; $i++) {
                $sum = $sum + $i;
            }

            // 3. Calculate the average by dividing the sum by 'n'
            $average = $sum / $n;


            //  Display the results on the page 
            echo "<h3>Here's your result:</h3>";
            echo "<p>The sum of numbers from 1 to $n is: $sum</p>";
            echo "<p>The average of these numbers is: $average</p>";

        } else {
            // If the number is not positive, show an error 
            echo "<p>Please enter a positive number greater than 0.</p>";
        }
    }
    ?>

</body>
</html>