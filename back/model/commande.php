<?PHP
   class commande{
      private  $nom;
      private  $numcarte;
      private  $codecarte;
      private  $nbticketbus;
      private  $nbticketmetro;
      private  $nbtickettrain;
      private  $prixtotal;




      function __construct($nom,$numcarte,$codecarte,$nbticketbus,$nbticketmetro,$nbtickettrain,$prixtotal){

         $this->nom=$nom;
         $this->numcarte=$numcarte;
         $this->codecarte=$codecarte;
         $this->nbticketbus=$nbticketbus;
         $this->nbticketmetro=$nbticketmetro;
         $this->nbtickettrain=$nbtickettrain;
         $this->prixtotal=$prixtotal;
      }


      public function getnom()
      {
          return $this->nom;
      }
      public function getnumcarte()
      {
          return $this->numcarte;
      }
      public function getcodecarte()
      {
          return $this->codecarte;
      }
      public function getnbticketbus()
      {
          return $this->nbticketbus;
      }
      public function getnbticketmetro()
      {
          return $this->nbticketmetro;
      }
      public function getnbtickettrain()
      {
          return $this->nbtickettrain;
      }
      public function getprixtotal()
      {
          return $this->prixtotal;
      }





   }



?>
