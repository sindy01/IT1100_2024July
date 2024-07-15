<!-- PHP | Reading forms using POST | Slide 26 -->

<?php

   if(isset($_POST['BtnSubmit']))
   {
      echo "<h3> You submitted form data as below </h3>";
      echo "Your Name : {$_POST['FullName']} </br>";
      echo "I like  :  <h2> {$_POST['I_like']} </h2> Programming...! </br>";
      echo "<hr>";
   }
   
?>
