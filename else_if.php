<?php

echo " <br> hello";

$x=100;

echo $x;

if( $x<100)
{
    echo " <br> $x is less than 100";
}
else{
    echo" <br> $x is greater than 100";
}
$marks=90;

if($marks<33)
{
    echo "fail";
}

else if($marks<=100 && $marks>=81)
{
    echo" <br> A grade";
}

else if($marks<=80 && $marks>=61)
{
    echo "B grade";
}

else if($marks<=60 && $marks>=41)
{
    echo" C grade";
}

else if($marks<=40 && $marks>=33)
{
    echo" D grade";
}

else if($marks>100)
{
    echo" data invalid";
}
?>