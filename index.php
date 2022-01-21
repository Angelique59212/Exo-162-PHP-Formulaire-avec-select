<form action="index.php" method="post">
    <select name="civility" id="civility">
        <option value="man">Mr</option>
        <option value="woman">Mme</option>
    </select>

    <label for="name">Nom</label>
    <input type="text" id="name" name="name" minlength="5" maxlength="20" required>

    <label for="firstName">Prénom</label>
    <input type="text" id="firstName" name="firstName" minlength="5" maxlength="20" required>

    <input type="submit" name="submit" value="Envoyer">
</form>


