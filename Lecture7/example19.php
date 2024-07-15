<!-- PHP | Reading forms using POST | Slide 24 -->

<?php
   if(isset($_POST['BtnSubmit']))
   {
      echo "<h3> Your form data as below </h3>";
      echo "</br>Your Name : {$_POST['FullName']}";
	  #echo "</br>Your Name : ".$_POST['FullName'];
      #echo "</br>Your are : {$_POST['YourGender']}";
	  echo "</br>Your are : ".$_POST['YourGender'];
      echo "<hr>";
   }
?>
