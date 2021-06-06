<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$username = $_SESSION['user'];

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$base_url = explode("http://localhost/CS4640_project/home.php",$url)[0];

$dropdown_countries = '';

foreach($_SESSION['countries'] as $country){
    
    $country_link = $base_url . "?country=" . str_replace(" ","%20",$country);
    $dropdown_countries .= "<a class=\"dropdown-item\" href=\"$country_link\">$country</a>";
}
echo <<<EOT
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="profile.php">$username</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Countries
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            $dropdown_countries
          </div>
        </li>
        <li class="nav-item active">
          <a href="logout.php" class="nav-link">Logout</a>
        </li>
      </ul>

    </div>
  </nav>
  <br><br><br>
  EOT;


?>
