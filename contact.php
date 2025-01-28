<?php
include_once("header.php");
include_once("./assets/images/data.php");


if (isset($_GET['status'])) {
    if($_GET['status'] === 'not_ok'){
        echo "<p>vous n'avez pas rentré de prénom</p>";
    }}
?>

<!-- action= représente où les information vont aller --> 
<form action="traitement.php" method="post">
    <div>
        <label for="prenom">Nom :</label>
        <input type="text" name="prenom" id="prenom"><br><br>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email">
    </div>
    <br><br>
    <p>
        <label for="ask">Quel est l'objet de votre demande ?</label><br>
        <select name="ask" id="ask">
            <option value="problem">Problème</option>
            <option value="info">Question</option>
            <option value="other">Autre</option>
        </select>
    </p>
    <div>
        <label for="message">Votre message</label>
        <textarea placeholder="Exprimez-vous" name="message"></textarea>
    </div>
    <br><br>
<!-- type=submit déclenche "action" --> 
    <button type="submit">Envoyer</button>
</form>
<br><br>

<a href="./index.php" target="_blank">Retour page d'acceuil</a>

<?php

?>

<?php
include_once("footer.php");
?>