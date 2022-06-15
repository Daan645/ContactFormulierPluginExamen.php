<?php
/**
 * Plugin Name: Contact Formulier
 */


/** in deze functie wordt er in de variabele $content de velden van het contact formulier toegevoegd */
function formulier()
{

    $content .= '<form method="post">
        <div class="form-group">
            <label for="email">Voornaam :</label>
            <input type="text" class="form-control" id="email" name="first_name" maxlength="15" required>
        </div>
        <div class="form-group">
            <label for="pwd">Achternaam :</label>
            <input type="text" class="form-control" id="pwd" name="last_name" maxlength="30" required>
        </div>

        <div class="form-group">
            <label for="pwd">Email :</label>
            <input type="text" class="form-control" id="pwd" name="email" maxlength="30" required>
        </div>

        <div class="form-group">
            <label for="pwd">Mobile No. :</label>
            <input placeholder="maximaal 15 tekens" type="text" class="form-control" name="mobile" maxlength="15" required>
        </div>

        <div class="form-group">
            <label for="pwd">Comment :</label>
            <textarea placeholder="onderwerp vraag of korte omschrijving" class="form-control" name="Vraag" maxlength="50" required></textarea>
        </div>

        <button type="submit" name="BtnSubmit" class="btn btn-default">Verzenden</button>
    </form>';

    return $content;

}

/** dit is de shortcode die ik moet intypen in wordpress om mijn plugin op een pagina te zetten */

add_shortcode('contact-formulier','formulier');
