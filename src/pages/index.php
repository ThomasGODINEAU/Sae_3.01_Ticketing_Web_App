<!--
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
<header>
    <div id="top">
        <img src="../resources/logo.png" alt="logo de la plateforme" id="image1">
        <h1>Ticket App</h1>
        <img src="../resources/logo_UVSQ.png" alt="logo de l'UVSQ" id="image2">
    </div>
    <nav>
        <div id="nav1">
            <a href="index.php">Accueil</a>
            <a href="dashboard.php">Tableau de bord</a>
        </div>
        <div id="nav2">
            <a href="profile.php">Profil</a>
            <a href="connection.php">Se connecter</a>
            <a href="index.php">Déconnexion</a>
        </div>
    </nav>
</header>
<main id="main_page">
    <div id="presentation">
        <div id="texte_explicatif">
            <h2>Texte explicatif</h2>
            <p>
                Sed (saepe enim redeo ad Scipionem, cuius omnis sermo erat de amicitia) querebatur, quod omnibus in rebus homines diligentiores essent; capras et oves quot quisque haberet, dicere posse, amicos quot haberet, non posse dicere et in illis quidem parandis adhibere curam, in amicis eligendis neglegentis esse nec habere quasi signa quaedam et notas, quibus eos qui ad amicitias essent idonei, iudicarent. Sunt igitur firmi et stabiles et constantes eligendi; cuius generis est magna penuria. Et iudicare difficile est sane nisi expertum; experiendum autem est in ipsa amicitia. Ita praecurrit amicitia iudicium tollitque experiendi potestatem.
                Sed (saepe enim redeo ad Scipionem, cuius omnis sermo erat de amicitia) querebatur, quod omnibus in rebus homines diligentiores essent; capras et oves quot quisque haberet, dicere posse, amicos quot haberet, non posse dicere et in illis quidem parandis adhibere curam, in amicis eligendis neglegentis esse nec habere quasi signa quaedam et notas, quibus eos qui ad amicitias essent idonei, iudicarent. Sunt igitur firmi et stabiles et constantes eligendi; cuius generis est magna penuria. Et iudicare difficile est sane nisi expertum; experiendum autem est in ipsa amicitia. Ita praecurrit amicitia iudicium tollitque experiendi potestatem.
            </p>
        </div>
        <div id="video_explicative">
            <h2>Vidéo explicative</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?si=QOroqZ7wXyNrZZh8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
    <table id="derniers_tickets">
        <tr>
            <th>Niveau</th>
            <th>Salle</th>
            <th>Problème</th>
            <th>Demandeur</th>
            <th>Date</th>
        </tr>
        <tr>
            <td class="ticket_case_4">4</td>
            <td>G26</td>
            <td>Fuite d'eau sur les machines</td>
            <td>J. Cabessa</td>
            <td>05/10/2023</td>
        </tr>
        <tr>
            <td class="ticket_case_1">1</td>
            <td>315</td>
            <td>Câble projecteur HS</td>
            <td>F. Hoguin</td>
            <td>04/10/2023</td>
        </tr>
        <tr>
            <td class="ticket_case_2">2</td>
            <td>I21</td>
            <td>Multiprise cassée</td>
            <td>D. Auger</td>
            <td>26/09/2023</td>
        </tr>
    </table>
</main>
</body>

-->

<?php
    include "header.php";

    $login = "ticket_app"; # $user = $_SESSION['login']
    $host = "localhost";
    $mdp = "ticket_s301";
    $nom_db = "ticket_app";

    $db = mysqli_connect($host, $login, $mdp) or die("Can't connect to database");

    mysqli_select_db($db, $nom_db) or die("Can't open the database");

?>
<div id="presentation">
    <div id="texte_explicatif">
        <h2>Texte explicatif</h2>
        <p>
            Sed (saepe enim redeo ad Scipionem, cuius omnis sermo erat de amicitia) querebatur, quod omnibus in rebus homines diligentiores essent; capras et oves quot quisque haberet, dicere posse, amicos quot haberet, non posse dicere et in illis quidem parandis adhibere curam, in amicis eligendis neglegentis esse nec habere quasi signa quaedam et notas, quibus eos qui ad amicitias essent idonei, iudicarent. Sunt igitur firmi et stabiles et constantes eligendi; cuius generis est magna penuria. Et iudicare difficile est sane nisi expertum; experiendum autem est in ipsa amicitia. Ita praecurrit amicitia iudicium tollitque experiendi potestatem.
            Sed (saepe enim redeo ad Scipionem, cuius omnis sermo erat de amicitia) querebatur, quod omnibus in rebus homines diligentiores essent; capras et oves quot quisque haberet, dicere posse, amicos quot haberet, non posse dicere et in illis quidem parandis adhibere curam, in amicis eligendis neglegentis esse nec habere quasi signa quaedam et notas, quibus eos qui ad amicitias essent idonei, iudicarent. Sunt igitur firmi et stabiles et constantes eligendi; cuius generis est magna penuria. Et iudicare difficile est sane nisi expertum; experiendum autem est in ipsa amicitia. Ita praecurrit amicitia iudicium tollitque experiendi potestatem.
        </p>
    </div>
    <div id="video_explicative">
        <h2>Vidéo explicative</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?si=QOroqZ7wXyNrZZh8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>
<?php
    echo '
        <table id="derniers_tickets" style="border: 1px solid black">
            <tr>
    ';

    ### Partie pour ajouter les colonnes au tableau ###

    $requete_colonnes = 'SHOW COLUMNS
                         FROM tickets;';

    $colonnes = mysqli_query($db, $requete_colonnes);

    $colonnes_voulues = array('emergency', 'room', 'title', 'user_login', 'creation_date');

    foreach ($colonnes as $colonne){
        if (in_array($colonne['Field'], $colonnes_voulues))
            echo '<th>$colonne</th>';
    }

    echo '</tr>';

    ### Partie pour ajouter les tickets au tableau ###

    $requete_tickets = 'SELECT emergency, room, title, user_login, creation_date
                        FROM tickets
                        WHERE ticket_id > ((SELECT MAX(ticket_id)
                                            FROM tickets)
                                            - 10);';

    $tickets = mysqli_query($db, $requete_tickets);

    while ($elem = mysqli_fetch_array($tickets)){
        echo '
        <tr>
            <td>$elem[0]</td>
            <td>$elem[1]</td>
            <td>$elem[2]</td>
            <td>$elem[3]</td>
            <td>$elem[4]</td>
        </tr>
        ';
    }

    echo '</table>';

    include "footer.php";
?>