<!doctype html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Surfside Resort Availability</title>
    <meta name="description" content="Surfside Golf and Beach Resort is a full-service resort in Miramar, Fl on Florida's Gulf Coast.">
    <meta name="generator" content="Holmes, Michael">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../normalize.css">
    <link rel="stylesheet" href="../surfside.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <script src="https://use.fontawesome.com/1dbc24bc86.js"></script>
    <script src="https://use.typekit.net/suy7nma.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <script type="text/javascript" src="scripts/modernizr-custom.js"></script>
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
        </script>
        <![endif]-->
</head>
<body>
    <div id="wrapper">
    <header role="banner">
        <a href="index.html"><h1>Surfside Golf and Beach Resort</h1></a>
        <h2>850-294-7611<br>1-800-489-SURF(7873)</h2>
    </header> 
    <nav role="navigation">
        <h2>Main Navigation</h2>
        <a href="#content" class="disappear" title="Skip to Content">Skip to Content</a>
        <ul class="topnav" id="myTopnav">
                <li class="icon">
                <a href="javascript:void(0);" onclick="navResponsive()">☰</a>
                </li>
                <li>
                    <a href="../index.html" title="Surfside Golf and Beach Resort">Home</a>
                </li>
                <li class="dropdown">
                    <a href="../makeReservation.html" title="Accommodations">Accommodations</a>
                </li>
                <li class="dropdown">
                    <a href="#" title="Golf">Golf</a>
                </li>
                <li class="dropdown">
                    <a href="#" title="Weddings">Weddings</a>
                </li>
                <li class="dropdown">
                    <a href="#" title="Things to Do">Things to do</a>    
                <li>
                    <a href="https://twitter.com/?lang=en" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="https://www.facebook.com/" title="Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="https://www.youtube.com/" title="YouTube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="tel:1-800-489-7873" title="Call Surfside"><i class="fa fa-phone fa-rotate-270" aria-hidden="true"></i></a>
                </li>
            </ul>
            <script src="../scripts/navigation.js"></script>
    </nav>
    <section class="slideshow" onload="carousel" role="region">
        <h2>Image Gallery</h2>    
        <img class="mySlides" src="../images/condoBeachView.png" alt="View of the beach from Gulfwinds Condos" title="Gulfwinds Beach View ">
        <img class="mySlides" src="../images/condoResortView.png" alt="View of the resort from one of our condos" title="Condo Resort View">
        <img class="mySlides" src="../images/condoPool.png" alt="One of our many pools available to guests" title="Condo Resort Pool">
        <img class="mySlides" src="../images/condoInterior.png" alt="The interior of one of our condos" title="Condo Interior">
        <img class="mySlides" src="../images/grandSurfside.png" alt="The Grand Surfside Hotel" title="Grand Surfside Hotel">
        <a class="btnleft" onclick="plusDivs(-1)">❮</a>
        <a class="btnright" onclick="plusDivs(1)">❯</a>
        <script src="../scripts/gallery.js"></script>    
    </section>
    <main id="content" role="main">
        <h2>The Unit is Available</h2>
        <?php
            $location = $unit = $rooms = "";
            $adults = $kids = "" ;
            $arrival= $departure= $promo= $group= "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $location = test($_POST["location"]);
                $unit = test($_POST["numUnit"]);
                
                $adults = test($_POST["numAdults"]);
                $kids = test($_POST["numKids"]);
                $arrival = test($_POST["arrival"]);
                $departure = test($_POST["departure"]);
                $promo = test($_POST["promoCode"]);
                $group = test($_POST["groupCode"]);

            }	

            function test($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            echo "Thank you for considering Surfside Golf and Beach Resort.  The desired selection is available"."<br>";

            echo "Location:  {$location}"."<br>";
            echo "Unit: {$unit}."."<br>";
            echo "Arrival: {$arrival}"."<br>";
            echo "Departure: {$departure}"."<br>";
            echo "Adults: {$adults}"."<br>";
            echo "Kids: {$kids}"."<br>";

        if($promo != ""){
            echo "Promo Code: {$promo}"."<br>";
        }
        if($group != ""){
            echo "Group Code: {$group}"."<br>";
        }

    ?>
    <a href="../makeReservation.html" title="Make A Reservation">Book a Reservation</a>
    <a href="../index.html" title="Surfside Golf and Beach Resort">Go Back</a>
    
    </main>
    <footer role="contentinfo">
            <h2>Surfside Golf and Beach Resort</h2>
            <h3 class="address">2800 Surfside Blvd.<br>Miramar, FL 32541</h3>
            <img src="../images/FooterLogo.png" alt="Surfside Golf and Beach Resort" width="405">
            
            <h3 class="phone">850-294-7611<br>1-800-489-SURF(7873)</h3>
            <ul>
                <li>
                    <a href="#" title="Real Estate">Real Estate</a>
                </li>
                <li>
                    <a href="#" title="Owners">Owner Log In</a>
                </li>
            </ul>
            <p>&copy;Surfside Golf and Beach Resort 2016</p>
            <p class="disclaimer">This site is for educational purposes only. Michael Holmes mholmes5@asu.edu</p>
    </footer>
    </div>        
</body>
    
    
</html>