<html>
  <body>
    <?php
      $a = 0;
      $b = 0;
      $c = 5;

      for( $i=0; $i<$c; $i++ ){
        $a += $c*2;
        $b += $c;
      }
      echo ("At the end of the loop a = $a and b = $b");
     ?>
  </body>
</html>
