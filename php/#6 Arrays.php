<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
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
        <h1> Arrays </h1>
        <p> Arrays is a collection of items i.e. under one variable we can make it hold more than one value. </p>
        <p> Count function " count() " returns the total number of elements present inside the array. 
    

    
    <?php
        $languages = array("Python", "CPP", "NodeJs", "php");
        echo "<br>";
        echo "<br>";
        echo "The element at the zeroth index of the array is ", $languages[0], ".";     // Using concept of indexing.   
        echo "<br>";
        echo "The total number of elements present inside the array is ",count($languages), ".";    // This function returns the number of elements present inside the array. 
    ?>    
    
    </div>
</body>
</html>
