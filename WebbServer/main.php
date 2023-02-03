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


    $errorPage = '
        <div class="container">
            <p> No page found...  <br> </p>   
            <p> Please verify your network connection or answers. </p>
        </div> ';

    $home = '
            <div class="anwser">
        </div>
        <div class="container">  
            <form method="get">  
            
            <label>First num </label> <br>  
            <input type="number" name="num1" placeholder="Ex. 305"> <br> <br> 
            
            <label>Second num</label> <br>  
                    <input type="number" name="num2" placeholder="Ex. 432">  <br> <br>
                    
                    <label>Operator</label> <br>  
                    <select name="op">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="/">/</option>
                    <option value="*">*</option>
                    </select>  <br> <br>  
                    <input type="submit" value="Submit">  
                    </form>
                    </div>  
                    
                    ';


    $calculator = '
                    <div class="anwser">
                    
                    </div>
                    <div class="container">  
                    <form method="get">  
                    <input type="hidden" name="page" value="calc">
                    <label>First num </label> <br>  
                    <input type="number" name="num1" placeholder="Ex. 305"> <br> <br> 
                    
                <label>Second num</label> <br>  
                    <input type="number" name="num2" placeholder="Ex. 432">  <br> <br>
                    
                    <label>Operator</label> <br>  
                    <select name="op">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="/">/</option>
                    <option value="*">*</option>
                    </select>  <br> <br>  
                    <input type="submit" value="Submit">  
                    </form>
                    </div>  
                    ';



    $ageCalculator = ' 
                    <div class="container">   
                    <form method="get"> 
                    
                    <label>Enter Age </label> <br>  
                    <input type="number" name="age" placeholder="Ex. 21"> <br> <br>  
                    
                    <label>Enter Year</label> <br>  
                    <input type="number" name="year" placeholder="Ex. 1993">  <br> <br>  
                    <input type="submit" value="Submit">  
                    </form>  
                    </div>
                    ';


    function giveResponseCalc($num1, $num2, $op)
    {
        global $sum;

        switch ($op) {
            case "+":
                $sum = $num1 + $num2;
                break;
            case "-":
                $sum = $num1 - $num2;
                break;
            case "/":
                $sum = $num1 / $num2;
                break;
            case "*":
                $sum = $num1 * $num2;
                break;
            default:
                echo "Error Switch"; //Switch
                break;
        }
        return $sum;
    }

    if (isset($_GET["page"])) {
        if ($_GET["page"] == "calc") {
            echo $calculator;
            if (isset($_GET["op"]) && isset($_GET["num1"]) && isset($_GET["num2"])) {
                echo giveResponseCalc($_GET['num1'], $_GET['num2'], $_GET['op']);
            } else {
                echo "Enter all numbers and oporators!";
            }
        } elseif ($_GET["page"] == "ageCalc") {
            echo $ageCalculator;
            if (isset($_GET["age"]) && isset($_GET["year"])) {
                $age = $_GET["age"];
                $year = $_GET["year"];
            } else {
                echo "Enter all numbers and oporators!";
            }
        }
    } else {

    }


    // Advanced miniräknare


    


    ?>

</body>

</html>