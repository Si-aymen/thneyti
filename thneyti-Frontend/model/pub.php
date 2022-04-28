
<?PHP
   class pub{
      private  $id_publication ;   
      private  $photo ;
      private $date_debut;
      private $date_fin;
     
 
     
      
      
      function __construct($id_publication,$photo,$date_debut,$date_fin){
         $this->id_publication=$id_publication;
         $this->photo=$photo;
         $this->date_debut=$date_debut;
         $this->date_fin=$date_fin;
      }
      
      function getid_publication(){
         return $this->id_publication;
      }
      function getphoto(){
         return $this->photo;
      }
      function getdate_debut() {
         return $this->date_debut;
      }
      function getdate_fin() {
         return $this->date_fin;
      }
     
      

      
      
   }
   
      
?>