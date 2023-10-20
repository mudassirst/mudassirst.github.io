<?php
 if (!empty($_POST["send"])){
     $name = $_POST["name"];
     $email = $_POST["email"];
     $subject = $_POST["subject"];
     $message = $_POST["message"];
     $toemail = "mudassirsyed255@gmail.com";

     $mailheaders = "name: " . $name .
     "\r\n email: " . $email . 
     "\r\n subject: " . $subject . 
     "\r\n message: " . $message . "\r\n";
     
     if(mail($toemail, $name, $mailheaders)){
        $message = "your information is received successfully.";
        // echo "<h1>Your information is received successfully:</h1>";
        // echo $name;
        // echo "<br>";
        // echo $email;
        // echo "<br>";
        // echo $subject;
        // echo "<br>";
        // echo $message;
        // echo "<br>";
        // echo "<h2>Thank you for contacting me. I will get back to you as soon as possible!</h2>";
        // echo "<h2>go back to Home-page</h2>";
        header("Location: send.html");


     }
      
     
 }


?>