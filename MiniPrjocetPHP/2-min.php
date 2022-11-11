    <?php

    $num1 = (float)readline("Enter the first numebr: ");
    $num2 = (float)readline("Enter second number: ");
    $op = readline("Enter op +, -, * or /: ");


    switch($op)
    {
        case '+':
            $answer = $num1 + $num2;
            break;
        case'-':
            $answer = $num1 - $num2;
            break;
        case'*':
            $answer = $num1 * $num2;
            break;
        case'/':
            $answer = $num1 / $num2;
            break;
        default:
            echo "Unable to calculate...";
    }
    
    echo $answer;

