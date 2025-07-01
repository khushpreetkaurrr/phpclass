<?php
function add1()
{


    $a=5;
    $b=15;
    $c=$a+$b;
    echo "The sum of $a and $b is: $c <br>";
}
add1();

?>

<br> 

<?php
function sub1()
{


    $a=15;
    $b=5;
    $c=$a-$b;
    echo "The sub of $a and $b is: $c <br>";
}
sub1();

?>

<br>

<?php
function multiply1()
{


    $a=5;
    $b=15;
    $c=$a*$b;
    echo "The multiplication of $a and $b is: $c <br>";
}
multiply1();

?>

<br> 

<?php
function divide1()
{


    $a=15;
    $b=5;
    $c=$a/$b;
    echo "The division of $a and $b is: $c <br>";
}
divide1();
?>

<br>

<?php

function add ($a, $b)
 {
    return $a + $b;
}
echo add (5, 10) ;

?>

<br>

<?php

function sub ($a, $b)
 {
    return $a - $b;
}
echo sub (5, 10) ;

?>

<br>

<?php 

function multiply ($a, $b)
 {
    return $a * $b;
}
echo multiply (5, 10) ;

?>

<br>

<?php

function divide ($a, $b)
 {
    return $a / $b;
}
echo divide (5, 10) ;

?>

<br>

<?php
echo "Area of a triangle <br>";

function areatriangle ($l, $w)
{
    return 1/2 * $l * $w;
}
 echo areatriangle (8,8);
?>

<br>

<?php
echo "Area of a square <br>";
function areaSquare ($s)
{ 
    return $s * $s;
}
echo areaSquare (3);
?>

<br>

<?php
echo "Area of a recangle <br>";

function arearectangle ($l, $w)
{
    return  $l * $w;
}
 echo arearectangle (8,8);
?>

<br>
<br>
<?php
echo"call by value <br>";
function add2($a)
{
    $a+=5;
    echo $a . "<br>";
}
$v=5;
add2($v);
echo $v;
echo " $v (v=5 given )doesn't change because it is call by value <br>";
?>

<br>

<?php
echo"call by reference <br>";
function add3 (&$a)
{
    $a+=5;
    echo $a . "<br>";
}
$v=5;
add3($v);
echo $v;
echo " $v (v=5 given)changes because it is call by reference <br>";
?>