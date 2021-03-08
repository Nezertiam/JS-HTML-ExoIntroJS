<h1>
    EXERCICE 2
</h1>
<p>
    Soit le tableau suivant : <br>
    <br>
    $capitales = array<br>
    ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");<br>
    <br>
    Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays<br>
    s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une<br>
    fonction personnalisée.<br>
    Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);<br>
</p>

<h2>Résultat</h2>

<?php
    $capitales = array(
        "France"=>"Paris",
        "Allemagne"=>"Berlin",
        "USA"=>"Washington",
        "Italie"=>"Rome"
    );

    function afficherTableHTML($tab){
        ksort($tab);

        $str = "<div style='width:30em'>";
        $str.= "<div style='display:flex; width:100%;'>"; 
        $str.= "<div style='flex:1; border:1px solid black;'><b>PAYS</b></div>";  
        $str.= "<div style='flex:1; border:1px solid black;'><b>CAPITALE</b></div>";                 
        $str.= "</div>";

        foreach($tab as $pays => $ville){
            $str.= "<div style='display:flex; width:100%;'>"; // Crée une div pour chaque couple afin de les afficher en ligne
            $str.= "<div style='flex:1; border:1px solid black;'>".mb_strtoupper($pays)."</div>";   // crée une div à gauche pour le Pays
            $str.= "<div style='flex:1; border:1px solid black;'>".$ville."</div>";                 // crée une div à droite pour la ville
            $str.= "</div>";    // ferme la div qui regroupe le couple
        }
        $str.= "</div>";
        return $str;
    }

    echo afficherTableHTML($capitales);