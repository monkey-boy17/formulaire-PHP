<?php 

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$matricule = $_POST['matricule'];
$gender = $_POST['gender'];
$promotion = $_POST['promotion'];
$mail = $_POST['email'];
/**/
if($name != "" && $lastname != "" && $firstname != "" && $matricule != "" &&  $gender != "" && $promotion != "" && $mail != "" ){
    echo 'NOM : '.$_POST['name'].'<br>  POSTNOM : '.$_POST['lastname'].' <br>  PRENOM : '.$_POST['firstname'].' <br> MATRICULE : '.$_POST['matricule'].'<br>  GENRE : '.
    $_POST['gender'].'<br>  PROMOTION : '. $_POST['promotion'].'<br> EMAIL : '.$_POST['email'];}
if($name == false){echo "le champ nom est vide  <br>";}
if($lastname == false){echo "le champ postnom est vide  <br>";}
if($firstname == false){ echo "le champ prenom est vide <br>";}
if($matricule == false){ echo "le champ matricule est vide <br>";}
if($gender == false){echo "le champ genre est vide <br>";}
if($promotion == false){echo "le champ promotion est vide <br>";}
if($mail == false){ echo "le champ mail est vide";}
?>