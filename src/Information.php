<?php
declare(strict_types=1);

namespace App;

use App\EtudiantAbstract;

final class Information extends EtudiantAbstract
{
    public $nomMatiere;

    public function __construct(string $nomMatiere)
    {
        parent::__construct();
        $this->nomMatiere = $nomMatiere;
    }

    public function afficherClasse()
    {
        printf("Dans la filière institulé  <b> %s </b>, <br> Nous avons  <b> %d </b> Etudiants inscrits \n<br>",
            $this->nomMatiere, $this->effectifTotal());
    }

    public function classement()
    {
        $tab = array();
        for($i = 0; $i <$this->effectifTotal(); $i++){
            $tab += array($this->listeEtudiant()[$i] => $this->noteEtudiant());
        }
        arsort($tab);
        printf("<br><b><u><h3>Classement des etudiants du plus fort au plus nul</h3></u></b> <br>");
        print_r($tab);

        
    }
}