<?php
/**
 * On crée la classe character
 */
class character {
    public $health = 0;
    public $mana = 0;
    public $stuff;
    /**
     * Définition du constructeur de la classe character
     */
    public function __construct($characNumber) {
        $this->stuff = new stuff();
        echo 'Ceci est le perso numéro : ' . $characNumber . 'sa santé est de : ' . $this->health . 'et son mana est de : ' . $this->mana;
    }
    
    /**
     * Cette fonction permet de discuter avec d'autres joueurs
     * @param string $charac
     * @return string
     */
    public function chat($charac){
        return $charac;
    }
    
    
    public function __destruct() {
        echo 'Ce perso est mort !';
    }

}
