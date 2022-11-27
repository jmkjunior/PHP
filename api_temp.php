<?php
 
 $server = "localhost";
 $username = "root";
 $password = "";
 $db = "table_temp";
 $conn = mysqli_connect($server, $username, $password, $db);

 $request_method = $_SERVER["REQUEST_METHOD"];
 function getTemperatures()
 {
 global $conn;
 $query = "SELECT * FROM temperature";
 $response = array();
 $result = mysqli_query($conn, $query);
 while($row = mysqli_fetch_array($result))
 {
 $response[] = $row;
 }
 header('Content-Type: application/json');
 echo json_encode($response, JSON_PRETTY_PRINT);

 }
getTemperatures();

function getTemperature($ID=0)
 {
 global $conn;
 $query = "SELECT * FROM temperature";
 if($ID != 0)
 {
 $query .= " WHERE ID=".$ID." LIMIT 1";
 }
 $response = array();
 $result = mysqli_query($conn, $query);
 while($row = mysqli_fetch_array($result))
 {
 $response[] = $row;
 }
 header('Content-Type: application/json');
 echo json_encode($response, JSON_PRETTY_PRINT);
 }
 getTemperature(2);

 function getLastTemperature()
 {
 global $conn;
 $query = "SELECT * FROM temperature ORDER BY ID DESC LIMIT 1";
 $response = array();
 $result = mysqli_query($conn, $query);
 while($row = mysqli_fetch_array($result))
 {
 $response[] = $row;
 }
 header('Content-Type: application/json');
 echo json_encode($response, JSON_PRETTY_PRINT);
 }

 switch($request_method)
 {

 case 'GET':
 // Retrive Products
 if(!empty($_GET["identifiant"]))
 {
 $ID=intval($_GET["identifiant"]);
 if($ID==1)
 {
 getLastTemperature();
 }
 else
 {
 getTemperature($ID);
 }
 }

 else
 {
 getTemperatures();
 }
 break;
 default:
 // Invalid Request Method
 header("HTTP/1.0 405 Method Not Allowed");
 break;
 case 'POST':
    // Ajouter un produit
    AddTemperature();
    break;
   
    case 'PUT':
    // Modifier un produit
    $ID = intval($_GET["ID"]);
    updateTemperature($ID);
    break;
   
    case 'DELETE':
    // Supprimer un produit
    $ID = intval($_GET["ID"]);
    deleteTemperature($ID);
    break;
    }
