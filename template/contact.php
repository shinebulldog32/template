

<!doctype html>
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
            <h2>FAQs</h2>
            <h4>What are the rules?</h4><br>
            <p>We currently adhere to the USAT Rules for Triathlon & Duathlon. Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike for obvious safety reasons.</p><br>
            <h4>Can I use a personal music device while cycling?</h4><br>
            <p>Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</p><br>
            <h4>Can I use a personal music device while running?</h4><br>
            <p>During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.</p>
            <p>If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice…music or awards/points/rankings. If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we don’t want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.</p><br>
            <p>We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</p><br>
            <h4>Do I need to wear a wetsuit?</h4><br>
            <p>No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor.</p><br> 
            <h4>Do I have to use a road or racing bike?</h4><br>  
            <p>No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.</p>
        </section>
        <section>
            <h3>Contact Us</h3>
            <div class="container">
                <form action="includes/contact_process.php" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label for="cname">Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="name" name="name" placeholder="Your name..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="ce-mail">E-mail</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="email" name="email" placeholder="Your e-mail..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">   
                            <label for="affiliation">Affiliation</label>
                        </div>
                        <div class="col-75">
                            <select id="affiliation" name="affiliation">
                                <option value="athlete">Athlete</option>
                                <option value="volunteer">Volunteer</option>
                                <option value="interested">Interested Party</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">    
                            <label for="comment">Comment</label>
                        </div>
                        <div class="col-75">
                            <textarea id="comment" name="comment" placeholder="Comment here.." style="height:200px"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <?php include 'includes/footer.php';?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="scripts/script.js"></script>
</body>
</html>