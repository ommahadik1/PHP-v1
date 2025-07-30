<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Checker</title>
</head>
<body>

    <h2>Palindrome Number Checker</h2>
    <form method="post">
        Enter a number: <input type="number" name="number" required><br><br>
        <input type="submit" name="submit" value="Check Palindrome">
    </form>
    <hr>

    <?php
   
    if (isset($_POST['submit'])) {
        $number = $_POST['number'];
        $reversed_number = strrev($number);

        // Check if the original number is the same as the reversed one
        if ($number == $reversed_number) {
            echo "<p>The number $number is a palindrome. 👍</p>";
        } else {
            echo "<p>The number $number is not a palindrome. 👎</p>";
        }
    }
    ?>
</body>
</html>