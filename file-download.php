<?php
 #!/usr/bin/perl

 #HTTP Header
 print "Content-Type: application/octet-stream; name=\"FileName\"\r\n";
 print "Content-Disposition: attachment; fileName=\"FileName\"\r\n\n";

 #Actual File Content
 open(FILE, "<FileName>");
 while(read(FILE, $buffer, 100)) {
   print("$buffer");
 }
 ?>
