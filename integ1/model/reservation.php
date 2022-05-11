<?php
class reservation{

    private string $numabon;
    private string $nom;
    private string $prenom;
    private string $adresse;
    private string $email;
    private string $dateinscription;
    
    public function  __construct ($n,$p,$r,$pr,$u,$i){
        $this-> numabon=$n;
        $this->nom=$p;
        $this->prenom=$r;
        $this->adresse=$pr;
        $this->email=$u;
        $this->dateinscription=$i;
       
    }
    public function get_numabon()
    {
        return $this->numabon;
    }
    public function get_nom()
    {
        return $this->nom;
    }   
    public function get_prenom()
    {
        return $this->prenom;
    }
    public function get_adresse()
    {
        return $this->adresse;
    }
    public function get_email()
    {
        return $this->email;
    }
    public function get_dateinscription()
    {
        return $this->dateinscription;
    }

    
}
?>