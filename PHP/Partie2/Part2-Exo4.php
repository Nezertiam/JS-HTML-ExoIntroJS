<h1>
    EXERCICE 4
</h1>
<p>
    A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le<br>
    lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel<br>
    onglet et le tableau sera trié par ordre alphabétique de la capitale).<br>
    On admet que l’URL de la page Wikipédia de la capitale adopte la forme :<br>
    <br>
    https://fr.wikipedia.org/wiki/<br>
    <br>
    Le tableau passé en argument sera le suivant :<br>
    <br>
    $capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",<br>
    "USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");<br>
</p>

<h2>Résultat</h2>

<?php

$capitales = array (
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome",
    "Espagne"=>"Madrid"
);

function afficherTableHTML($tab){

    ksort($tab);

    $str = "<div style='display:flex; width:30em;'>"; 
    $str.= "<div style='flex:1; border:1px solid black;'><b>PAYS</b></div>";  
    $str.= "<div style='flex:1; border:1px solid black;'><b>CAPITALE</b></div>"; 
    $str.= "<div style='flex:1; border:1px solid black;'><b>Lien Wiki</b></div>"; 
    $str.= "</div>";

    foreach($tab as $pays => $ville){
        $str.= "<div style='display:flex; width:30em;'>"; // Crée une div pour chaque couple afin de les afficher en ligne
        $str.= "<div style='flex:1; border:1px solid black;'>".mb_strtoupper($pays)."</div>";   // crée une div à gauche pour le Pays
        $str.= "<div style='flex:1; border:1px solid black;'>".$ville."</div>";
        $str.= "<div style='flex:1; border:1px solid black;'><a href='https://fr.wikipedia.org/wiki/".wiki($ville)."' target='_blank'>Lien</a></div>";                    // crée une div à droite pour la ville
        $str.= "</div>";    // ferme la div qui regroupe le couple
    }
    
    $str.= "</div>";
    return $str;
}

function wiki($ville){
    switch($ville){
        case "Washington": return $ville."_(district_de_Columbia)"; break;
        default : return $ville;
    }
    
}

echo afficherTableHTML($capitales);