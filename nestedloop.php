<?php
 echo "Nested Loop Example <br>";
 echo"<br>";
 echo " Index <br>";
 echo"<br>";
for(
    $i=0; $i<=5; $i++)
    {
        for( $j=1; $j<=4; $j++)
        {
            echo "$i.$j<br>";
        }
    }

?>