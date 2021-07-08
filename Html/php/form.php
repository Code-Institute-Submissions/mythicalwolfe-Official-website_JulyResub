 <?php
 if (isset($_post['submit'])){
     $name= $_post['name'];
     $subject= $_post['subject'];
     $mailform= $_post['mail'];
     $message= $_post['message'];

     $mailTo= "talesofrievara@outlook.com";
     $headers = "From: ".$mailFrom;
     $txt = "You have recieved an email from ".$name.".\n\n".$message;

     mail($mailTo, $subject, $txt, $headers);
     header("Location: contact.html?mailsend");

 }  

