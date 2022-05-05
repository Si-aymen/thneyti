
<?PHP
   class ticket{
      private  $quantite;
      private  $prix;



      function __construct($quantite,$prix){

         $this->quantite=$quantite;
         $this->prix=$prix;
      }


      public function getquantite()
      {
          return $this->quantite;
      }
      public function getprix()
      {
          return $this->prix;
      }


   }
   


?>
