<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements</title>
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
        <h1> Conditional Statements (if-else) </h1>
        <p> Your party status is here: </p>
    

    
    <?php
        $age = 34;
        if ($age > 18){
            echo "You can go to the party!";
        }
        else if($age == 7){
            echo "You are only 7 years old!";
        }
        else{
            echo "You can not go to the party.";
        }
    ?>    
    
    </div>
</body>
</html>
