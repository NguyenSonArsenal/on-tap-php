<?php

function checkEmail($email) {
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'email is a valid email address' . '<br>';
  } else {
    echo 'Email is not email' . '<br>';
  }
}

$email = 'vanon297.nguyen@gmail.com';
checkEmail($email);
