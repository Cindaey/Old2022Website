<?php
if($_POST["message"]) {
    mail("your@email.address", "Form to email message", $_POST["message"], "From: an@email.address");
}
if($_POST["submit"]) {
    $recipient="your@email.address";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cindy Dong &#10046; Website</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <script src="script.js"></script>
        <style></style>
    </head>
    <body>
        <header>
            <a class="skip" href="#national">Skip to Content</a>
            <button onclick="openNav()" class="menu">&#9776;</button>  
             <div id="cindy">
                <div id="logo_a"><a href="https://cdong23.github.io/index.html" tabindex="0"><img id="logo" src="website_asset/logo_small.png" alt="website logo"><h1>Cindy Dong</h1></a></div>
        </div>   
                <nav class="ham">
                    <ul id="hamburger">
                        <li><button aria-label="Close" class="closeBtn" id="closeBtn" onclick="closeNav()"><span>&times;</span></button></li>
                        <li><a href="index.html" aria-current="false" onfocus="openNav()"><span>Home</span></a></li>
                        <li><a href="about.html" aria-current="false" onfocus="openNav()"><span>About Cindy</span></a></li>
                        <li><a href="wportfolio.html" aria-current="false" onfocus="openNav()"><span>Commission</span></a></li>
                        <li><a href="contact.html" aria-current="page" onfocus="openNav()"><span>Contact</span></a></li>
                        <li><a href="wportfolio.html" aria-current="false" onfocus="openNav()" onblur="closeNav()"><span>Terms of Use/Permission</span></a></li>

                </ul>
                </nav>
                <nav>
                    <ul class="sidebar">
                        <li><a href="index.html" aria-current="false"><span>Home</span></a></li>
                        <li><a href="about.html" aria-current="false"><span>About Cindy</span></a></li>
                        <li><a href="wportfolio.html" aria-current="false"><span>Commission</span></a></li>
                        <li><a href="contact.html" aria-current="page"><span>Contact</span></a></li>
                        <li><a href="wportfolio.html" aria-current="false"><span>Terms of Use/Permission</span></a></li>

                </ul>
                </nav>
            </header>
        <main id="national">
                <div class="projectintro" id="top">
            <h2>Contact</h2>
        </div>
        <form method="post" action="contact.php">
        <label>Name:</label>
        <input name="sender">

        <label>Email address:</label>
        <input name="senderEmail">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <input type="submit" name="submit">
    </form>
        </main>
        <footer>
            <p>All rights reserved &#169; 2022 Cindy Dong</p>
        </footer>
    </body>