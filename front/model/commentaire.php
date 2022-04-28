
<?PHP
   class commentaire{
      private  $id_com ;
      private $contenu;
      private $date_com;
 
     
      
      
      function __construct($id_com,$contenu,$date_com){
         
         $this->id_com=$id_com;
         $this->contenu=$contenu;
         
         $this->date_com=$date_com;
      }
      
     
      function getid_com() {
         return $this->id_com;
      }
      function getcontenu() {
         return $this->contenu;
      }
    
      function getdate_com() {
         return $this->date_com;
      }
      

      
      
   }
   
      
?>