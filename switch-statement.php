<html>
<body>
  <?php
  # $d = date("0");
  $d = "Mon";
  switch ($d) {
    case "Mon":
      echo "Today is Monday";
      break;
    case "Tue":
      echo "Today is Tuesday";
      break;
    case "Wed":
      echo "Today is Wednesday";
      break;
    case "Thu":
      echo "Today is Thursday";
      break;
    case "Fri":
      echo "Today is Friday";
      break;
    case "Sat":
      echo "Today is Saturday";
      break;
    case "Sun":
      echo "Today is Sunday";
      break;
    default:
      echo "Wonder which day is this ?";
      break;
  }
   ?>
</body>
</hmtl>