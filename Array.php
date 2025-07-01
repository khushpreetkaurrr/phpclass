<?php
echo "associative array <br>";
$student =array (
   "name"=> "dilpreet",
   "age"=> 20,
   "course"=>"Hdwt"
);
foreach ($student as $key => $value)
{
    echo $key.":", $value,"<br>";
}
?>

<br>

<?php
echo "multidimensional array <br>";
$student =array("Dilpreet",20,"ambala")
    ("Harpreet",19,"ambala")
   ("khushpreet",19,"ambala")
    ("Priya",20,"ambala")
    ("Ramanpreet",20,"ambala")
;
for ($i=0;$i<count($student);$i++)
{
    for($j=0;$j<count($student);$j++)
    {
        echo $student[$i][$j]."";
    }
    echo "<br>";
}
?>