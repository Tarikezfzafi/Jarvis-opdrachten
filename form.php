<!DOCTYPE html>
    <head>
        <title>Bit Academy</title>
    </head>
    <body>
        <h1>Bit Academy - Form </h1>
        <form action='form.php' method="post" novalidate>
            <label for='email'>Voer je e-mailadres in:</label>
            <input type='email' id='email' name='email'>
            <input type='submit' value='Meld aan!'>
        </form>
        
        <?php
        if (empty($_POST) == true) {
            exit;
        } else {
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                echo 'je email is geldig ' . $_POST['email'] . ' bedankt';
            } else {
                echo 'LET OP: ' . $_POST['email'] . ' is geen valide email address';
            }
        }
        ?>

    </body>
</html>