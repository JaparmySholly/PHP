<?php

// The switch statement is used to perform different actions based on different conditions.


$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}


// When PHP reaches a 'break' keywork, it breaks out of the switch block.
// If no cases get a match, the default block is executed:
