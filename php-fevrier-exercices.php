<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP - Sylvain</title>
</head>
<body>
    <?php
    ## SEQUENCE 01
    # Exercice 1
    
    $monAge = 37;
    echo "Mon age est de " .$monAge. "et c'est sans commentaires.";
    
    # Exercice 2
    
    $monProduit = "les compotes";
    echo "Mon produit préféré est " .$monProduit. ", il n'y a pas d'âge pour le manger.";
    
    # Exercice 3
    
    $prix = 50;
    $devise = "$";
    $productPrice = "$prix $devise";
    echo "Le prix d'une reverb Vallhala est de " .$productPrice." .";

    # Exercice 4

    echo "<h2>Bonjour, le monde !</h2>";

    # Exercice 5

    echo "<p>If you don't play metal, you're gonna be a fan ! F**ck them ! Louder ! Louder ! ****</p>";

    # Exercice 6

    echo "<p>Merci d'avoir visité notre site, boomer !</p>";

    # Exercice 7

    $city = "Taipei";
    echo "I dream to visit" .$city. "one day.";

    # Exercice 8

    $dish = "Nam tan";
    echo "Si t'as la dalle," .$dish. "c'est d'la balle !";

    ## SEQUENCE 02

    # Exercice 1
    $longueur = 10;
    $largeur =  5;
    $surfaceCompute = $longueur * $largeur;
    echo "La surface du carré est de : " .$surfaceCompute. "m2.";

    #Exercice 2
    $prixHT = 20;
    $TVA = $prixHT * 0.2;
    $prixTTC = $prixHT + $TVA;
    echo "Pour un prix HT de ".$prixHT. "la TVA s'élève à " .$TVA. "et le prix TTC est de : " .$prixTTC;

    #Exercice 3
    $celsius = 22;
    $Fahrenheit = $celsius * 9/5 + 32;
    echo "Pour une température donnée de " .$celsius. "° Celsius, l'équivalent Fahrenheit est de : ".$Fahrenheit;

    #Exercice 4
    $nombre1 = 4;
    $nombre2 = 8;
    $square1 = $nombre1*$nombre1; 
    $square2 = $nombre2*$nombre2;
    echo "Le carré de ".$nombre1. "est :" .$square1. "et le carré de " .$nombre2. "est de :" .$square2;

    $substract1 = $square1 - $nombre1;
    echo "La soustraction de ".$square1. "par lui même soit " .$nombre1. "donne: " .$substract1;

    $percent = $nombre2 * 0.2;
    echo "20% de nombre2 donne: " .$percent; 

    $finalStep = $substract1 + $percent;
    echo "Le produit de la dernière étape (étape 4 et 3) :" .$finalStep;
    ?>
</body>
</html>