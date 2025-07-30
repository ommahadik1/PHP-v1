<?php
// accept a number in between 1 to 7 from the user and display the corresponding day of the week day;
if (isset($_GET['day'])) {
    $day = intval($_GET['day']);
    switch ($day) {
        case 1:
            echo "Monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        case 3:
            echo "Wednesday";
            break;
        case 4:
            echo "Thursday";
            break;
        case 5:
            echo "Friday";
            break;
        case 6:
            echo "Saturday";
            break;
        case 7:
            echo "Sunday";
            break;
        default:
            echo "Error: Please enter a number between 1 and 7.";
    }
} else {
    echo "Please provide a day number in the URL, e.g., ?day=3 for Wednesday.";
}
 
?>
 <form action="" method="get">
    <label for="day">Enter a number (1-7):</label>
    <input type="number" id="day" name="day" min="1" max="7" required>
    <input type="submit" value="Submit">
    <br><br>
 </form>
