<?php
function greet($name, $color)
{

    echo "<p> Hi, My name is $name and my favourite color is $color </p>";
}


greet('John', 'Red');
greet('Dikshya', 'Khanal');


//This line to check the git update



?>


<h1> <?php bloginfo('name') ?> </h1>


<?php 



$names = array('John','James','Harry','Mike');

$count = 0;

while($count < count($names)){

    echo "<li>Hi, My Name is $names[$count]</li>";
   
    $count++;
}

?>