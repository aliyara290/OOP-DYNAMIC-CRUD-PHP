<?php
require '../config/db.php';
require '../lib/crud.php'; 

$database = new Database();
$db = $database->getConnection();

$crud = new Crud($db);

$data = [
    'first_name' => 'Leo',
    'last_name' => 'Messi',
    'position' => 'Midfielder',
    'rating' => 9
];
$playerId = 2; 

$crud->updatePlayer($data, $playerId);
?>
