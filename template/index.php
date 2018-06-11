<!DOCTYPE html>

<!--
File Name: index.html
Date: 05/01/2018
Programmer: Brent Klausner
-->

<html lang="en">
<head>           
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=1.0">
    <meta charset="UTF-8">
    <meta name="author" content="Brent Klausner">
    <title>Ace in the Hole</title>
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/generic.css" rel="stylesheet" type="text/css">   
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/grid.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Spectral" rel="stylesheet">
    <link href="https://max.cdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>  
<body>   
    <header>
        <h1>Ace in the Hole</h1>
        <h1>Multisport Events</h1>
    </header>
    
    <nav>
        <div class="toggle">
            <i class="fa fa-bars menu" aria-hidden="true"></i>
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="information.php">Information</a></li>
            <li><a href="registration.php">Registration</a></li>
            <li><a href="contact.php">FAQs/Contact</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>About Us</h2>
            <p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, sexual orientations and cultural backgrounds. We offer events for everybody.</p>  
        </section> 
        <section>
            <h3>About the Event</h3>
            <p>The Annual Ace in the Hole MultiSport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation. There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, half-iron triathlons, 10K and half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>
        </section>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                    <img src="images/triathlon_slide.png" style="width:100%">
                <div class="text">TRIATHLONS</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                    <img src="images/marathon-1.png" style="width:100%">
                <div class="text">MARATHONS</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                    <img src="images/start_finish.jpg" style="width:100%">
                <div class="text">FINISH LINE</div>
            </div>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
    </main>
    <footer>
        <?php include 'includes/footer.php';?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="scripts/script.js"></script>
    <script src="scripts/slideshow.js"></script>
</body>
</html>