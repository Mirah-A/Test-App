
<!-- Amirah Elgendy - Payment/Subscription PHP Page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="payment.css" title="style" /> 
    <title> Payment </title>
</head>
<body>

    <header>
        <h1></h1>
        <nav>
            <ul>
                <li><a href="homepage.html">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="IS436Login.html">Login</a></li>
            </ul>
        </nav>
    </header>

    <h1> Payment Method: Credit/Debit Card Only </h1> 

    <form method="POST" action="song_collector.php">
    <p class ="directions">
        Cardholder Name: <input type ="text" name ="song" /> <br />
        Composer: <input type ="text" name ="composer" /> <br />
        Famous artist or group: <input type ="text" name ="artist" /> <br />
        <input type="submit" value="Submit"/> <br /> <br />
    </p>

    <p class ="links">
            Click 
            <a href="https://swe.umbc.edu/~aelgend1/is448/1500-aelgend1-hw2/survey_results.php"> here</a>
            to view survey results. 
    </p>
    </form>

    <footer>
        <p>&copy; HNF+  All rights reserved.</p>
    </footer>

</body>
</html>
