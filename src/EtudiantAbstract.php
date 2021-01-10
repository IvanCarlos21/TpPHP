<?php
declare(strict_types=1);

namespace App;

use App\SessionDeClasse;
use App\Interfaces\NoteInterfaces;
use App\Interfaces\EtudiantInterfaces;

abstract class EtudiantAbstract implements NoteInterfaces, EtudiantInterfaces
{
    protected $etudiants;

    public function __construct()
    {
        $this->etudiants = new SessionDeClasse();
    }

    public function noteEtudiant(): int
    {
        return rand(0, 20);
    }

    public function effectifTotal(): int
    {
        return count($this->etudiants->listeEtudiant());
    }

    public function listeEtudiant(): array
    {
        return $this->etudiants->listeEtudiant();
    }

    abstract public function classement();
}