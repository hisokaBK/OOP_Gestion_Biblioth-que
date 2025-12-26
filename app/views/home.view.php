<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <title> <?php echo $title ?> </title>
 <link rel="stylesheet" href="assets/output.css">
 <link rel="stylesheet" href="assets/style.css">
  <script src="assets/js/flach.js"></script>
</head>
<body class="bg-gray-50 text-gray-800">

<?php 



  include(__DIR__.'/../templates/header.temp.php');

  include(__DIR__.'/../templates/homeSection.temp.php');

  include(__DIR__.'/../templates/footer.temp.php')

  

  ?> 

  <div style="height: 100vh; background:black; color:white; text-align:center; padding:100px;">
            <?php    
            
               class Utilisateur{

                     private $nom,$prenom,$type_utilisateur;
                     public function __construct($nom,$prenom,$type_utilisateur){
                              $this->nom=$nom;
                              $this->prenom=$prenom;
                              $this->type_utilisateur=$type_utilisateur;
                     }

                     public function afficherNomComplet(){
                            return "le nom complet : {$this->nom} {$this->prenom}";
                     }

                     public function changerNom($newN){
                               $this->name =$namN;
                              }
                              
                    public function changerPrenom($newP){
                       $this->prenom =$newP;
                         
                     }
                    
                }

              class Patiet extends Utilisateur{
                      private $rendez_vous ;
          
                      public function __construct($nom,$prenom,$type_utilisateur,$rendez_vous) {
                          parent::__construct($name);
                          $this->rendez_vous = $rendez_vous;
                      }

                      public function prendreRendezVous($rand){
                          $this->rendez_vous =$rend;
                      }
                 }

                class Medecin extends Utilisateur{
                      private $specialite  ;

                      public function __construct($nom,$prenom,$type_utilisateur,$specialite) {
                          parent::__construct($name);
                          $this->rendez_vous = $specialite;
                      }

                      public function  consulterPatient(){
                                
                      }
                 }
                   
                   

                
            
            ?>
  </div>

</body>
</html>