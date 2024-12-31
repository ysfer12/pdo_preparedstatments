<?php
require_once __DIR__ . '/../Classes/Film.php';
if(isset($_GET)){
    $newFilm = Film();
    $newFilm->getAllFilms();

}


if(isset($_POST['submit'])){
    $titre=$_POST['titre'];
    $genre=$_POST['genre'];
    $duree=$_POST['duree'];
    $date_de_sortie=$_POST['date_de_sortie'];
    $realisateur=$_POST['realisateur'];
    $filmNew = new Film($id,$titre,$genre,$duree,$date_sortie,$realisateur);
    $filmNew->save();
}









?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="POST">
    <label for="">film id</label></br>
    <input type="text" name="id"></br>
    <label for="">film titre</label></br>
    <input type="text" name="titre"></br>
    <label for="">film genre</label></br>
    <input type="text" name="genre"></br>
    <label for="">film duree</label></br>
    <input type="text" name="duree"></br>
    <label for="">film date sortie</label></br>
    <input type="text" name="date_sortie"></br>
    <label for="">Réalisateur du film</label></br>
    <input type="text" name="realisateur"></br>
    <input type="submit" name="envoyer" value="Envoyer">

</form>
</body>
</html>