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
            <form>  
                <label>First num </label> <br>  
                <input type="text" placeholder="305"> <br> <br>  
                <label>Second num</label> <br>  
                <input type="text" placeholder="Ex. 432">  <br> <br>  
                <input type="submit" value="Submit">  
            </form>  
            ';

            $ageCalculator = '    
            <form>  
                <label>Enter Age </label> <br>  
                <input type="text" placeholder="21"> <br> <br>  
                <label>Enter Year</label> <br>  
                <input type="text" placeholder="1993">  <br> <br>  
                <input type="submit" value="Submit">  
            </form>  
            ';

    if($_GET["page"] == "calc"){
        echo $calculator;


    }elseif($_GET["page"] == "ageCalc"){
        echo $ageCalculator;

    }else{
        echo "No page found...";
    }

        ?>
</body>
</html>
