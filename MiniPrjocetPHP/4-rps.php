<?php
function rpsUser ()
{
    $userThrow = strtolower(readline("Please enter your desired input. Rock, Paper or Scissors >> "));

    if ($userThrow == "rock")
    {
        $userTrow = 0;
    }
    elseif($userThrow == "paper")
    {
        $userTrow = 1;
    }
    elseif($userThrow == "scissors")
    {
        $userTrow = 2;
    }
    else
    {
        echo "Invalid answer";
    }
    return $userThrow;
}

function rps ($userInpt, $genInpt)
{
    if ($genInpt == $userInpt) 
    {
       $outcome = "Drew...";
    }
        
    elseif ($genInpt == 0 && $userInpt == 1) 
    {
        $outcome = "Win!";
    }
        
    elseif ($genInpt == 1 && $userInpt == 2) 
    {
        $outcome = "Win!";
    }
        
    elseif ($genInpt == 2 && $userInpt == 0) 
    {
        $outcome = "Win!";
    }
        
    elseif ($genInpt == 2 && $userInpt == 1) 
    {
        $outcome = "Lost...";
    }
        
    elseif ($genInpt == 1 && $userInpt == 0) 
    {
        $outcome = "Lost...";
    }
        
    elseif ($genInpt == 0 && $userInpt == 2) 
    {
        $outcome = "Lost...";
    }
    else
    {
        $outcome = "VAR_Why did this become an error...";
        echo "Echo_Why did this become an error...";
     }

        echo "You $outcome";
};

$genInpt = rand(0,2);
echo "$genInpt\n"; // Bara så att jag kan see att det fungerar... 


$userThrow = rpsUser();
rps($genInpt, $userThrow);
