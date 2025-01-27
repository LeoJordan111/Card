<?php
include_once("header.php");
include_once("./assets/images/data.php");
?>


<form action="traitement.php" method="post">
    <div>
        <label for="text">Nom :</label>
        <input type="text" name="name"><br><br>
        <label for="email">Email :</label>
        <input type="email" name="email">
    </div>
    <br><br>
    <p>
        <label for="ask">Quel est l'objet de votre demande ?</label><br>
        <select name="ask" id="ask">
            <option value="problem">Vous souhaitez remonter un problème.</option>
            <option value="info">Vous avez une question.</option>
            <option value="other">Autre</option>
        </select>
    </p>
    <div>
        <label for="message">Votre message</label>
        <textarea placeholder="Exprimez vous" name="message"></textarea>
    </div>
    <br><br>
    <button type="submit">Envoyer</button>
</form>
<br><br>




<a href="./index.php" target="_blank">Retour page d'acceuil</a>

<?php
include_once("footer.php");
?>