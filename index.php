<?php
# While loop...
$i = 0;
while ($i <=4){
    echo "Hello World <br>";
    $i++;
}
# Do while loop....
$k = 0;
do{
    echo "Hello World <br>";
    $k++;
}
while ($k <= 4);

#foreach loop....

$indexArray = [23, 45, 67, 87, 90];
foreach($indexArray as $element){
    echo "$element"." ";
}

# conditional statement.....
$grademarks = [50, 67, 89, 70, 67, 90, 33];
foreach ($grademarks as $marks){
    if ($marks >=80){
        echo "The grade is A+"."<br>";
    }
    elseif ($marks >= 70){
        echo "The grade is A"."<br>";
    }
    elseif ($marks >= 60){
        echo "The grade is A-"."<br>";
    }
    elseif ($marks >= 50){
        echo "The garde is B"."<br>";
    }
    elseif ($marks >= 40){
        echo "The grade is C"."<br>";
    }
    elseif ($marks >=33){
        echo "The grade is D"."<br>";
    }

}

# Function....

function showTest(){
    echo "hello world from function";
}
showTest();


?>