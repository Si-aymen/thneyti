
<?PHP
   class categorie{
     

      private $nomcateg;
      private $description;
      private $fcin;
 
     
      
      
      function __construct($nomcateg,$description,$fcin){
         
         $this->nomcateg=$nomcateg;
         $this->description=$description;
         $this->fcin=$fcin;

      }
      
    
      function getnomcateg() {
         return $this->nomcateg;
      }
      function getdescription() {
         return $this->description;
      }
      function getcin() {
         return $this->fcin;
      }

      
      
   }
   
      
?>