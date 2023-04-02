<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
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
        <h1> Loops </h1>
        <p> </p>
        <p> <p>
    

    <?php
        echo "<br>";
        echo "<h3> While Loop </h3>";
        $a = 0;
        // while loop
        while ($a <= 10){
            echo "The value of a is ", $a, ".";
            $a += 1;
            echo "<br>";
        }
        echo "<br>";


        echo "<h3> Do while loop </h3>";
        $b = 20;
        // Do while loop.
        do{
            echo "The number of iterations is ", $b, ".";
            $b += 1; 
        }while($b <= 20);
        echo "<br>";

        echo "<br>";
        echo "<h3> Foor Loops </h3>";
        # For Loop.
        for ($c=0; $c < 10; $c++) { 
            echo "The value of c is ", $c, ".";
            echo "<br>";
        }
        echo "<br>";
        $language = array("python", "cpp", "java", "php");
        echo "<h3> ForEach Loop</h3>";
        foreach ($language as $value) {     
            echo $value;
            echo "<br>";
        }
    ?>    
    
    </div>
</body>
</html>
