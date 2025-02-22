<?php
    $tab = array('fr' => 'Création ticket', 'en' => 'Ticket creation');

    include "header.php";
    if (!isset($_SESSION['login'])){
        header('Location: connection.php');
    }
    else if ($_SESSION['role'] != 'user'){
        header('Location: index.php');
    }

    $infoTop = array('fr' => 'Créer un ticket', 'en' => 'Create a ticket');

    echo '<main>
        <div id="part_top">
            <h2>'.$infoTop[$lang].'</h2>
        </div>';

    if (isset($_GET["error"])){
        $error_fr = array ('Le libellé ne doit pas être vide !', 'La description ne doit pas être vide !', 'Le libellé ne doit pas dépasser 30 caractères !', 'La description ne doit pas dépasser 65535 caractères !', 'Votre ticket n\'a pas pu être créé');
        $error_en = array ('The title must not be empty !', 'The description must not be empty !', 'The label must not exceed 30 characters !', 'The description must not exceed 65535 characters !', 'Your ticket could not have been created');
        $error = array('fr' => $error_fr, 'en' => $error_en);

        switch ($_GET['error']){
            case "e0":
                echo '<div class="error"><p>'.$error[$lang][0].'</p></div>';
                break;
            case "e1":
                echo '<div class="error"><p>'.$error[$lang][1].'</p></div>';
                break;
            case "e2":
                echo '<div class="error"><p>'.$error[$lang][2].'</p></div>';
                break;
            case "e3":
                echo '<div class="error"><p>'.$error[$lang][3].'</p></div>';
                break;
            case "e4":
                echo '<div class="error"><p>'.$error[$lang][4].'</p></div>';
                break;
        }
    }

    $formValue_fr = array('Libellé', 'Salle', 'Niveau d\'urgence estimé', 'Description', 'Effacer', 'Valider', 'Autre');
    $formValue_en = array('Title', 'Room', 'Estimated emergency level', 'Description', 'Reset', 'Submit', 'Other');
    $formValue = array('fr' => $formValue_fr, 'en' => $formValue_en);

    $placeholder_fr = array('Max&nbsp;30&nbsp;caractères', 'Décrivez&nbsp;précisémment&nbsp;votre&nbsp;problème&nbsp;ici');
    $placeholder_en = array('Max&nbsp;30&nbsp;characters', 'Describe&nbsp;your&nbsp;problem&nbsp;here');
    $placeholder = array('fr' => $placeholder_fr, 'en' => $placeholder_en);

    $toolTipText_fr = array('1 : Peu important', '4 : Très urgent');
    $toolTipText_en = array('1 : Not very important', '4 : Very important');
    $toolTipText = array('fr' => $toolTipText_fr, 'en' => $toolTipText_en);

    $mysqli = new mysqli($GLOBALS['db_host'], $GLOBALS['db_user'], $GLOBALS['db_passwd'], $GLOBALS['db_name']) or die ("Impossible de se connecter à la base de données");
    $stmt = $mysqli->prepare("SELECT DISTINCT room FROM Rooms");

    $stmt->execute();
    $stmt->bind_result($room);
    $rooms = array();

    while ($stmt->fetch()){
        $rooms[] = $room;
    }

    $stmt->close();
    $mysqli->close();

    echo '<form action="create_ticket.php" method="post" id="ticket_form">
        <div id="ticket_creation">
            <div id="ticket_label">
                <label for="libelle">'.$formValue[$lang][0].'&nbsp;:&nbsp;</label>
                <br>
                <label for="salle">'.$formValue[$lang][1].'&nbsp;:&nbsp;</label>
                <br>
                <label for="niveauUrgence" id="niveauUrgenceCreateTicket">'.$formValue[$lang][2].'&nbsp;:&nbsp;</label>
                <br>
                <label for="descriptionPrbl">'.$formValue[$lang][3].'&nbsp;:&nbsp;</label>
                <br>
            </div>
            <div id="ticket_input">
                <input type="text" id="libelle" name="libelle" placeholder='.$placeholder[$lang][0].'>
                <br>
                <select id="salle" name="choix">';
                        echo '<option value="other">'.$formValue[$lang][6].'</option>';
                        foreach($rooms as $salle){
                            if ($salle != 'other')
                                echo '<option value="'.htmlentities($salle).'">'.htmlentities($salle).'</option>';
                        }
                echo '</select>
                <br>
                <div id="tooltip">
                    <input type="number" id="niveauUrgence" name="niveauUrgence" max="4" min="1" value="1"/>
                    <span id="tooltiptext">'.$toolTipText[$lang][0].'<br>'.$toolTipText[$lang][1].'</span>
                </div>
                <br>
                <textarea id="descriptionPrbl" name="descriptionPrbl" rows="5" cols="33" placeholder='.$placeholder[$lang][1].'></textarea>
                <br>
            </div>
        </div>
        <div id="ticket_buttons">
            <input type="reset" id="ticket_reset" value='.$formValue[$lang][4].'>
            <input type="submit" id="ticket_sub" value='.$formValue[$lang][5].' name="create_ticket">
        </div>
    </form>
</main>';
    include "footer.php";
?>
</body>
</html>
