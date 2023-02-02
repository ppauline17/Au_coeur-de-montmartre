<?php require_once("_header.php");?>
<div class="space"></div>
<h2>Contact</h2>
<div class="container body flex brun coordonnees">
    <div class="adress flex">
        <div>
            <h3>Adresse :</h3>
            <p>123, rue de Montmartre</p>
            <p>75 018 PARIS</p>
        </div>
        <div>
            <h3>Téléphone :</h3>
            <p>06 00 00 00 00</p>
        </div>
        <div>
        <h3>Email :</h3>
        <p class="mail">bonjour@montmartre.fr</p>
        </div>
        <div>
        <p>Nous vous invitons à completer le formulaire de contact.</p>
        <p>Nous répondons par mail sous 24h.</p>
        </div>
    </div>
    <form>
        <h3>Nous contacter :</h3>
        <p>Votre nom :</p>
        <input class="contact" type="text" name="Nom" placeholder="Nom">
        <p>Votre prénom :</p>
        <input class="contact" type="text" name="Prénom" placeholder="Prénom">
        <p>Votre Email :</p>
        <input class="contact" type="text" name="Email" placeholder="Email">
        <p>Votre message :</p>
        <textarea class="message" placeholder="Votre message"></textarea>
        <p><button type="button">Envoyer</button></p>
    </form> 
</div>
<?php require_once("_footer.php");?>