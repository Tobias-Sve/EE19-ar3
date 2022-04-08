<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuck Norris Jokes</title>
    <link rel="stylesheet" href="../../bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Today's Chuck Norris joke</h1>
        <?php
        //Adress to the API
        $url = "https://api.chucknorris.io/jokes/random";

        //Call the API
        $json = file_get_contents($url);

        //Decode JSON answer
        $data = json_decode($json);

        //Find the joke and image
        $joke = $data->value;
        $image = $data->icon_url;

        //Echo the joke
        echo "
                <img src=\"$image\" alt=\"Chuck Norris\">
                <p>
                    $joke
                </p>
                ";
        ?>
    </div>
</body>
</html>