<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Contact Form</title>

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/7842390712.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
    <div class="wrapper-text">
        <h1>Contact Us</h1>
        <h4>Any question or remarks? Just write us a message!</h4>
    </div>
    <div class="wrapper-block">
        <div class="wrapper-contact">
            <div class="wrapper-contact-text">
                <h3>Contact information</h3>
                <h6>Fill up the form and our Team will get back to you within 24 hours.</h6>
            </div>
            <div class="wrapper-contact-info">
                <div class="icon"><span class="material-symbols-outlined">
call
</span>
                    <p>+0123 4567 8910</p>
                </div>
                <div class="icon"><span class="material-symbols-outlined">
mail
</span>
                    <p>hello@gmail.com</p>
                </div>
                <div class="icon"><span class="material-symbols-outlined">
location_on
</span>
                    <p>Privet drive</p>
                </div>
            </div>
            <div class="wrapper-contact-social">
                <div class="icon-con"><a href="#"><i class="fab fa-facebook-f"></i></a></div>
                <div class="icon-con"><a href="#"><i class="fab fa-x-twitter"></i></a></div>
                <div class="icon-con"><a href="#"><i class="fa-brands fa-instagram"></i></a></div>
                <div class="icon-con"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></div>
            </div>
        </div>
        <form action="#" class="wrapper-form" method="POST">
            <div class="wrapper-form-inputs">
                <div class="wrapper-form-field">
                    <label for="firstname">Firstname</label>
                    <input type="text" id="firstname" name="firstname">
                </div>
                <div class="wrapper-form-field">
                    <label for="lastname">Lastname</label>
                    <input type="text" id="lastname" name="lastname">
                </div>
                <div class="wrapper-form-field">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="wrapper-form-field">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone">
                </div>
            </div>
            <div class="wrapper-form-question">
                <p class="question">What kind of the website do you need?</p>
                <div class="wrapper-form-radio">
                    <input type="radio" id="webd" name="website" checked>
                    <label for="webd">Web Design</label>
                </div>
                <div class="wrapper-form-radio">
                    <input type="radio" id="webdev" name="website">
                    <label for="webdev">Web Development</label>
                </div>
                <div class="wrapper-form-radio">
                    <input type="radio" id="logod" name="website">
                    <label for="logod">Logo Design</label>
                </div>
                <div class="wrapper-form-radio">
                    <input type="radio" id="other" name="website">
                    <label for="other">Other</label>
                </div>
            </div>
            <div class="wrapper-message">
                <label for="message" id="lmessage">Message</label>
                <textarea name="message" id="message" placeholder="Write your message..."></textarea>
            </div>
            <input type="submit" id="submit" value="Send Message">
            <p class="status">Sending your message...</p>
        </form>
    </div>
</div>
</div>

<script src="js/script.js"></script>
</body>
</html>