<?php
/*
+---+
| 1 |
+---+
Declare variable named redLight and 
assign it with the value true.
*/

$red_light = true;

/*
Use "if" statement to check if the red light is on,
if so, print "Stop the car!".
*/



if ($red_light == true) {
    echo "Stop the car!";
}

/*
If the red light is on, use ternary operator to print "Stop the car!" as a paragraph.
*/




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Reasign redLight with the value false.
*/

$red_light = false;

/*
Use if/else statement to check if the red light is on,
if so, print "Stop the car!", otherwise print "Are you sure that yellow light is not on?".
*/

if ($red_light) {
    echo "Stop the car!";}
else {
	echo "Are you sure that yellow light is not on?";
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare variable named yellowLight and 
assign it with the value false.
*/

$yellow_light = false;

/*
Use if/else statement to check if the red or yellow light is on,
if so, print "Stop the car!", otherwise print "Are you sure that traffic lights are working at all?".
*/

if ($red_light && $yellow_light) {
  echo "Stop the car!";
} else {
  echo "Are you sure that traffic lights are working at all?";
};


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Declare variable named greenLight and 
assign it with the value false.
*/

$green_light = false;

/*
Use if/else-if/else statement.

Check if the red or yellow light is on, and the green light is off,
if so, print "Stop the car!".

Next, check if the red and yellow and green light is off,
In this case, print "Power outage!".

Next, check if the red and yellow light is off, and the green light is on.
In this case, print "Keep moving!";

Next, check if the red or yellow light is on, and the green light is on too.
In this case, print "Traffic lights are messed up!".

In any other case, print "Use the common sense and stay safe!".
*/

if (!($red_light && $yellow_light) && $green_light) {
  echo "Stop the car";
} elseif ($red_light && $yellow_light && $green_light) {
  echo "power outage";
}elseif($red_light && $yellow_light &&! $green_light) {
  echo "keep moving";
} elseif (!($red_light && $yellow_light && $green_light)) {
  echo "Traffic lights are messed up!";
}else{
  echo "Use the common sense and stay safe!";
};


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Handle the problem from the task 4 with switch-statement!
The referencial value will be true.
*/

switch ($red_light . $yellow_light . $green_light) {
  case ($red_light && $yellow_light) && $green_light:
    echo "Stop the car";
    break;
  case ($red_light && $yellow_light && $green_light):
    echo "power outage";
    break;
    case ($red_light && $yellow_light &&! $green_light):
    echo "keep moving";
      break;
    case !($red_light && $yellow_light && $green_light):
    echo "Traffic lights are messed up!";
      break;
  default:
    echo "Use the common sense and stay safe!";
    break;
}

?>