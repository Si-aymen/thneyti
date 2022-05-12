<?PHP
   class user{
      private  $nom;
      private  $prenom;
      private  $date_de_naissance;
      private  $email;
      private  $mot_de_passe;
      private  $adresse;
      private  $sexe;
      private  $permis;
      private  $tel;
      
      
      function __construct($nom,$prenom,$date_de_naissance,$email,$mot_de_passe,$adresse,$sexe,$permis,$tel){
         
         $this->nom=$nom;
         $this->prenom=$prenom;
         $this->date_de_naissance=$date_de_naissance;
         $this->email=$email;
         $this->mot_de_passe=$mot_de_passe;
         $this->adresse=$adresse;
         $this->sexe=$sexe;
         $this->permis=$permis;
         $this->tel=$tel;
      }
      
     
      public function getNom()
      {
          return $this->nom;
      }
      public function getPrenom()
      {
          return $this->prenom;
      }   
      public function getDateDeNaissance()
      {
          return $this->date_de_naissance;
      }
      public function getEmail()
      {
          return $this->email;
      }
      public function getMotDePasse()
      {
          return $this->mot_de_passe;
      }
      public function getAdresse()
      {
          return $this->adresse;
      }   
      public function getSexe()
      {
          return $this->sexe;
      }
      public function getPermis()
      {
          return $this->permis;
      }
      public function getBankID()
      {
          return $this->tel;
      }
      function getLogin(): string{
        return $this->login;
    }
        function setNom(string $nom): void{
			$this->nom=$nom;
		}
		function setPrenom(string $prenom): void{
			$this->prenom;
		}
		function setLogin(string $login): void{
			$this->login=$login;
		}
		function setEmail(string $email): void{
			$this->email=$email;
		}
		function setPassword(string $mot_de_passe): void{
			$this->mot_de_passe=$mot_de_passe;
		}


      
      
   }
   
      
?>