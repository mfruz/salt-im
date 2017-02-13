<?php

class nom_classe {
    // Ligne à multiplier selon le nombre d'attributs
    private $nom_attribut;
    
    private static $id=0;
    
   // Construction de la classe
   public function __construct(array $donnees) {
        self::$id++;
       return $this->hydrate($donnees);
   }

    // Set et get des attributs-----------------------
    // A multiplier selon le nombre d'attributs
    public function get_nom_attribut() {
    return $this->nom_attribut();
    }
    
    public function get_nom_attribut() {
         $this->nom_attribut = $nom_attribut;      
    }
    // Fin du multiplier--------------------------------

// Hydrate
public function hydrate(array $donnees) {
    foreach ($donnees as $key => $value) {
        // On récupère le nom du setter correspondant à l'attribut
        $method = 'set'. ucfirst($key);
        
        //Si le setter correspondant exite :
        if(method_exists($this, $method)) {
            // On appelle le setter
            $this->$method($value);
        }
}
}
    
}

?>