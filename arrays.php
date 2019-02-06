<?php

/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/


$food = [
    1 => "Cheeseburger", 
    "Sushi", 
    "Pav bhaji",
     "Dal bhati churma",
    "Caramel pudding"  
];



/*
Print every array element in a new line.
*/

echo "<pre>";
print_r($food);
echo "</pre>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul>
        <li>{$food[1]}</li>
        <li>{$food[2]}</li>
        <li>{$food[3]} </li>
        <li>{$food[4]} </li>
        <li>{$food[5]} </li>
    </ul>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

    
$food_assoc = array(
     array("Main course"),
     array("Snack"),
     array("Desert"),
);


/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

echo $food[1] ." | ". $food_assoc[0][0]  ;
echo "<br>";
echo $food[2] ." | ". $food_assoc[0][0] ;
echo "<br>";
echo $food[3] ." | ". $food_assoc[1][0]  ;
echo "<br>";
echo $food[4] ." | ". $food_assoc[1][0]  ;
echo "<br>";
echo $food[5] ." | ". $food_assoc[2][0] ;

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

$food_assoc = array(
     array("Main course" , "America"),
     array("Main course" , "China"),
    array("Snack" , "India"),
    array("Snack" , "India"),
    array("Desert" , "Europe"),
);

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

echo $food[1] ." | ". $food_assoc[0][0] ." | ". $food_assoc[0][1] ;
echo "<br>";
echo $food[2] ." | ". $food_assoc[0][0] ." | ". $food_assoc[1][1] ;
echo "<br>";
echo $food[3] ." | ". $food_assoc[3][0] ." | ". $food_assoc[2][1] ;
echo "<br>";
echo $food[4] ." | ". $food_assoc[3][0] ." | ". $food_assoc[2][1] ;
echo "<br>";
echo $food[5] ." | ". $food_assoc[4][0] ." | ". $food_assoc[4][1] ;

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
*/

echo "<table>
  <tr>
    <th>Food</th>
    <th>Type</th>
    <th>Origin</th>
  </tr>
  <tr>
    <td>{$food[1]}</td>
    <td>{$food_assoc[0][0]}</td>
    <td>{$food_assoc[0][1]}</td>
  </tr>
  <tr>
    <td>{$food[2]}</td>
    <td>{$food_assoc[0][0]}</td>
    <td>{$food_assoc[1][1]}</td>
  </tr>
   <tr>
    <td>{$food[3]}</td>
    <td>{$food_assoc[3][0]}</td>
    <td>{$food_assoc[2][1]}</td>
  </tr>
   <tr>
    <td>{$food[4]}</td>
    <td>{$food_assoc[3][0]}</td>
    <td>{$food_assoc[2][1]}</td>
  </tr>
  <tr>
    <td>{$food[5]}</td>
    <td>{$food_assoc[4][0]}</td>
    <td>{$food_assoc[4][1]}</td>
  </tr>
</table>
"
   
?>

