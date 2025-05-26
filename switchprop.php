<?php
$n=50;
switch($n)
{
    case "10":
        echo "n is 10";
        break;
    case "20":
        echo "n is 20";
        break;    
    case "30":
        echo "n is 30";
        break;
    case "40":
        echo "n is 40";
        break; 
    case "50":
        echo "n is 50";
        break;
    default:
        echo "n is not 10,20,30,";          
       break;}

$ch= "A";
switch($ch)
{ 
    case "A": 
        echo " choice is A"; break;
    case "B":
        echo " choice is B"; break;
    case "C":
        echo " choice is C"; break;
    case "D": 
        echo " choice is D"; break;
    case "E":
        echo " choice is E"; break;
    default:
        echo " choice is neither A,B,C,D nor E"; break;
    }
$deg="BCA";
switch($deg)
{
    case "BCA": 
        echo" BCA is 3 years degree";
        break;
    case "B.tech": 
        echo" B.tech is 4 years degree";
        break;
    case "Bsc": 
        echo" Bsc is 3 years degree";
        break;        
    case "B.Arch": 
        echo" B.Arch is 5 years degree";
        break;
    default:
        echo " Degree not Available";
}
?>