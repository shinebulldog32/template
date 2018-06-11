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
            <li><a href="#">Home</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">About</a></li>
            <li><a href="registration.php">Registration</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>Heading</h2>
            <p>paragraph or image Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam placerat nisl eu metus porttitor iaculis. Integer malesuada ante ut nisi pharetra, posuere finibus magna porttitor. Donec bibendum, enim eget bibendum vulputate, lectus ex sodales urna, eu laoreet orci mi id arcu. Vestibulum sed ligula cursus, ultricies enim eu, elementum diam. Vivamus ut nunc eu quam lacinia sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras vitae nibh lectus. Etiam et erat commodo, commodo dolor sit amet, dignissim ex. Interdum et malesuada fames ac ante ipsum primis in faucibus</p>            
        </section> 
        <section>
            <h3>Heading</h3>
            <p>paragraph or image Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam placerat nisl eu metus porttitor iaculis. Integer malesuada ante ut nisi pharetra, posuere finibus magna porttitor. Donec bibendum, enim eget bibendum vulputate, lectus ex sodales urna, eu laoreet orci mi id arcu. Vestibulum sed ligula cursus, ultricies enim eu, elementum diam. Vivamus ut nunc eu quam lacinia sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras vitae nibh lectus. Etiam et erat commodo, commodo dolor sit amet, dignissim ex. Interdum et malesuada fames ac ante ipsum primis in faucibus</p>
        </section>
    </main>
    <div class="footer">
        <?php include 'includes/footer.php';?>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="scripts/script.js"></script>
</body>
</html>