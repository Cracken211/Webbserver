<?php

for ($i = 1000; $i < 100000; $i++) {
  $is_prime = true;

  for ($j = 2; $j < $i; $j++) {
    if ($i % $j == 0) {
      $is_prime = false;
      break;
    }
  }

  if ($is_prime) {
    echo $i;
    break;
  }
}