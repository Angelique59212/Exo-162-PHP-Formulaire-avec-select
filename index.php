<?php

if (isset($_POST['civility'])  && isset($_POST['name']) && isset($_POST['firstName'])) {
    echo trim(strip_tags($_POST['civility'])) . " " . trim(strip_tags($_POST['name'])) . " " . trim(strip_tags($_POST['firstName'])) . "<br>";

    if (isset($_FILES['file'])) {
        $file = $_FILES['file'] ['name'];
        $infos = pathinfo($file); // extension authorized?
        $extension_authorized = array('pdf');
        if (in_array($infos, $extension_authorized)) {
            echo "le fichier est bien un pdf";
        }
        else {
            echo "Le fichier n'est pas un pdf";
        }
    }
}

else {?>
    <form action="index.php" method="post" enctype="multipart/form-data">
    <select name="civility" id="civility">
        <option value="man">Mr</option>
        <option value="woman">Mme</option>
    </select>

    <label for="name">Nom</label>
    <input type="text" id="name" name="name" minlength="5" maxlength="20" required>

    <label for="firstName">Prénom</label>
    <input type="text" id="firstName" name="firstName" minlength="5" maxlength="20" required>

    <label for="file">Fichier</label>
    <input type="file" name="file" id="file">

    <input type="submit" name="submit" value="Envoyer">
</form><?php
}?>




