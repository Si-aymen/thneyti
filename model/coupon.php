
<?PHP
   class coupon{
     
      private  $date_deb ;
      private $date_experation;
      private $taux_reduction;
      private $code_coupon;
 
     
      
      
      function __construct($date_deb,$date_experation,$taux_reduction,$code_coupon){
         
         $this->date_deb=$date_deb;
         $this->date_experation=$date_experation;
         $this->taux_reduction=$taux_reduction;
         $this->code_coupon=$code_coupon;
      }
      
     
      function getdate_deb(){
         return $this->date_deb;
      }
      function getdate_experation() {
         return $this->date_experation;
      }
      function gettaux_reduction() {
         return $this->taux_reduction;
      }
      function getcode_coupon() {
         return $this->code_coupon;
      }
      

      
      
   }
   
      
?>