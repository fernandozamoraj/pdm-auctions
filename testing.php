<?php


$firstName = "fernando";
$lastName = "zamora";
echo $firstName . " " .  $lastName;

$score1 = 20;          //set int variable
$score2 = 21;          //set int variable
$name = "John Doe";    //Set string variable
define("CONGRATS_MSG", "You Rock!"); //constant

if($score1 < $score2 && $score1 > 10) //use comparison operators and logical operators
    echo "<br/><br/>" .  "Awesome score " . $name . "!"; //use concatenation

echo "<br/>" . CONGRATS_MSG;

echo "<br/>";

for($i = 0; $i < 5; $i++)
{
    echo "<br/>for Item " . $i;
}

$x = 0;

while($x < 5)
{
    echo "<br>while " . $x++;
}

$y = 0;

do
{
    echo "<br>do while " . $y++;
}while($y < 5);

$favoriteAnimal = "dog";
?>

<br/> <!-- html code outside of php script blocks-->

<?php
echo "My favorite animal is {$favoriteAnimal}s";

$mySongs = array("She's got that vibe", "Juicy", "Life's too short");

echo "<h3>My songs</h3>";

echo "<ul>";
foreach( $mySongs as $song)
{
    echo "<li> {$song} </li>";
}
echo "</ul>";


function addTwoNums($val1, $val2)
{
    return $val1 + $val2;
}

function calltocallback($callback, $val1, $val2)
{
    return $callback($val1, $val2);
}

echo "<br/>addTowNums(1, 2); result: " . addTwoNums(1, 2);
echo "<br/>calltocallback(addTwoNums, 3, 5); result: " . calltocallback("addTwoNums", 3, 5);


//include("michael.php");

//echo getName();


class Person{
   public $FirstName = "John";
   public $LastName = "Doe";
   public $DateOfBirth;

   public function ToString()
   {
       return $this->FirstName . " " . $this->LastName;
   }
}

$temp = new Person();

echo "<br/>";

print_r($temp);

echo "<br/>";
echo $temp->FirstName;
echo " ";
echo $temp->LastName;
echo "<br/>";
echo $temp->ToString();



?>

