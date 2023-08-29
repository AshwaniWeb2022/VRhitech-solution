<?php
if(isset($_POST['submit'])){
    $name = $_POST['FullName'];
    $email= $_POST['Email'];
    $message= $_POST['message'];
    $to='ashwani.kumar@codmsoftware.com';
    $subject= $name;
    $message=".\r\n Name :".$name."\r\n Email :".$email."\r\n message :".$message;
    $headers = "from :". $email;

    if(mail($to, $subject, $message, $headers)){
          header("location:thanku.php");
    }
  else{
    echo"Something went wrong";
  }
    
}

?>