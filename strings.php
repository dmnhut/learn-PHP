<?php
  $string_1 = "This is a string in double quotes";
  $string_2 = "This is a somewhat longer, singly quoted string";
  $string_39 = "This string has thirty-nine characters";
  $string_0 = ""; // a string with zero characters
  $variable = "name";
  $literally = "My $variable will not print!";
  print($literally);
  echo "<br/>";
  $literally = "My $variable will print!";
  print($literally);
  echo "<br/>";

  # ----
  $string1="Hello World";
  $string2="1234";
  echo "<br/>".$string1 . " " . $string2;

  # strlen()
  echo "<br/>".strlen("Hello world!");

  # strpos()
  echo "<br/>".strpos("Hello world!", "world");
 ?>
