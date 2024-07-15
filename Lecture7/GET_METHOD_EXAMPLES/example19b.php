<!-- PHP | Reading forms using GET | Slide 24 -->

<?php
   if(isset($_GET['BtnSubmit']))
   {
      echo "<h3> Your form data as below </h3>";
      echo "</br>Your Name : {$_GET['FullName']}";
      echo "</br>Your are : {$_GET['YourGender']}";
      echo "<hr>";
   }
?>
