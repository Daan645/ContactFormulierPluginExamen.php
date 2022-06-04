<?php
/**
 * Plugin Name: Contact Formulier
 */


/** in deze functie wordt er in de variabele $content de velden van het contact formulier toegevoegd */
function formulier()
{

    $content .= '<form method="post">
        <div class="form-group">
            <label for="email">First Name:</label>
            <input type="text" class="form-control" id="email" name="first_name">
        </div>
        <div class="form-group">
            <label for="pwd">Last Name :</label>
            <input type="text" class="form-control" id="pwd" name="last_name">
        </div>

        <div class="form-group">
            <label for="pwd">Email :</label>
            <input type="text" class="form-control" id="pwd" name="email">
        </div>

        <div class="form-group">
            <label for="pwd">Mobile No. :</label>
            <input type="text" class="form-control" name="mobile">
        </div>

        <div class="form-group">
            <label for="pwd">Comment :</label>
            <textarea class="form-control" name="comment"></textarea>
        </div>

        <button type="submit" name="BtnSubmit" class="btn btn-default">Submit</button>
    </form>';

    return $content;

}

/** dit is de shortcode die ik moet intypen in wordpress om mijn plugin op een pagina te zetten */

add_shortcode('contact-formulier','formulier');
