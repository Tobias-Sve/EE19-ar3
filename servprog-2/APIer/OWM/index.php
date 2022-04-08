<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Weather Map</title>
    <link rel="stylesheet" href="../../bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Today's Weather</h1>
        <h5>Brought to you by OWM</h5>
        <?php
        //API key
        $key = "22ee1d58f7adae08ee71fa7c0bd24481";

        //Chosen city
        $city = "stockholm";

        //Get the API adress
        $url = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$key&units=metric";
        //echo "<p>$url</p>";

        //Call the API
        $json = file_get_contents($url);

        //Decode the data
        $data = json_decode($json);

        //Find the data
        $coord = $data->coord;
        $main = $data->main;
        $wind = $data->wind;
        $weather = $data->weather;

        //Write out coord components
        $lon = $coord->lon;
        $lat = $coord->lat;

        //Write out main components
        $temp = $main->temp;
        $temp = round($temp, PHP_ROUND_HALF_UP);

        //Write out wind speed
        $speed = $wind->speed;
        $wDir = $wind->deg;        
        
        //Write out weather components
        $desc = $weather[0]->description;
        $icon = $weather[0]->icon;
        $desc = ucfirst($desc);

        //Translate wind degrees to compass directions
        if (($wDir >= 327 && $wDir <= 34)) {
            $wDir = "North";
        } else if (($wDir >= 35 && $wDir <= 56)) {
            $wDir = "Northeast";
        } else if (($wDir >= 57 && $wDir <= 124)) {
            $wDir = "East";
        } else if (($wDir >= 125 && $wDir <= 146)) {
            $wDir = "Southheast";
        } else if (($wDir >= 147 && $wDir <= 214)) {
            $wDir = "South";
        } else if (($wDir >= 215 && $wDir <= 236)) {
            $wDir = "Southwest";
        } else if (($wDir >= 237 && $wDir <= 304)) {
            $wDir = "West";
        } else if (($wDir >= 305 && $wDir <= 326)) {
            $wDir = "Northwest";
        } else {
            $wDir = "Something is not adding up";
            var_dump($wDir);
        }
        
        //Echo the data
        echo "<p>Coordinates (lat, lon): $lat, $lon</p>";
        echo "<p>Current description: $desc</p>";
        echo "<p><img src=\"http://openweathermap.org/img/wn/$icon@2x.png\"></p>";
        echo "<p>Current temperature: $temp C</p>";
        echo "<p>Current windspeed: $speed m/s</p>";
        echo "<p>Current wind direction: $wDir</p>";
        ?>
    </div>
</body>
</html>