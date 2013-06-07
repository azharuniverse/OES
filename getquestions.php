<?php
   require('/dbconnect.php');
   $result1 = mysql_query(" SELECT * FROM c ORDER BY RAND() LIMIT 3");
   $result2 = mysql_query(" SELECT * FROM difficult ORDER BY RAND() LIMIT 2");
   $result3 = mysql_query(" SELECT * FROM gk ORDER BY RAND() LIMIT 4");
   $result4 = mysql_query(" SELECT * FROM misc ORDER BY RAND() LIMIT 6");

   $q1=mysql_fetch_array($result4);
   $q2=mysql_fetch_array($result3);
   $q3=mysql_fetch_array($result4);
   $q4=mysql_fetch_array($result1);
   $q5=mysql_fetch_array($result3);
   $q6=mysql_fetch_array($result4);
   $q7=mysql_fetch_array($result3);
   $q8=mysql_fetch_array($result4);
   $q9=mysql_fetch_array($result2);
   $q10=mysql_fetch_array($result1);
   $q11=mysql_fetch_array($result4);
   $q12=mysql_fetch_array($result1);
   $q13=mysql_fetch_array($result3);
   $q14=mysql_fetch_array($result2);
   $q15=mysql_fetch_array($result4);
  ?>