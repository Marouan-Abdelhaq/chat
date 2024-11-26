<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marouan@gmail,com</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="chat">
        <div class="button_email">
            <span>marouan@gmail.com</span>
            <a href="" class="Deconnexion_btn">Deconnexion</a>
        </div>
        <!--message-->
        <div class="message_box">
            <div class="message your_message">
                <span>Vous</span>
                <p>Comment ca vas ??</p>
                <p class="date">24-12-01 00:25:26</p>
            </div>
            <div class="message others_message">
                <span>abdelhaq@gmail.com</span>
                <p>Oui ca vas merci</p>
                <p class="date">24-12-01 00:25:26</p>
            </div>
        </div>
        <!--fin message-->
        <form action="" class="send_message" method="POST">
            <textarea name="message" cols="30" rows="2" placeholder="Votre message"></textarea>
            <input type="submit" value="Envoye" name="send">
        </form>
    </div>
</body>
</html>