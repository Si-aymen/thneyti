<?php
class moyen_de_transport{

    private string $id_moy;
    private float $prix;
    private string $disponibilite;
    private string $depart;
    private string $destination;
    private string $date_depart;
    private string $AR;
    private string $date_retour;

    
    public function  __construct ($a,$b,$c,$d,$e,$f,$i,$j){
        $this-> id_moy=$a;
        $this->prix=$b;
        $this->disponibilite=$c;
        $this->depart=$d;
        $this->destination=$e;
        $this->date_depart=$f;
        $this->AR=$i;
        $this->date_retour=$j;
       
    }
    public function get_id_moy()
    {
        return $this->id_moy;
    }
    public function get_prix()
    {
        return $this->prix;
    }   
    public function get_disponibilite()
    {
        return $this->disponibilite;
    }
    public function get_depart()
    {
        return $this->depart;
    }
    public function get_destination()
    {
        return $this->destination;
    }
    public function get_date_depart()
    {
        return $this->date_depart;
    }
    public function get_AR()
    {
        return $this->AR;
    }
    public function get_date_retour()
    {
        return $this->date_retour;
    }

    
}
?>