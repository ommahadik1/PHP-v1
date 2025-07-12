<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   //Strings concept;
    $str = "String";
    echo $str;;
    $length = strlen($str);
    echo "<br> The length of the string is: ";
    echo $length;
// you can also use the following code to display the string length
    echo "<br> The length of the string is :" . $length;
    //This is called as string concatenation; and the " . " is used to concatenate;
echo "<br>";
    //followed by string word count;
    echo "<br>";
    $str2 = "This is a string2";
    echo $str2;
    $wordCount = str_word_count($str2);
    echo "<br> The number of words in the string is: " . $wordCount;
echo "<br>";
    //String position
    echo "<br>";
    $str3 = "This is the string position";
    echo $str3;
    $position = strpos ($str3, "string");
     echo "<br> The position of the word 'string' in the string is: " . $position;
     echo "<br>";
    //String replacement

    echo "<br>";
    $str4 = "This is the string replacement";
    echo $str4;
    $replacedStr = str_replace("string", "JOB", $str4);
    echo "<br> The string after replacement is : " .$replacedStr;
    echo "<br>";  
    //String to lower case
    echo "<br>";
    $str5 = "THIS is the STRING to LOWER case";
    echo $str5;
    $lowerStr = strtolower($str5);
    echo "<br> The string in lower case is: " . $lowerStr;
    echo "<br>";
    //String to upper case
    echo "<br>";
    $str6 = "this is the string to upper case";
    echo $str6;
    $upperStr = strtoupper($str6);
    echo "<br> The string in upper case is: " . $upperStr;
    echo "<br>";

    ?>

</body>
</html>