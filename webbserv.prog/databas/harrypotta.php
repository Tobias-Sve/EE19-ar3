<?php
include "configdb.php"
/* //Activate error messeges
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL); */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hary Potta</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Alla Potta filmerna</h1>
        <?php
        //2. SQL command
        $sql = "SELECT titel, datum FROM movies WHERE titel LIKE \"%Potter%\"";
        
        //3. Run the command
        $result = $conn->query($sql);
        //Check result of command
        if (!$result) {
            die("Code died");
        } else {
            //echo "<p>Code alived</p>";
            //var_dump($result);
            echo "<table>";
            while ($rad = $result->fetch_assoc()) {
                echo "<p>$rad[datum] $rad[titel]</p>";
            }
            echo "</table>";
        }
        
        ?>
    </div>
</body>
</html>