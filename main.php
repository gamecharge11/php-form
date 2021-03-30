<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - php</title>
</head>
<body>
    <?php 
    
    ?>
    <form class="contact-form" action="contactform.php" method="POST">
        <input type="text" name="name" placeholder="Full Name">
        <input type="text" name="mail" id="Your e-mail">
        <input type="text" name="subject" id="Subject">
        <textarea name="message" placeholder="Message"></textarea>
        <button type="submit" name="submit">Send Mail</button>
    </form>
</body>
</html>