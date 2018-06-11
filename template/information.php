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
            <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-font="Roboto Slab" data-theme="dark" >PORTLAND WEATHER</a>  
        </section> 
        <section>
            <h2>What to Bring</h2>
            <p>Watch the weather closely.  The show goes on no matter what the weather is doing. You must wear your chip timing piece during the entire event.  You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.</p>
            <dl>
                <dt>SWIM</dt><br>
                <dd>Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries. We will provide you with a swim cap but you will want to bring your own goggles.</dd><br>
                <dt>BIKE</dt><br>
                <dd>A biking helmet is mandatory. You will also receive 2 stickers in your package with your race number on them. The small sticker should go on the front of your helmet. The bigger sticker will wrap around your bike frame. Road or mountain bikes are acceptable. For safety reasons, be sure to have end-caps on the end of your handle-bars.</dd><br>
                <dt>RUN</dt><br>
                <dd>You must finish the race with your bib number on the front of you. Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don’t have to worry about it. Others pin it on a singlet that they put on once they finish the swim before they head out for the bike. Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run. Use whatever option feels best for you.</dd>
            </dl>
            <p>*Remember to bring a change of clothing so you can enjoy the post-event festivities.</p>
        </section>
        <section>
                <h2>Stay up to Date</h2>
                <h4>Facebook</h4><br>
                <center><div class="fb-page" data-href="https://www.facebook.com/cas222cascade/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cas222cascade/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cas222cascade/">CAS 222</a></blockquote></div></center><br>
                <h4>Twitter</h4><br>
                <center><a class="twitter-timeline" data-width="350" data-height="500" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></center><br>
        </section>
    </main>
    <footer>
        <?php include 'includes/footer.php';?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="scripts/script.js"></script>
    <script src="scripts/weather.js"></script>
    <script src="scripts/facebook.js"></script>
</body>
</html>