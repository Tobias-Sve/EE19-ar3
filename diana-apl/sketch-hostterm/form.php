<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hailey-Alice</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/where.css">

</head>

<body>
    <header class="wave">

        <div class="container">
            <div class="center">
                <h1>Hailey-Alice</h1>
                <h2>The young prodigy model</h2>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="./index.html">About me</a></li>
                <li><a href="./html/experiences.html">Portfolio</a></li>
                <li><a class="current-link" href="#">Hire</a></li>
            </ul>
        </nav>
    </header>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="./bilder/arrow_up.png" alt=""></button>
    <script>
        //Get the button:
        mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>
    <div class="background">
        <main>
            <form action="./form.php" method="POST">
                <h2>Request form</h2>
                <div class="grid">
                    <label>Company Name</label>
                    <input type="text" name="company">
                    <label>Reference/Name</label>
                    <input type="text" name="ref-name" required>
                    <label>Telephone</label>
                    <input type="text" name="tele" required>
                    <label>E-mail</label>
                    <input type="email" name="mail" required>
                    <label>Commercial</label>
                    <input type="radio" name="type" value="com">
                    <label>Private</label>
                    <input type="radio" name="type" value="priv">
                    <label>Other</label>
                    <input type="radio" name="type" required value="other">
                    <label>Comments</label>
                    <textarea name="comment" rows="5" required></textarea>
                    <div></div>
                    <input type="submit">
                </div>
            </form>
            <?php
            $company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);
            $ref = filter_input(INPUT_POST, 'ref-name', FILTER_SANITIZE_STRING);
            $tele = filter_input(INPUT_POST, 'tele', FILTER_SANITIZE_STRING);
            $gmail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
            $type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);
            $comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING);

            //var_dump($company, $ref, $tele, $gmail, $type, $comment);

            if ($company == "") {
                $company = "---";
            }

            switch ($type) {
                case 'com':
                    $type = "Commercial";
                    break;
                case 'priv':
                    $type = "Private";
                    break;

                default:
                    $type = "Other";
                    break;
            }

            

            require './PHPMailer/src/PHPMailer.php';
            require './PHPMailer/src/SMTP.php';
            require './PHPMailer/src/Exception.php';

            $mail = new PHPMailer\PHPMailer\PHPMailer(true);
            $mail->IsSMTP();

            $mail->CharSet = "UTF-8";
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPDebug = 0;
            $mail->Port = 465; //465 or 587

            $mail->SMTPSecure = 'ssl';
            $mail->SMTPAuth = true;
            $mail->IsHTML(true);

            // Enable SMTP authentication
            $mail->Username = 'scrap.mail.bingo@gmail.com';                                         // SMTP username
            $mail->Password = 't0%670waQ6*mShzjI5';
            // SMTP password
            $mail->SMTPSecure = 'tls';
            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;
            // TCP port to connect to

            $mail->setFrom('scrap.mail.bingo@gmail.com', "$ref");
            $mail->addAddress('tobias.riiser.games@gmail.com', 'Hailey-Alice');
            // Add a recipient
            //$mail->addAddress('ellen@example.com');               
            // Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //$mail->addAttachment('/var/tmp/file.tar.gz');         
            // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    
            // Optional name
            //$mail->isHTML(true);                                 
            // Set email format to HTML

            $mail->Subject = 'Request form for Hailey-Alice';
            $mail->Body    = "Company = $company<br>
                              Reference name = $ref<br>
                              Telephone number = $tele<br>
                              Gmail = $gmail<br>
                              Type of request = $type<br>
                              Comment = $comment";


            $mail->send();
            ?>
            <article>
                <h2>FAQ</h2>
                <section>
                    <button class="accordion">What type of gigs can I book Hailey-Alice for?</button>
                    <div class="panel">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe ipsa, voluptas consequuntur doloribus illo molestias placeat adipisci corrupti magnam labore.</p>
                    </div>
                </section>
                <section>
                    <button class="accordion">Where do I send the invoice?</button>
                    <div class="panel">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe ipsa, voluptas consequuntur doloribus illo molestias placeat adipisci corrupti magnam labore.</p>
                    </div>
                </section>
                <section>
                    <button class="accordion">Can I cancel my booking request?</button>
                    <div class="panel">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe ipsa, voluptas consequuntur doloribus illo molestias placeat adipisci corrupti magnam labore.</p>
                    </div>
                </section>
                <section>
                    <button class="accordion">Collaborations?</button>
                    <div class="panel">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe ipsa, voluptas consequuntur doloribus illo molestias placeat adipisci corrupti magnam labore.</p>
                    </div>
                </section>
                <script>
                    var acc = document.getElementsByClassName("accordion");
                    var i;

                    for (i = 0; i < acc.length; i++) {
                        acc[i].addEventListener("click", function() {
                            this.classList.toggle("active");
                            var panel = this.nextElementSibling;
                            if (panel.style.maxHeight) {
                                panel.style.maxHeight = null;
                            } else {
                                panel.style.maxHeight = panel.scrollHeight + "px";
                            }
                        });
                    }
                </script>
            </article>
        </main>
        <footer>
            <ul>
                <li><a href="#"><img src="./bilder/Instagram-Icon.png" alt=""></a></li>
                <li><a href="#"><img src="./bilder/Gmail-Icon.png" alt=""></a></li>
                <li><a href="#"><img src="./bilder/Facebook-Icon.png" alt=""></a></li>
            </ul>
        </footer>
    </div>
</body>

</html>