<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.container{

    max-width: 80%;
    background-color: grey; 
    margin: auto;
    padding: 23px;
}
</style>
<body>
    <div class="container">
        This is a container.
        <h1> String </h1>
        <p> 
        The function "strlen()" returns the length of the string when it is passed it the funciton. <P>
        <P>The dot(.) in php is a string concatenation operator. <P>
        <P>str_word_count() returns the number of words present in the string <P>
        <P>strrev() This function reverses a string.<P>
        <P>strpos(a, b) Returns the position of a particular word in a string. The first parameter will be the string itself and the second parameter will the position of the word we want to find. <p>
        <p>str_replace(a, b, c) This function replace a word with another word in the string. The first parameter is the word that we want to replace, the second parameter is the word that we want to be replaced with and the third parameter is the string itself.<p>
    

    <?php
        echo "<br>";
        echo "<br>";
        $str = "This is a string.";
        echo $str;
        echo "<br>";

        # Counting the length of a string.
        $len = strlen($str);
        echo "The length of the string is ". $len. ".";
        echo "<br>";

        # Counting the number of words in the string.
        echo "The number of words present in the string is ". str_word_count($str). ".";
        echo "<br>";

        # Reversing a string.
        echo "The reversed string is: ". strrev($str);
        echo "<br>";

        #finding the postion of a particular word in a string.
        echo "The position of the word 'this' in the string is ". strpos($str, "This"). ".";
        echo "<br>";

        # Replacing a particular word in a string.
        echo "After replacing 'a' with 'an' in the string: ". str_replace("a", "an", $str);
        echo "<br>";
    ?>    
    
    </div>
</body>
</html>
