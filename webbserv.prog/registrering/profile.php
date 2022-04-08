<?php
include "config.php";
session_start();

//If there is no session, log out
if (!isset($_SESSION['inloggad'])) {
    $_SESSION['inloggad'] = false;
}
if ($_SESSION['inloggad'] == false) {

    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrera</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if (isset($_SESSION['inloggad']) && $_SESSION['inloggad'] == true) {
        echo "<p class=\"alert alert-success\">Du är inloggad!";
    } else {
        echo "<p class=\"alert alert-warning\">Du är utloggad!";
    }
    ?>
    <div class="kontainer">
        <h1>Bloggen</h1>
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>

            </ul>
        </nav>
        <main>
            <h3>Alla registrerade användare:</h3>
            <?php
            //Lista alla användare
            //1. Get the sql command
            $sql = "SELECT * FROM Register";

            //2. Run the sql command
            $resultat = $conn->query($sql);

            //3. Check the connection
            if (!$resultat) {
                die("<p class=\"alert alert-danger\">You died because SQL</p>");
            } else {
                //4. Get the table of registered users
                echo "<table class=\"table table-striped table-light\">";
                echo "<thead>
                        <tr>
                            <th>id</th>
                            <th>Namn</th>
                            <th>Email</th>
                        </tr>
                    </thead>";
                echo "<tbody>";
                while ($rad = $resultat->fetch_assoc()) {
                    echo "<tr>
                            <td>$rad[id].</td>
                            <td>$rad[Namn]</td>
                            <td>$rad[Email]</td>
                        </tr>";
                }
                echo "</tbody>";
                echo "</table>";
            }
            ?>
        </main>
    </div>
</body>
</html>