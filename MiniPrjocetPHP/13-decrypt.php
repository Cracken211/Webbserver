<?php
$key = intval(readline("Ange nyckeln >> "));
$text = readline("Ange texten >> ");

$encrypted_text = "";

for ($i = 0; $i < strlen($text); $i++) {
  $ch = $text[$i];

  if (ctype_alpha($ch)) {
    if (ctype_upper($ch)) {
      $ch = strtolower($ch);
    }

    $ch = chr((ord($ch) - ord('a') + $key) % 26 + ord('a'));

    if (ctype_lower($ch)) {
      $ch = strtoupper($ch);
    }
  }
  $encrypted_text .= $ch;
}

echo $encrypted_text;
