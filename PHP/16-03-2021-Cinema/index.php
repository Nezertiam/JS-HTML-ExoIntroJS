<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema PHP</title>
</head>
<body>
    <style>
        *{
           font-family: Verdana, Geneva, Tahoma, sans-serif; 
        }
        h3{
            margin-bottom: 0;
        }
        div{
            padding-bottom: 2em;
        }
        #wrapper{
            max-width: 1128px;
            margin: auto;
        }
    </style>

    <section id="wrapper">
    <?php

        spl_autoload_register(function ($class) {
            require  "class/".$class.".php";
        });

        // Instanciation des genres
        $sf = new Genre("Science-Fiction");
        $espionnage = new Genre("Espionnage");

        echo "---------- TEST UNITAIRES --------------<br><br>";

        // On instancie en premier les réalisateurs et les acteurs (préfixe rea- et act- des variables)
        // car ces objets ne nécessitent pas d'autres objets pour être instanciés.
        $reaNeillBlomkamp = new Realisateur("Neill", "Blomkamp", "Homme", "1979-09-17");
        $reaMartinCampbell = new Realisateur("Martin", "Campbell", "Homme", "1943-10-24");
        $reaSamMendes = new Realisateur("Sam", "Mendes", "Homme", "1965-08-01");
        echo $reaNeillBlomkamp->afficherFilms();

        $actMattDamon = new Acteur("Matt", "Damon", "Homme", "1970-10-08");
        $actJodieFoster = new Acteur("Jodie", "Foster", "Femme", "1962-11-19");
        $actSharltoCopley = new Acteur("Sharlto", "Copley", "Homme", "1973-11-27");
        $actHughJackman = new Acteur("Hugh", "Jackman", "Homme", "1968-10-12");
        $actPierceBrosnan = new Acteur("Pierce", "Brosnan", "Homme", "1953-05-16");
        $actDanielCraig = new Acteur("Daniel", "Craig", "Homme", "1968-03-02");


        // On instancie ensuite les films (préfixe film-) car ces derniers ont besoin d'un réalisateur déjà instancié.
        $filmElysium = new Film("Elysium", "2013", "105", $reaNeillBlomkamp, $sf);
        $filmChappie = new Film("Chappie", "2015", "120", $reaNeillBlomkamp, $sf);
        $filmGoldenEye = new Film("Golden Eye", "1995", "130", $reaMartinCampbell, $espionnage);
        $film007Spectre = new Film("007 Spectre", "2015", "150", $reaSamMendes, $espionnage);
        echo $reaNeillBlomkamp->afficherFilms();
        echo $filmElysium->afficherCasting();
        echo "---------------------------------------------";

        // On instancie les personnages (préfixe personnage-) qui lui sont relatifs
        $personnageMaxDaCosta = new Personnage("Max", "Da Costa");
        $personnageSecretaireDelacourt = new Personnage("La secrétaire", "Delacourt");
        $personnageAgentKruger = new Personnage("L'Agent", "Kruger");
        $personnageVincent = new Personnage("Vincent", "");
        $personnageChappie = new Personnage("Chappie", "");
        $personnageJamesBond = new Personnage("James", "Bond");

        // On instancie à la fin les Roles qui permettent de mettre en ralations un Acteur et un Personnage
        // mais aussi dans quel Film se trouve ce role bien précis.
        $roleElysiumMattMax = new Role($filmElysium, $actMattDamon, $personnageMaxDaCosta);
        $roleElysiumDelacourt = new Role($filmElysium, $actJodieFoster, $personnageSecretaireDelacourt);
        $roleElysiumKruger = new Role($filmElysium, $actSharltoCopley, $personnageAgentKruger);
        $roleChappieVincent = new Role($filmChappie, $actHughJackman, $personnageAgentKruger);
        $roleChappieChappie = new Role($filmChappie, $actSharltoCopley, $personnageChappie);
        $roleGoldenEyeJamesBond = new Role($filmGoldenEye, $actPierceBrosnan, $personnageJamesBond);
        $role007SpectreJamesBond = new Role($film007Spectre, $actDanielCraig, $personnageJamesBond);

        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "---------- TEST PRODUITS FINIS --------------<br><br>";
        
        echo $filmElysium->afficherCasting();
        echo $filmChappie->afficherCasting();
        echo $personnageChappie->afficherActeurs();
        echo $personnageJamesBond->afficherActeurs();
        echo $sf->afficherParGenre();
        echo $espionnage->afficherParGenre();
        echo $actSharltoCopley->afficherFilms();
    ?>

    </section>

</body>
</html>





