<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NASA Api</title>
    <link rel="stylesheet" href="../../bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Sök Nasa bilder</h1>
        <form action="index.php" method="POST">
            <label>Ange Datum</label> 
            <input type="date" name="date">
            <button class="btn btn-primary">Sök</button>
        </form>
        <?php
        $date = filter_input(INPUT_POST, 'date');
        //echo $date;
        
        //API key
        $key = "0J9psijfNVWO8gC7iRadAgjWjCqmd9HwZw7WmJgb";

        //API url
        $url = "https://api.nasa.gov/planetary/apod?api_key=$key&date=$date";
        //echo $url;

        //Call the API
        $json = file_get_contents($url);

        //Decode the data
        $data = json_decode($json);

        //Extract the data
        $desc = $data->explanation;
        $image = $data->url;
        $copyRight = $data->copyright;

        if (!$copyRight || !$image || !$desc) {
            echo "<p class=\"alert alert-warning\">We can't predict the future, come back... earlier</p>";
        } else {
            echo 
                "
                    <figure class=\"figure\">
                        <img src=\"$image\" class=\"figure-img img-fluid rounded\">
                        <figurecaption>
                            Photo taken by $copyRight, $date
                        </figurecaption>
                    </figure>
                    <p>$desc</p>
                    <h5> - $copyRight</h5>
                ";
        }
        ?>

    </div>
</body>
</html>