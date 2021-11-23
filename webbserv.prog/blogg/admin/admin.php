<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Min enkla blogg</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/minty/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="kontainer">
        <header>
            <h1>Among us</h1>
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link" href="../index.php">Alla inlägg</a></li>
                    <li class="nav-item"><a class="active nav-link" href="#">Skriva inlägg</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <form action="./spara.php" method="POST">
                <label for="rubrik">Rubrik</label>
                <input type="text" id="rubrik" name="rubrik" required>
                <label for="text">Text</label>
                <textarea id="text" name="text" required></textarea>
                <button>Skicka</button>
            </form>
        </main>
        <footer>
            Hösten 2021(sussy)
        </footer>
    </div>
</body>
</html>