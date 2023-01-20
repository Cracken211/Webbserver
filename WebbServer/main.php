
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>AgeCalc</title>
</head>






<body>

    <li>
        <a href="?AgeCalc">Claculator</a>
        <a href="?NumCalc">Age Calculator</a>
    </li>


    <div class="wrapper-form">
        <form>  
        <label>Enter Age </label> <br>  
            <input type="text" placeholder="30"> <br> <br>  
        <label>Enter Year</label> <br>  
            <input type="Birth Year" placeholder="Ex. 1993">  <br> <br>  
            <input type="submit" value="Submit">  
        </form>  
    </div>




<?php

if($_GET["AgeCalc"]){
    ?>
       <div class="wrapper-form">
        <form>  
        <label>Enter Age </label> <br>  
            <input type="text" placeholder="30"> <br> <br>  
        <label>Enter Year</label> <br>  
            <input type="Birth Year" placeholder="Ex. 1993">  <br> <br>  
            <input type="submit" value="Submit">  
        </form>  
    </div>

<?php
}
elseif($_GET["NumCalc"]){
    echo "Hello";


}
// elseif ($_GET[]??{
//     echo "Page not found...";
// }

?>
</body>
</html>