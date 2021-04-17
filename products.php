<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css" />
    <link rel="stylesheet" type="text/css" href="resource/css/style.css" />
    <link rel="stylesheet" type="text/css" href="resource/css/queries.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css" />
    <link rel="stylesheet" type="text/css" href="vendors/css/animate.css" />
</head>

<body>
    <header class="test">
        <nav>
            <div class="row">
                <a href="./index.php#header"><img src="./resource/images/logo-white.png" alt="Logo" class="logo"></a>
                <ul class=" main-nav">
                    <li><a href="./index.php#features">Food delivery<div></div></a></li>
                    <li><a href="./index.php#city">Our cities<div></div></a></li>
                    <li><a href="./index.php#products">Our Products<div></div></a></li>
                    <li><a href="./index.php#contacts">Contacts<div></div></a></li>
                    <li><a href="./index.php#login">Log In<div></div></a></li>
                    <li><a href="./index.php#signup">Sign up<div></div></a></li>
                </ul>
                <a class="mobile-nav-icon navicon"><i class="ion-navicon-round" id="iicon"></i></a>
            </div>
        </nav>
    </header>


    <br />
    <h2>Meal Plans</h2>

    <div class="row" id="mealPlanID">
        
    </div>


    <br />
    <h2>Other Products</h2>


    <div class="row" id="otherProductsID">
        <div class="col span-1-of-4">
            <div class="plan-box">
                <div>
                    <h3>Omifoods Premium Hoodie</h3>
                    <p class="plan-price">$49.99</p>
                </div>
                <div>
                    <ul>
                        <li><i class="ion-ios-checkmark-empty iconsmall"></i> 80% cotton, 20% polyester pullover hoodie</li>
                        <li><i class="ion-ios-checkmark-empty iconsmall"></i> Machine washable</li>
                    </ul>
                </div>
                <div>
                    <a href="#" class="btn btn-ghost">View</a>
                </div>
            </div>
        </div>
        <div class="col span-1-of-4">
            <div class="plan-box">
                <div>
                    <h3>Omifoods Tee Shirt</h3>
                    <p class="plan-price">$24.99</p>
                </div>
                <div>
                    <ul>
                        <li><i class="ion-ios-checkmark-empty iconsmall"></i> Printed with soft hand inks</li>
                        <li><i class="ion-ios-checkmark-empty iconsmall"></i> Machine washable</li>
                    </ul>
                </div>
                <div>
                    <a href="#" class="btn btn-ghost">View</a>
                </div>
            </div>
        </div>

        <div class="col span-1-of-4">
            <div class="plan-box">
                <div>
                    <h3>Omifoods Travel Cup</h3>
                    <p class="plan-price">$9.99</p>
                </div>
                <div>
                    <ul>
                        <li><i class="ion-ios-checkmark-empty iconsmall"></i> Microwave, freezer and dishwasher safe</li>
                        <li><i class="ion-ios-checkmark-empty iconsmall"></i> Safe for hot & cold</li>
                    </ul>
                </div>
                <div>
                    <a href="#" class="btn btn-ghost">View</a>
                </div>
            </div>
        </div>
        <div class="col span-1-of-4">
            <div class="plan-box">
                <div>
                    <h3>Omifoods Coasters</h3>
                    <p class="plan-price">$19.99</p>
                </div>
                <div>
                    <ul>
                        <li><i class="ion-ios-checkmark-empty iconsmall"></i> Water and Stain Resistant</li>
                        <li><i class="ion-ios-checkmark-empty iconsmall"></i> Light weight</li>
                    </ul>
                </div>
                <div>
                    <a href="#" class="btn btn-ghost">View</a>
                </div>
            </div>
        </div>
    </div>
    <br />

<!-- The Modal -->
<div id="myModal" class="modal">
<span class="close" id="close" data-id="testong">&times;</span>
</div>
<section class="section-plans" >
    <h2>Recently viewed Items</h2>
    <div class="row" id="recents">

    </div>
</section>
<section class="section-cities" >
    <h2>Most viewed Items</h2>
    <div class="row" id="frequents">
    </div>
</section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./productInfo.js">
        
    </script>
</body>


</html>