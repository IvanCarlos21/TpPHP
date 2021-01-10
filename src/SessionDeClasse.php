<?php
declare(strict_types=1);

namespace App;

class SessionDeClasse
{
    public $etudiants;

    public function __construct()
    {
        $this->etudiants = ["Ivan", "zizou", "ronaldo", "dimitri", "florian", "samuel", "jeremy", "arnold", "marseille"];
    }

    public function listeEtudiant(): array
    {
        return $this->etudiants;
    }
}