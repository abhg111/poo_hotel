<?php

class Hotel {

    private string $nom;
    private string $adresse;
    private string $ville;
    private string $cp;
    private array $chambres;



    public function __construct(string $nom, string $adresse, string $ville, string $cp) {



        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->cp = $cp;
        $this->chambres = [];


    }





    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of cp
     */ 
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set the value of cp
     *
     * @return  self
     */ 
    public function setCp($cp)
    {
        $this->cp = $cp;
        
        return $this;
    }
    
    /**
     * Get the value of chambres
     */ 
    public function getChambres()
    {
        return $this->chambres;
    }

    /**
     * Set the value of chambres
     *
     * @return  self
     */ 
    public function setChambres($chambres)
    {
        $this->chambres = $chambres;

        return $this;
    }


    public function  addChambre(Chambre $chambre) {
        return $this->chambres[] = $chambre ."<br>";
    }


    
    
    public function  afficherNbChambre()  {
        $result = "<h1>$this</h1><br>";
    

        foreach($this->chambres as $chambre){
            
           $result.= $chambre."<br>";
        }

        return $result;


    }
    

    
    
    
    
    
    public function __toString() {
    
        return $this->nom." ".$this->adresse." ".$this->ville." ".$this->cp;  
    
    }





    

}