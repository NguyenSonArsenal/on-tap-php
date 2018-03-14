<?php

function changeColorFirstCharacter($txt) {
  $txt = (string)$txt;
  $text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$txt);
  return $text;
}

$textChangedColor = changeColorFirstCharacter('a1234' );
echo $textChangedColor;