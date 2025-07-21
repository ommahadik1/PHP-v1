<!-- create a php script called student profile.php that does the following
define variables for name , roll number, marks in 3 subjects , calucate total marks and average and print the student detail in formatted output; 
-->
<?php
// Defining variables for student profile
$name = "Gang";
$rollNumber = "1272240000";
$marksSubject1 = 85;
$marksSubject2 = 90;
$marksSubject3 = 78;
// Calculating total marks and average
$totalMarks = $marksSubject1 + $marksSubject2 + $marksSubject3;
$averageMarks = $totalMarks / 3;
// Displaying student details in formatted output
echo "<h1>Student Profile</h1>";
echo "<p><strong>Name:</strong> " . $name . "</p>";
echo "<p><strong>Roll Number:</strong> " . $rollNumber . "</p>";
echo "<p><strong>Marks in Subject 1:</strong> " . $marksSubject1 . "</p>";
echo "<p><strong>Marks in Subject 2:</strong> " . $marksSubject2 . "</p>";
echo "<p><strong>Marks in Subject 3:</strong> " . $marksSubject3 . "</p>";
echo "<p><strong>Total Marks:</strong> " . $totalMarks . "</p>";
echo "<p><strong>Average Marks:</strong> " . $averageMarks . "</p>";

?>