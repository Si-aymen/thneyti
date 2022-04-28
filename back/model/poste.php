
<?PHP
   class poste{
      private  $id_poste ;
      private  $titre ;
      private $contenu;
      private $image;
      private $date_de_pub;
 
     
      
      
      function __construct($id_poste,$titre,$contenu,$image,$date_de_pub){
         
         $this->id_poste=$id_poste;
         $this->titre=$titre;
         $this->contenu=$contenu;
         $this->image=$image;
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
      function getimage() {
         return $this->image;
      }
      function getdate_de_pub() {
         return $this->date_de_pub;
      }
      

      
      
   }
   
      
?>