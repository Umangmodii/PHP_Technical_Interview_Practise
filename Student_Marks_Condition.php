<?php

$marks = 75;

if($marks < 33) // 100 < 33
{
    echo "Fail";
}

else if($marks >= 34 && $marks < 50) // 100 >= 33 && 100 <=50
{
    echo "Grade D";
}

else if($marks >= 50 && $marks < 65) // 100 > 51 && 100 < 65
{
    echo "Grade C";
}

else if($marks >= 65 && $marks < 75)  // 100 > 66 && 100 < 75
{
    echo "Grade B";
}

else if($marks >= 75 && $marks < 85) // 100 > 75 && 100 < 85
{
    echo "Grade A";
}

else if($marks >= 85 && $marks <=99)  // 100 > 75 && 100 < 85
{
    echo "Grade A+";
}

else
{
    echo "Invalid Input User";
}