<!-- PHP | Reading forms using GET | Slide 26 -->

<?php

   if(isset($_GET['BtnSubmit']))
   {
      echo "<h3> You submitted form data as below </h3>";
      echo "Your Name : {$_GET['FullName']} </br>";
      echo "I like  :  <h2> {$_GET['I_like']} </h2> Programming...! </br>";
      echo "<hr>";
   }
   
?>
