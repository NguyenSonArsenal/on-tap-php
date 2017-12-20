<?php

echo " ?  1. array('white', 'green', 'red', 'blue', 'black');<br>
Write a script which will display the following string - Go to the editor<br>
\"The memory of that scene for me is like a frame of film forever frozen at that moment:
the red carpet, the green lawn, the white house, the leaden sky.
The new president and his first lady. - Richard M. Nixon\"
and the words 'red', 'green' and 'white' will come from array.";

echo "<br>";
echo "==============================";
echo "<br>";

$color = array('white', 'green', 'red', 'blue', 'black');

echo "The memory of that scene for me is like a frame of film forever frozen at that moment:
the $color[2] carpet, the $color[1] lawn, the $color[0]  house, the leaden sky.
 The new president and his first lady. - Richard M. Nixon ";