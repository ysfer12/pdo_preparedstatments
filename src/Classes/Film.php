<!--film.php-->
<?php

require_once __DIR__ . '/../Config/Database.php';

class Film{
private $id;
private $titre;
private $genre;
private $duree;
private $date_sortie;
private $realisateur;
private static $connexion;

public function __construct($id,$titre,$genre,$duree,$date_sortie,$realisateur){
  $this->id=$id;
  $this->titre=$titre;
  $this->genre=$genre;
  $this->duree=$duree;
  $this->date_sortie=$date_sortie;
  $this->realisateur=$realisateur;
  $db = new DatabaseConnection();
  self::$connexion = $db->connect();
}

public function save(){
    $sqlReq="insert into film(id_film,titre,genre,duree,date_de_sortie,realisateur)values(:id,:titre,:genre,:duree,:date_sortie,:realisateur)";
    $stmt=self::$connexion->prepare($sqlReq); 
    if($stmt){
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':titre',$titre);
        $stmt->bindParam(':genre',$genre);
        $stmt->bindParam(':duree',$duree);
        $stmt->bindParam(':date_sortie',$date_sortie);
        $stmt->bindParam(':realisateur',$realisateur);
    }
   return $stmt->execute();
    
}

public function getAllFilms(){
    $sqlReq="select * from film";
    $stmt=self::$connexion->prepare($sqlReq);
    $stmt->execute();
    $result=$stmt->fetchAll();
    return $result;
}

public function getId(){
  return $this->id;
}
public function getTitre(){
  return $this->titre;
}
public function getGenre(){
  return $this->genre;
}
public function getDuree(){
  return $this->duree;
}
public function getDatesortie(){
  return $this->date_sortie;
}
public function getRealisateur(){
  return $this->realisateur;
}

public function setId($id){
  return $this->id=$id;
}
public function setTitre($titre){
  return $this->titre=$titre;
}
public function setGenre($genre){
  return $this->genre=$genre;
}
public function setDuree($duree){
  return $this->duree=$duree;
}
public function setDatesortie($date_sortie){
  return $this->date_sortie=$date_sortie;
}
public function setRealisateur($realisateur){
  return $this->realisateur=$realisateur;
}

// public function traiterFormulaire() {

// if(isset($_POST['envoyer'])){
//   $id=$_POST['id'];
//   $titre=$_POST['titre'];
//   $genre=$_POST['genre'];
//   $duree=$_POST['duree'];
//   $date_sortie=$_POST['date_sortie'];
//   $realisateur=$_POST['realisateur'];

//   $filmNew = new Film($id,$titre,$genre,$duree,$date_sortie,$realisateur);
//    echo "<h2>Film Informations</h2>";
//    echo "id:".$filmNew->getId()."<br>";
//    echo "Titre:".$filmNew->getTitre()."<br>";
//    echo "Genre:".$filmNew->getGenre()."<br>";
//    echo "Duree:".$filmNew->getDuree()."<br>";
//    echo "Date de sortie:".$filmNew->getDatesortie()."<br>";
//    echo "Realisateur:".$filmNew->getRealisateur()."<br>";


// }

// }


}
?>