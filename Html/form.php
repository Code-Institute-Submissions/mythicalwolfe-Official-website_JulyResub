 

<?php

if($_POST["message"]) {

mail("talesofrievara@outlook.com", "Here is the subject line",

$_POST["insert your message here"]. "From: an@email.address");

}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Tales of Rievara</title>
     <link rel="stylesheet" href="css/style.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
     rel="stylesheets">
     <style>
         div{color:black}
         p{color:black}
        strong{color:red;
        font-size:24px;}
        bold{color:red; 
        font-size:24px;}
        #btnscrolltotop {
        position: fixed;
        right : 10px;
        bottom: 100px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background:red;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
        color: white ;
        border: none ;
        outline: none;
        cursor: pointer;
      }
      </style>
      </head>
      <body>
           
      <form action="form.php" method="post">
        <label for="Name">Name:</label>
        <input type="text" id="name" name="name">
    <br>
        <label for="email">Emial:</label>
        <input type="text" id="email" name="email">
    <br>
        <label for="Message">Message:</label>
        <textarea type="text" id="message" name="message" rows="10" cols="30"></textarea>
   <br>
        <button type="submit">Submit!</button>
    </form>
      </body>
      </html>

