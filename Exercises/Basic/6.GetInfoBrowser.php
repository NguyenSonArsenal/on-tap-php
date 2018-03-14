<?php

function getBrowserInfo(){
  $result = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : 'Nothing';
  return $result;
}

$browserInfo = getBrowserInfo();
echo "Your User Agent is :" . $browserInfo;
