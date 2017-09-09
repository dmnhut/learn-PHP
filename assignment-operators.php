<html>
<head><title>Assignment Operators</title></head>
<body>
<?php
  $a = 42;
  $b = 20;

  $c = $a + $b; /* Assignment operators */
  echo "Addition Operation Result: $c <br/>";
  $c += $a; /* c value was 42 + 20 + 42 = 104 */
  echo "Add AND Assignment Operation Result: $c<br/>";
  $c -= $a; /* c value was 104 - 42 = 62 */
  echo "Subtract AND Assignment Operation Result: $c<br/>";
  $c *= $a; /* c value was 62 * 42 = 2604 */
  echo "Multiply AND Assignment Operation Result: $c<br/>";
  $c /= $a; /* c value was 2604 / 42 = 62 */
  echo "Division AND Assignment Operation Result: $c<br/>";
  $c %= $a; /* c value was 62 mod 42 = 20 */
  echo "Modulus AND Assignment Operation Result: $c<br/>";
   
 ?>
</body>
</html>
