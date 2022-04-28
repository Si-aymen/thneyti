
<?PHP
   class poste{
      private  $id_poste ;
      private  $titre ;
      private $contenu;
     
      private $date_de_pub;
 
     
      
      
      function __construct($id_poste,$titre,$contenu,$date_de_pub){
         
         $this->id_poste=$id_poste;
         $this->titre=$titre;
         $this->contenu=$contenu;
         
         $this->date_de_pub=$date_de_pub;
      }
      
      function getid_poste(){
         return $this->id_poste;
      }
      function gettitre(){
         return $this->titre;
      }
      function getcontenu() {
         return $this->contenu;
      }
      
      function getdate_de_pub() {
         return $this->date_de_pub;
      }
      

      
      
   }
   
      
?>