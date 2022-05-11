
<?PHP
   class reponse{
     

      private $cin;
      private $reponse;
      private $coupon;
 
     
      
      
      function __construct($cin,$reponse,$coupon){
         
         $this->cin=$cin;
         $this->reponse=$reponse;
         $this->coupon=$coupon;

      }
      
    
      function getcin() {
         return $this->cin;
      }
      function getreponse() {
         return $this->reponse;
      }
      function getcoupon() {
         return $this->coupon;
      }

      
      
   }
   
      
?>