<?php
echo "Break and Continue Example <br>";
echo "<br>";
echo " continue Example <br>";
echo "<br>";
for ($i=1; $i<=10; $i++)
{
    if( $i%2==0)
    {
        continue;
    }
    echo $i."<br>";
}
?>  
<br>

<?php

echo " break Example <br>";
echo "<br>";
for ($i=1; $i<=10; $i++)
{
    if( $i==5)
    {
        break;
    }
    echo $i."<br>";
}

?>
