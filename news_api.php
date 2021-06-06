<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$query = str_replace(' ','%20',($current_country . "%20" . $market_sector));

$json_res  = json_decode(file_get_contents("https://newsapi.org/v2/everything?q=$query&sortBy=popularity&apiKey=2514fcdc3dab403d89bb1a501cc97737"),true);

$first_three_articles = array($json_res['articles'][0],$json_res['articles'][1],$json_res['articles'][2]);

$title_0 = $first_three_articles[0]['title'];
$title_1 = $first_three_articles[1]['title'];
$title_2 = $first_three_articles[2]['title'];


$description_0 = $first_three_articles[0]['description'];
$description_1 = $first_three_articles[1]['description'];
$description_2 = $first_three_articles[2]['description'];

$url_0 = $first_three_articles[0]['url'];
$url_1 = $first_three_articles[1]['url'];
$url_2 = $first_three_articles[2]['url'];


$card_header = $current_country . " " . $market_sector;
echo "<h2>$card_header</h2>";
echo <<<EOT
    <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">$title_0</h5>
            <p class="card-text">$description_0</p>
            <a href="$url_0" class="btn btn-primary" target="_blank">Link</a>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">$title_1</h5>
            <p class="card-text">$description_1</p>
            <a href="$url_1" class="btn btn-primary" target="_blank">Link</a>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">$title_2</h5>
            <p class="card-text">$description_2</p>
            <a href="$url_2" class="btn btn-primary" target="_blank">Link</a>
          </div>
        </div>
      </div>
    </div>
    </div>
    EOT;
?>
