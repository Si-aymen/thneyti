<?php

   class user{
      private $id;
      private  $nom;
      private  $prenom;
      private  $date_de_naissance;
      private  $email;
      private  $mot_de_passe;
      private  $adresse;
      private  $sexe;
      private  $permis;
      private  $tel;
      
      
      function __construct($id,$nom,$prenom,$date_de_naissance,$email,$mot_de_passe,$adresse,$sexe,$permis,$tel){
        $this->id=$id;
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
      
      public function getId()
      {
          return $this->id;
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
  

      
      
   }
   
      
?>