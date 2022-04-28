
<?PHP
   class reclamation{
     
      private  $nom ;
      private $prenom;
      private $cin;
      private $email;
      private $province;
      private $sexe;
      private $commentaire;
 
     
      
      
      function __construct($nom,$prenom,$cin,$email,$province,$sexe,$commentaire){
         
         $this->nom=$nom;
         $this->prenom=$prenom;
         $this->cin=$cin;
         $this->email=$email;
         $this->province=$province;
         $this->sexe=$sexe;
         $this->commentaire=$commentaire;
      }
      
     
      function getnom(){
         return $this->nom;
      }
      function getprenom() {
         return $this->prenom;
      }
      function getcin() {
         return $this->cin;
      }
      function getemail() {
         return $this->email;
      }
      function getprovince() {
         return $this->province;
      }
      function getsexe() {
         return $this->sexe;
      }
      function getcommentaire() {
         return $this->commentaire;
      }
      

      
      
   }
   
      
?>