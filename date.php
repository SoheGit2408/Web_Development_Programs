
<?php 
//Assuming today is and Standard Time Zone March 10th, 2001, 5:16:18 pm, 
$today = date("F j, Y, g:i a"); // March 10, 2001, 5:16 pm
 $today = date("m.d.y"); // 03.10.01
  $today = date("j, n, Y"); 
  // 10, 3, 2001
   $today = date("Ymd"); 
   // 20010310 
   $today = date('h-i-s, j-m-y, it is w Day');
    // 05-16-18, 10-03-01, 1631 1618 6 Satpm01 
    $today = date('\i\t \i\s \t\h\e jS \d\a\y.'); 
    // it is the 10th day. 
    $today = date("D M j G:i:s T Y");
     // Sat Mar 10 17:16:18 MST 2001 
     $today = date('H:m:s \m \i\s\ \m\o\n\t\h'); 
     // 17:03:18 m is month 
     $today = date("H:i:s"); 
     // 17:16:18
       ?> 
     <?php $tomorrow = mktime(0, 0, 0, date("m") , date("d")+1, date("Y")); 
     $lastmonth = mktime(0, 0, 0, date("m")-1, date("d"), date("Y")); 
     $nextyear = mktime(0, 0, 0, date("m"), date("d"), date("Y")+1); 
     ?> 
