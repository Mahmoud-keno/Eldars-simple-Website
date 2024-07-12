<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <header class="main">
        <nav>
            <a href="#" class="logo">
                <img src="images/logo1.png"/>
            </a>

            <ul class="menu">
                <li><a href="Home.php">Home</a></li>
                <li><a href="feature.php">Feature</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php" class="active" >Contact</a></li>
            </ul>
        </nav>
        <section class="contact">
            <div class="contact-heading">
                <h1>Contact Us</h1>
                <p>Unlock the possibilities. Contact us today.</p>
            </div>
            <form action="userinformation.php" method="post">
                <input type="name" name="name" placeholder="name"/>
                <input type="email" name="email" placeholder="email"/>
                <input type="subject" name="subject" placeholder="subject"/>
                <textarea name="message" placeholder="Message"></textarea>
                <button class="main-btn contact-btn" type="submit">Continue</button>
            </form>
        </section>
        <a class="gotobtn" href="#"> <i class="fas fa-arrow-up"></i></a>
        <footer class="footer">
           <img src="images/logo1.png" alt="#">
            <div class="social-icons">
                                  <a href="#"><i class="fab fa-facebook"></i></a>
                                  <a href="#"><i class="fab fa-twitter"></i></a>
                                  <a href="#"><i class="fab fa-instagram"></i></a>
                                  <a href="#"><i class="fab fa-tiktok"></i></a>    
                              </div>
            
            
        </footer>

</body>
</html>