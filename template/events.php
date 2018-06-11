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
        <img src="images/events.jpg" alt="Swimmers in a lake">
        <section>
            <h2>Events</h2>
            <p>Below is a list of our different events for Saturday and Sunday. Each athlete will pick one event per day. Note the WATER TEMPERATURE is expected to be between 62 – 66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended.</p>

            <dl>
                <dt>LONG COURSE SWIM</dt><br>
                <dd>1.2mi - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</dd><br>
                <dt>LONG COURSE BIKE</dt><br>
                <dd>58mi - A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you.</dd><br>
                <dt>LONG COURSE RUN</dt><br>
                <dd>13.1mi - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).</dd><br>
                <dt>OLYMPIC SWIM</dt><br>
                <dd>1,500 meters - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</dd><br>
                <dt>OLYMPIC BIKE</dt><br>
                <dd>28mi - A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections. </dd><br>
                <dt>OLYMPIC RUN</dt><br>
                <dd>10K - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).</dd><br>
                <dt>SPRINT</dt><br>
                <dd>Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.</dd><br>
                <dt>TRY-A-TRI</dt><br>
                <dd>This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim), 10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).</dd><br>
                <dt>HALF MARATHON COURSE</dt><br>
                <dd>13.1mi - The event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line festivities, including the Sports and Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified</dd><br>
                <dt>10K COURSE</dt><br>
                <dd>The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, perfectly paved and wind around through the forest. Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.</dd><br>
                <dt>Splash n Dash</dt><br>
                <dd>The Splash n Dash is a perfect event to cool off and have some fun.</dd>
            </dl>                      
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
    </main>
    <footer>
        <?php include 'includes/footer.php';?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="scripts/script.js"></script>
</body>
</html>