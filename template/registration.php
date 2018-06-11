

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
            <h2>Registration for Events</h2>
            <p>Here is the list of events, times, and cost for each event. Only one event can be chosen for each day. Use the form at the end to register for your events. </p>
        </section>
        <section>    
          <table>
              <tr>
                  <th>Event</th>
                  <th>Time</th>
                  <th>Cost</th>
                  <th>Day</th>
              </tr>
              <tr>
                  <td>Long Course Triathlon</td>
                  <td>7:00 AM</td>
                  <td>$240</td>
                  <td>Saturday</td>
              </tr> 
              <tr>
                  <td>10K</td>
                  <td>7:15 AM</td>
                  <td>$50</td>
                  <td>Saturday</td>
                  </tr>
              <tr>
                  <td>Half Marathon</td>
                  <td>7:15 AM</td>
                  <td>$75</td>
                  <td>Saturday</td>
              </tr>
               <tr>
                  <td>Olympic</td>
                  <td>7:30 AM</td>
                  <td>$110</td>
                  <td>Saturday</td>
              </tr>
              <tr>
                  <td>Sprint Triathlon</td>
                  <td>8:00 AM</td>
                  <td>$90</td>
                  <td>Sunday</td>
              </tr>
              <tr>
                  <td>Try-a-Tri</td>
                  <td>8:20 AM</td>
                  <td>$65</td>
                  <td>Sunday</td>
              </tr>
              <tr>
                  <td>Splash and Dash</td>
                  <td>12:00 PM</td>
                  <td>$90</td>
                  <td>Sunday</td>
              </tr>
          </table>
        </section>
        <section>
            <h5>COST INCLUDES:</h5><br>
            <ul style="list-style-type:square">
              <li>Food & Beer</li>
              <li>Access to the weekend’s live entertainment & Fitness Expo</li>
              <li>Commemorative Finisher medal</li>
              <li>Accurate Chip Timing for competitive races</li>
              <li>Ace in the Hole MultiSport Weekend Tech Shirt</li>
              <li>Post-event party & entertainment</li>  
            </ul><br>  
            <h5>PACKET PICK UP</h5>
            <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up. </p>
            <p>*NOTE: Tech shirts guaranteed to pre-registered participants only.</p>
        </section>
        <section>
            <h3>Register</h3>
            <div class="container">
                <form action="includes/registration_process.php" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label for="rname">Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="name" name="name" placeholder="Your name..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="re-mail">E-mail</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="email" name="email" placeholder="Your e-mail..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">    
                            <label for="raffiliation">Affiliation</label>
                        </div>
                        <div class="col-75">
                            <select id="affiliation" name="affiliation">
                                <option value="athlete">Athlete</option>
                                <option value="volunteer">Volunteer</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="rsex">Gender Identification</label>
                        </div>
                         <div class="col-75">
                            <select id="sex" name="sex">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="non-binary">Non-binary</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="sevents">Saturday Events(select only one)</label>
                        </div>
                        <div class="col-75">
                            <select id="saturday" name="saturday">
                                <option value="ltriathlon">Long Course Triathlon(7:00 AM)</option>
                                <option value="olympic">Olympic Triathlon(7:30 AM)</option>
                                <option value="10k">10K(7:15 AM)</option>
                                <option value="hmarathon">Half Marathon(7:15 AM)</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="suevents">Sunday Events(select only one)</label>
                        </div>
                         <div class="col-75">
                            <select id="sunday" name="sunday">
                                <option value="striathlon">Sprint Triathlon(8:00 AM)</option>
                                <option value="tri">Try-a-Tri(8:20 AM)</option>
                                <option value="dash">Splash n Dash(7:15 AM)</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="rtshirt">T-shirt</label>
                        </div>
                        <div class="col-75">
                            <select id="tshirt" name="tshirt">
                                <option value="xs">XSmall</option>
                                <option value="s">Small</option>
                                <option value="medium">Medium</option>
                                <option value="large">Large</option>
                                <option value="xl">Xlarge</option>
                                <option value="xxl">XXlarge</option>
                                <option value="xxxl">XXXlarge</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="remergency_n">Emergency Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="emergency_n" name="emergency_n" placeholder="Emergency name...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="remergency_p">Emergency Phone Contact</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="emergency_p" name="emergency_p" placeholder="Phone number..">
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