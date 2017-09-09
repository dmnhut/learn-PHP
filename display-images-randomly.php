<html>
 <head>
   <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">

 </head>
 <body>
  <?php

   $num = rand (1, 4);

   switch ($num) {
     case 1:
       $image_file = "img/nodejs.png";
       break;
     case 2:
       $image_file = "img/javascript.png";
       break;
     case 3:
       $image_file = "img/android.png";
       break;
     case 4:
       $image_file = "img/phpnet.png";
       break;
   }

   echo " <h3 style='font-family: Lobster;' >Random Image : <img style='width: 40%; heigth: 40%' class='img-thumbnail' src=$image_file /></h3>";
   ?>
 </body>
</html>
