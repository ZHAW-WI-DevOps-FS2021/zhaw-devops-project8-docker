<h1>asdf</h1>
<?php

    $user = 'admin';
    $pass = '12345';
    $db = new PDO('mysql:host=127.0.0.1:8143;dbname=somedb', $user, $pass);
    //Fehlermeldungen aktivieren
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Datenbank erstellen
    $sql = "select * from sometable";
    $db ->exec($sql);
    ?>
    </body>
    </html>

?>