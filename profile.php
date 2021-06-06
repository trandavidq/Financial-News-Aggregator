<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/profile.css">
    <title>{Username}'s profile</title>
</head>
<body>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start(); 
?>

    <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="profile.html"><?php echo $_SESSION['user'];?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="home.html">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Countries
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">United States</a>
                        <a class="dropdown-item" href="#">Japan</a>
                        <a class="dropdown-item" href="#">China</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a href="login.html" class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <br><br>

    <h1 id="username"><?php echo $_SESSION['user'];?></h1>
    <!--Country preferences-->
    <div id="input_form">
        <form action="" id="market_preferences" action = "<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <div class="form_seperator">
                <h2>Country preferences</h2>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="China" id="flexCheckDefault" name="country_list[]">
                    <label class="form-check-label" for="flexCheckDefault">China</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Japan" id="flexCheckDefault" name="country_list[]">
                    <label class="form-check-label" for="flexCheckDefault">Japan</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="US" id="flexCheckDefault" name="country_list[]">
                    <label class="form-check-label" for="flexCheckDefault">United States</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Mexico" id="flexCheckDefault" name="country_list[]">
                    <label class="form-check-label" for="flexCheckDefault">Mexico</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="United Kingdom" id="flexCheckDefault" name="country_list[]">
                    <label class="form-check-label" for="flexCheckDefault">United Kingdom</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="France" id="flexCheckDefault" name="country_list[]">
                    <label class="form-check-label" for="flexCheckDefault">France</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Korea" id="flexCheckDefault" name="country_list[]">
                    <label class="form-check-label" for="flexCheckDefault">South Korea</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Malaysia" id="flexCheckDefault" name="country_list[]">
                    <label class="form-check-label" for="flexCheckDefault">Africa</label>
                </div>
            </div>
            <br><br>

        

        <!--Market preferences-->
            <div class="form_seperator">
                <h2>Market preferences</h2>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Equities" id="flexCheckDefault" name="market_list[]">
                    <label class="form-check-label" for="flexCheckDefault">Equities</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Bonds" id="flexCheckDefault" name="market_list[]">
                    <label class="form-check-label" for="flexCheckDefault">Bonds</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Cryptocurrency" id="flexCheckDefault" name="market_list[]">
                    <label class="form-check-label" for="flexCheckDefault">Cryptocurrency</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Foreign Exchange" id="flexCheckDefault" name="market_list[]">
                    <label class="form-check-label" for="flexCheckDefault">Foreign Exchange</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Futures" id="flexCheckDefault" name="market_list[]">
                    <label class="form-check-label" for="flexCheckDefault">Futures</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Commodities" id="flexCheckDefault" name="market_list[]">
                    <label class="form-check-label" for="flexCheckDefault">Commodities</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Money" id="flexCheckDefault" name="market_list[]">
                    <label class="form-check-label" for="flexCheckDefault">Money</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Hybrid" id="flexCheckDefault" name="market_list[]">
                    <label class="form-check-label" for="flexCheckDefault">Hybrid</label>
                </div>
            </div>
            <button type="submit" value="Submit" class="btn btn-primary" id="submit_btn">Submit</button>

        </form>
        <br>
        
    </div>

    <!--This button will submit two forms. Use javascript to submit the two forms by attaching an event handler-->
    
    <p id="success_submit"></p>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="./js/profile.js"></script>

    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $countries = $_POST['country_list'];
        $markets = $_POST['market_list'];
        foreach($countries as $country){
            echo $country . " selected </br>";
        }
        $_SESSION['countries'] = $countries;
        $_SESSION['markets']=$markets;
        echo "<script>setTimeout(\"location.href = 'home.php';\",1500);</script>";
    }
    ?> 

         
    
</body>
</html>