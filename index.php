<?php

    declare(strict_types = 1);

    use App\Information;
        
    require __DIR__ .'/vendor/autoload.php';

    $salleDeClasse = new Information('Concepteur Devops');
    $salleDeClasse->afficherClasse();
    $salleDeClasse->classement();

?>