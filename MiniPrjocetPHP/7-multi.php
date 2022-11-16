<?php
echo "  1_____2_____3_____4_____5_____6_____7_____8_____9_____10____11____12\n";

for ($row = 1; $row <= 12; $row++)
{
    for ($column = 1; $column <= 12; $column++)
    {
        $sum = $row * $column;
        echo str_pad($sum, 6, " | ", STR_PAD_BOTH);
    }
    echo "\n";
}