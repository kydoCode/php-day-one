
  <?php
  #Exercice 1

    $couleurs = array("rouge", "vert", "bleu");
    $taille = count($couleurs);
    for ($i = 0; $i < $taille; 1) {
        echo $couleurs[$i];
        $i+=1;
    }

    #Exercice 2

    // array_rand
    // $indexSujet = array_rand($sujets); // Sélectionne un indice de sujet au hasard

    $sujets = array("chien", "chat", "dragon", "piafs");
    $verbes = array("mange", "attaque", "bat au cluedo");


    for ($i = 0; $i<5; 1) {
        $index_sujet = array_rand($sujets, 1);
        $index_verbe = array_rand($verbes, 1);
        echo $sujets[$index_sujet]." " .$verbes[$index_verbe]." ".$sujets[$index_sujet];
        $i+=1;
    }

    #Exercice 3:
    $courses = array("weed", "meat", "cake", "flour");
    $taille_two = count($courses);
        for ($i = 0; $i < $taille_two; 1) {
            echo $courses[$i].", ";
            $i+=1;
        }
?>

<?php
    #Exercice 1:
 $pays = array(
    "France" => "Paris",
    "Espagne" => "Madrid",
    "Chine" => "Pékin",
    "Angleterre" => "Londres"
 );
 echo $pays["France"];  # Affiche Paris

    #Exercice 2:
    $amis = array(
        "ami_one" => "email_one",
        "ami_two" => "email_two",
        "ami_three" => "email_three",
        "ami_four" => "email_four"
    );
    # On affiche le mail de ami three:
    echo $amis["ami_three"];

    #Exercice 3:
    $commande = array(
        "nouilles" => 50,
        "dumplings" => 100,
        "hot_pot" => 25,
        "dim_sum" => 250
    );
    echo "La quantité de dumplings est :" .$commande["dumplings"];
?>