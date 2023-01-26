<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mega homapage</title>
</head>

<body>
    <header>
        <nav class="container">
            <a href="?page=calc">Calc</a>
            <a href="?page=ageCalc">AgeCalc</a>
        </nav>
    </header>

        <?php
            $calculator = '
            <form method="get">  

                <label>First num </label> <br>  
                <input type="text" name="num1" placeholder="Ex. 305"> <br> <br> 

                <label>Second num</label> <br>  
                <input type="text" name="num2" placeholder="Ex. 432">  <br> <br>  

                <label>Operator</label> <br>  
                <input type="text" name="op" placeholder="Ex. +, *, / or -">  <br> <br>  

                <input type="submit" value="Submit">  

            </form>  
            ';

            $ageCalculator = '    
            <form method="get">  

                <label>Enter Age </label> <br>  
                <input type="text" name="age" placeholder="Ex. 21"> <br> <br>  

                <label>Enter Year</label> <br>  
                <input type="text" name="year" placeholder="Ex. 1993">  <br> <br>  

                <input type="submit" value="Submit">  

            </form>  
            ';
            
    if(isset($_GET["page"]) && $_GET["page"] == "calc"){
                echo $calculator;
                if (isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["op"])) {
                    $num1 = $_GET["num1"];
                    $num2 = $_GET["num2"];
                    $op = $_GET["op"];
                    echo "First number > {$num1} {$op} {$num2} = " . ($num1 . $op . $num2);
                }
    } elseif(isset($_GET["page"]) && $_GET["page"] == "ageCalc"){
                echo $ageCalculator;
                if (isset($_GET["age"]) && isset($_GET["year"])) {
                    $age = $_GET["age"];
                    $year = $_GET["year"];
                }
    } else{
        echo "No page found...";
    }


        ?>
</body>
</html>
