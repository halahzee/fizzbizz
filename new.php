<?php 
echo "<h1>PHP</h1>";

for ($i = 1; $i <= 100; $i++)
{
  if ( $i% 15 == 0)
   {
     echo $i . " FizzBizz". "<br>" ;
   }
  else if ( $i% 4 == 0 ) 
   {
     echo $i. " Bizz"."<br>";
   }
     else if ( $i% 2 == 0 ) 
   {
     echo $i. " Fizz"."<br>";
   }
     else
   {
     echo $i."<br>";
   }
 }
?>