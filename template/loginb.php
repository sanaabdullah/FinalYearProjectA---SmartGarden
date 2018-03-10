<?php
  // include("php/db_config.php");
   session_start();
   $error=''; //vaiable to store error
   if (isset($_POST['submit']))
   {
      if (empty($_POST['username']) || empty($_POST['username']))
      {
         $error="Please enter username and password";
      }
   

   else
   {
      $username=$_POST['username'];
      $password=$_POST['password'];
   

      $connection = mysql_connect("localhost", "root", "");
      $username=stripslashes($username);
      $password=stripcslashes($password);
      $username=mysql_real_escape_string($username);
      $password=mysql_real_escape_string($password);
      $db=mysql_select_db("angularcode",$connection);
      $query=mysql_query("select * from buyer where Password='$password' AND Email='$username'", $connection);

      $rows=mysql_num_rows($query);
      if($rows==1)
      {
         $row=mysql_fetch_array($query);
         $rank1=$row['first_name'];
         $rank2=$row['last_name'];
         $rank3=$row['ID'];
         $rank4=$row['Username'];
         $rank5=$row['AccCreate'];
         $rank6=$row['Email'];
         $rank7=$row['Address'];
         $_SESSION['logged']=true;
         $_SESSION['first_name']= $rank1;
         $_SESSION['last_name']= $rank2;
         $_SESSION['ID']= $rank3;
         $_SESSION['Username']= $rank4;
         $_SESSION['AccCreate']= $rank5;
         $_SESSION['Email']= $rank6;
         $_SESSION['Address']= $rank7;
		 $_SESSION['buyer']=true;
         header("location: home.php");
      } else{
         $error="Username or password is invalid";
      }
      mysql_close($connection);




   }