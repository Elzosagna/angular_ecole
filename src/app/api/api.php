<?php
  ini_set('display_errors', 1);
  header('Access-Control-Allow-Origin: *');
  header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization, X-Auth-Token');
  header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, HEAD, OPTIONS');
  header('Content-Type: application/json');

  $method = $_SERVER['REQUEST_METHOD'];
  $input = file_get_contents('php://input');
  $input = json_decode($input);

  $serveur = "localhost";
  $user = "elhadjiibrahimas";
  $password ="EUctSh31qp";
  $name_bdd ="elhadjiibrahimas_francosn";

  try{
    $connexion= new PDO('mysql:host='.$serveur.';dbname='.$name_bdd.';charset=utf8', $user, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
    catch (Exception $e){
      die('Erreur : ' . $e->getMessage());
    }

  if ($method == 'GET') {
      $req= $connexion->prepare("SELECT * FROM table1 ");
      $req->execute();
      $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
      echo (json_encode($resultat));
  }
?>
