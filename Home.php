<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eldars</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <header class="main">
        <nav>
            <a href="#" class="logo">
                <img src="images/logo1.png"/>
            </a>

            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="feature.php">Feature</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>

            </ul>
        </nav>
        <div class="main-heading">
            <h1>Create Prespectives With Virtual Reality</h1>
            <p>The future of storytelling is here: Create immersive VR experiences, no coding required</p>
            <a class="main-btn" href="contact.php">Contact</a>
        </div>
    </header>

    <section class="features">
        <div class="feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon1.png"/>
                </div>
                <div class="f-text">
                    <h4>Web Development</h4>
                    <a href="contact.php" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon2.png"/>
                </div>
                <div class="f-text">
                    <h4>Software Development</h4>
                    <a href="contact.php" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon3.png"/>
                </div>
                <div class="f-text">
                    <h4>App Development</h4>
                    <a href="contact.php" class="main-btn">Check</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="about-img">
            <img src="images/about.png">
        </div>
        <div class="about-text">
            <h2>Start Tracking Your Statistics</h2>
            <p>Simple tracking, powerful results: Get started in minutes with our user-friendly platform.</p>
            <button class="main-btn">Read More</button>
        </div>
    </section>

    <footer class="contact">
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
    </footer>
    <a class="gotobtn" href="#"> <i class="fas fa-arrow-up"></i></a>
</body>
</html>
