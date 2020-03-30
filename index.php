<?php

class Personnage {

    public $nom;
    public $force;
    public $level;
    public $health;
    public $death;

    function caracteristiques() {
        $etat = ($this->death)? "mort" : "vivant";
        echo $this->nom ." a une force de ".$this->force." et est au niveau ".$this->level.", son état de santé est de ".$this->health." points/100, notre personnage est donc ".$etat;
    }
}

$perso1 = new Personnage();
$perso1->nom = "Rose";
$perso1->force = 12;
$perso1->level = 1;
$perso1->health = 100;
$perso1->death = false;

$perso2 = new Personnage();
$perso2->nom = "Golbu";
$perso2->force = 15;
$perso2->level = 1;
$perso2->health = 10;
$perso2->death = false;

$perso3 = new Personnage();
$perso3->nom = "Arthis";
$perso3->force = 13;
$perso3->level = 1;
$perso3->health = 0;
$perso3->death = true;


$perso3->caracteristiques();