<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iTunes API</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../bootstrap.min.css">
</head>
<body>
    <div class="kontainer">
        <h1>Search on iTunes</h1>
        <form action="#" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Artist name" name="search" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" id="button-addon2">Search</button>
            </div>

        </form>
        <?php
        //Get the search term
        $search = filter_input(INPUT_POST, "search", FILTER_SANITIZE_STRING);

        //Check if the input has anything in it
        if (!$search) {
            echo "<p class=\"alert alert-warning\">Please enter a search term</p>";
        } else {
            //Replace spaces with + sign
            $cst = str_replace(' ', '+', $search);

            //Search for 5 songs
            $cst2 = $cst . "&entity=song&limit=5";

            //Get the URL
            $url = "https://itunes.apple.com/search?term=$cst2";
            echo $url;

            //Get the JSON file
            $json = file_get_contents($url);

            //Decode the data
            $data = json_decode($json);

            //Extract the results
            $results = $data->resultCount;

            if ($results == "0") {
                echo "<p class=\"alert alert-warning\">Can't find an artist with that name</p>";
            } else {
                //Make a table with the songs
                echo "<h3>Top 5 songs by $search</h3>";
                echo "<table class=\"table table-light\">
                <tr>
                    <th>#</th>
                    <th>Artist</th>
                    <th>Album</th>
                    <th>Track</th>
                    <th>Artwork</th>
                </tr>";
                $id = 1;
                for ($i = 0; $i < $results; $i++) {
                    $track = $data->results[$i]->trackName;
                    $artist = $data->results[$i]->artistName;
                    $album = $data->results[$i]->collectionName;
                    $image = $data->results[$i]->artworkUrl100;
                    echo "
                        <tr>
                            <td>$id</td>
                            <td>$artist</td>
                            <td>$album</td>
                            <td>$track</td>
                            <td><img src=\"$image\"></td>
                        </tr>";
                    $id += 1;
                }
                echo "</table>";
            }
        }
        ?>

    </div>
</body>
</html>