


<?php
if(isset($_POST['name']) || isset($_POST['email'])|| isset($_POST['subject']) || isset($_POST['message'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    
    
    $mailheader = "From:" .$name."<".$email.">\r\n";
    
    $recipient = "sinizahir@gmail.com";

    
    mail($recipient, $subject, $message, $mailheader)
    or die("Error");

    
    echo '
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
   

     <div class="container">
        <h1>Contact Us</h1>
        <h1>Thank you for contacting me</h1>
        <p class="back">go back to the <a href="index.html">home page</a></p>
        
    </div>


</body>
</html>

    
    
    
    ';
}




?>
