
<?PHP
   class pub{
      private  $idd ;   
      private  $photo ;
      private $date_debut;
      private $date_fin;
      private $description;
 
     
      
      
      function __construct($idd,$photo,$date_debut,$date_fin,$description){
         $this->idd=$idd;
         $this->photo=$photo;
         $this->date_debut=$date_debut;
         $this->date_fin=$date_fin;
         $this->description=$description;
      }
      
      function getidd(){
         return $this->idd;
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
      function getdescription() {
         return $this->description;
      }
     
      

      
      
   }
   
      
?>