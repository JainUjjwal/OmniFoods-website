<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css" />
    <link rel="stylesheet" type="text/css" href="resource/css/style.css" />
    <link rel="stylesheet" type="text/css" href="resource/css/queries.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css" />
    <link rel="stylesheet" type="text/css" href="vendors/css/animate.css" />
    <title>Omnifood</title>
    <link rel="apple-touch-icon" sizes="180x180" href="resource/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="resource/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="resource/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="resource/favicons/manifest.json">
    <link rel="mask-icon" href="resource/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="resource/favicons/favicon.ico">
    <meta name="msapplication-config" content="resource/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <header id="header">
        <nav>
            <div class="row">
                <a href="#header"><img src="./resource/images/logo-white.png" alt="Logo" class="logo"></a>
                <ul class="main-nav">
                    <li><a href="#features">Food delivery<div></div></a></li>
                    <li><a href="#city">Our cities<div></div></a></li>
                    <li><a href="#products">Our Products<div></div></a></li>
                    <li><a href="#contacts">Contacts<div></div></a></li>
                    <li><a href="#login">Log In<div></div></a></li>
                    <li><a href="#signup">Sign up<div></div></a></li>
                </ul>
                <a class="mobile-nav-icon navicon"><i class="ion-navicon-round" id="iicon"></i></a>
            </div>
        </nav>
        <div class="hero-text-box">
            <h1>Goodbye junk food.<br /> Hello super healthy meals.</h1>
            <a class="btn btn-full" href="#products">I'm hungry</a>
            <a class="btn btn-ghost" href="#features">Show me more</a>
        </div>
    </header>

    <section class="section-features" id="features">
        <div class="row">

            <h2>Get food fast &mdash; not fast food.</h2>
            <p class="long-copy">Hello, we're Omnifood, your new premium food delivery service. We know you're always busy. No time for cooking. So let us take care of that, we're really good at it, we promise!</p>
        </div>
        <div class="row" id="featuresdiv">
            <div class="col span-1-of-4 box">
                <i class="ion-ios-infinite-outline iconbig"></i>
                <h3>Up to 365 days/year</h3>
                <p>Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style</p>
            </div>
            <div class="col span-1-of-4 box">
                <i class="ion-ios-clock-outline iconbig"></i>
                <h3>Ready in 20 minutes</h3>
                <p>You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.</p>
            </div>
            <div class="col span-1-of-4 box">
                <i class="ion-ios-nutrition-outline iconbig"></i>
                <h3>100% organic</h3>
                <p>All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!</p>
            </div>
            <div class="col span-1-of-4 box">
                <i class="ion-ios-cart-outline iconbig"></i>
                <h3>Order anything</h3>
                <p>We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!</p>
            </div>
        </div>
    </section>
    <section class="section-meal">
        <ul class="meal-showcase clearfix">
            <li>
                <figure class="meal-figure">
                    <img src="resource/images/1.jpg" />
                </figure>
            </li>
            <li>
                <figure class="meal-figure">
                    <img src="resource/images/2.jpg" />
                </figure>
            </li>
            <li>
                <figure class="meal-figure">
                    <img src="resource/images/3.jpg" />
                </figure>
            </li>
            <li>
                <figure class="meal-figure">
                    <img src="resource/images/4.jpg" />
                </figure>
            </li>
        </ul>
        <ul class="meal-showcase clearfix">
            <li>
                <figure class="meal-figure">
                    <img src="resource/images/5.jpg" />
                </figure>
            </li>
            <li>
                <figure class="meal-figure">
                    <img src="resource/images/6.jpg" />
                </figure>
            </li>
            <li>
                <figure class="meal-figure">
                    <img src="resource/images/7.jpg" />
                </figure>
            </li>
            <li>
                <figure class="meal-figure">
                    <img src="resource/images/8.jpg" />
                </figure>
            </li>
        </ul>
    </section>
    <section class="section-steps" id="work">
        <div class="row">
            <h2>How it works &mdash; Simple as 1, 2, 3</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-2 steps-box" id="workdiv">
                <img src="resource/images/app-iPhone.png" class="appscreen" />
            </div>
            <div class="col span-1-of-2 steps-box">
                <div class="works-step">
                    <div>1</div>
                    <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                </div>
                <div class="works-step">
                    <div>2</div>
                    <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
                </div>
                <div class="works-step">
                    <div>3</div>
                    <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
                </div>

                <a href="#" class="btn-app"><img src="resource/images/download-app-android.png" /></a>
                <a href="#" class="btn-app"><img src="resource/images/download-app-android.png" /></a>
            </div>
        </div>
    </section>
    <section class="section-cities" id="city">
        <div class="row">
            <h2>We're currently in these cities</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-4 box citydiv">
                <img src="resource/images/lisbon-3.jpg" />
                <h3>Lisbon</h3>
                <div class="city-future">
                    <i class="ion-ios-person iconsmall"></i>
                    1600+ happy eaters
                </div>
                <div class="city-future">
                    <i class="ion-ios-star iconsmall"></i>
                    60+ top chefs
                </div>
                <div class="city-future">
                    <i class="ion-social-twitter iconsmall"></i>
                    <a href="#">@omnifood_lx</a>
                </div>
            </div>
            <div class="col span-1-of-4 box citydiv">
                <img src="resource/images/san-francisco.jpg" />
                <h3>San Francisco</h3>
                <div class="city-future">
                    <i class="ion-ios-person iconsmall"></i>
                    3700+ happy eaters
                </div>
                <div class="city-future">
                    <i class="ion-ios-star iconsmall"></i>
                    160+ top chefs
                </div>
                <div class="city-future">
                    <i class="ion-social-twitter iconsmall"></i>
                    <a href="#">@omnifood_sf</a>
                </div>
            </div>
            <div class="col span-1-of-4 box citydiv">
                <img src="resource/images/berlin.jpg" />
                <h3>Berlin</h3>
                <div class="city-future">
                    <i class="ion-ios-person iconsmall"></i>
                    2300+ happy eaters
                </div>
                <div class="city-future">
                    <i class="ion-ios-star iconsmall"></i>
                    110+ top chefs
                </div>
                <div class="city-future">
                    <i class="ion-social-twitter iconsmall"></i>
                    <a href="#">@omnifood_berlin</a>
                </div>
            </div>
            <div class="col span-1-of-4 box citydiv">
                <img src="resource/images/london.jpg" />
                <h3>London</h3>
                <div class="city-future">
                    <i class="ion-ios-person iconsmall"></i>
                    1200+ happy eaters
                </div>
                <div class="city-future">
                    <i class="ion-ios-star iconsmall"></i>
                    50+ top chefs
                </div>
                <div class="city-future">
                    <i class="ion-social-twitter iconsmall"></i>
                    <a href="#">@omnifood_london</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section-testimonials">
        <div class="row">
            <h2>Our customers can't live without us</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-3">
                <blockquote>
                    Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
                </blockquote>
                <cite>
                    <img src="resource/images/customer-1.jpg" />
                    Alberto Duncan
                </cite>
            </div>
            <div class="col span-1-of-3">
                <blockquote>
                    I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
                </blockquote>
                <cite>
                    <img src="resource/images/customer-3.jpg" />
                    Milton Chapman
                </cite>
            </div>
            <div class="col span-1-of-3">
                <blockquote>
                    Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
                </blockquote>
                <cite>
                    <img src="resource/images/customer-2.jpg" />
                    Joana Silva
                </cite>
            </div>
        </div>
    </section>
    <section class="section-plans" id="products">
        <div class="row">
            <h2>Start eating healthy today</h2>
        </div>
        <div class="row">
        <div class="col span-1-of-3">
            <div class="plan-box">
                <div>
                    <h3>Luxury</h3>
                    <p class="plan-price">$399 <span>/ month</span> </p>
                    <p class="plan-price-meal"> That's only $13.30 per meal</p>
                </div>
                <div>
                    <ul>
                        <li><i class="ion-ios-checkmark-empty iconsmall"></i> 1 meal every day</li>
                        <li><i class="ion-ios-checkmark-empty iconsmall"></i>Order 24/7</li>
                        <li><i class="ion-ios-checkmark-empty iconsmall"></i>Access to newest creations</li>
                        <li><i class="ion-ios-checkmark-empty iconsmall"></i>Free delivery</li>
                    </ul>
                </div>
                <div>
                    <a href="#" class="btn btn-ghost">View</a>
                </div>
            </div>
        </div>
        <div class="col span-1-of-3">
            <div class="plan-box">
                <div>
                    <h3>Pro</h3>
                    <p class="plan-price">$149 <span>/ month</span></p>
                    <p class="plan-price-meal"> That's only $14.90 per meal</p>
                </div>
                <div>
                    <ul>
                        <li><i class="ion-ios-checkmark-empty iconsmall"></i>10 meals every month</li>
                        <li><i class="ion-ios-checkmark-empty iconsmall"></i>Order 24/7</li>
                        <li><i class="ion-ios-checkmark-empty iconsmall"></i>Access to newest creations</li>
                        <li><i class="ion-ios-checkmark-empty iconsmall"></i>Free delivery</li>
                    </ul>
                </div>
                <div>
                    <a href="#" class="btn btn-ghost">View</a>
                </div>
            </div>
        </div>

        <div class="col span-1-of-3">
            <div class="plan-box">
                <div>
                    <h3>Premium</h3>
                    <p class="plan-price">$99 <span>/ month</span></p>
                    <p class="plan-price-meal"> That's only $19.80 per meal</p>
                </div>
                <div>
                    <ul>
                        <li><i class="ion-ios-checkmark-empty iconsmall"></i> 5 meals every month</li>
                        <li><i class="ion-ios-checkmark-empty iconsmall"></i>Order from 8 am to 12 pm</li>
                        <li><i class="ion-ios-close-empty iconsmall"></i>Access to newest creations</li>
                        <li><i class="ion-ios-close-empty iconsmall"></i>Free delivery</li>
                    </ul>
                </div>
                <div>
                    <a href="#" class="btn btn-ghost">View</a>
                </div>
            </div>
        </div>
            </div>
            <div class="row centerButton">
                    <div class="col span-2-of-3 ">
                    <a href="./products.php" class="btn btn-ghost">View All products</a>
                    </div>
                </div>
        </div>
    </section>
    <section class="section-form" id="login">
        <div class="row">
            <h2>Log In</h2>
        </div>
        <div class="row">
            <form action="user_page.php" method="post" class="contact-form">
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="email">Email</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="email" name="EMAIL" id="email" placeholder="Your Email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="password">Password</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="password" name="PASSWORD" id="password" placeholder="Your Password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label>&nbsp;</label>
                    </div>
                    <div class="col span-2-of-3">
                        <button type="submit" class="btn btn-full">Log In</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="section-form section-plans" id="signup">
        <div class="row">
            <h2>Sign up</h2>
        </div>
        <div class="row">
            <form action="Sign_up.php" method="post" class="contact-form">
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="email">Email</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="email" name="EMAIL" id="email" placeholder="Your Email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="password">Password</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="password" name="PASSWORD" id="password" placeholder="Your Password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="FirstName">First Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="FIRSTNAME" id="FirstName" placeholder="Your First Name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="LastName">Last Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="LastName" name="LASTNAME" id="LastName" placeholder="Your Last Name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="homeAddress">Home Address</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="homeAddress" name="HOMEADDRESS" id="homeAddress" placeholder="Your Home Address" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="homePhone">Home Phone</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="homePhone" name="HOMEPHONE" id="homePhone" placeholder="Your Home Phone" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="cellPhone">Cell Phone</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="cellPhone" name="CELLPHONE" id="cellPhone" placeholder="Your Cell Phone" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <button type="submit" class="btn btn-full">Sign up</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section id="contacts">
        <div class="row">
            <h2>Contact Us</h2>
        </div>
        <?php
        require 'contacts.php';
        ?>
    </section>
    <footer>
        <div class="row">
            <div class="col span-1-of-2">
                <ul class="footer-nav">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">press</a></li>
                    <li><a href="#">IOS app</a></li>
                    <li><a href="#">Android App</a></li>
                </ul>
            </div>
            <div class="col span-1-of-2">
                <ul class="social-links">
                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <p>
                Copyright &copy; 2016 by Omnifood. All rights reserved
            </p>
        </div>
    </footer>

    <script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resource/js/scripts.js"></script>
</body>

</html>