<!-- PHP | Reading forms using GET | Slide 23 -->

<?php

   if(isset($_GET['BtnSubmit']))
   {
      echo "<h2> Below is the form data </h2>";
      echo "<hr>";
      echo "</br>Your Name :{$_GET['Fullname']}";
	  #echo "</br>Your Name :".$_GET['Fullname'];
      echo "</br>Your Address :{$_GET['UserAddress']}";
	  #echo "</br>Your Address :".$_GET['UserAddress'];
      echo "<hr>";
   }
   
?>
