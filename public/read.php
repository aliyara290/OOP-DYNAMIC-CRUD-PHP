<?php
require '../config/db.php';  
require '../lib/crud.php'; 

$database = new Database();
$db = $database->getConnection();
$crud = new Crud($db);

// for read specific player 
$player = $crud->getPlayer('joueurs', 3);

if ($player) {
    echo 'First Name: ' . $player['first_name'] . '<br>';
    echo 'Last Name: ' . $player['last_name'] . '<br>';
    echo 'Position: ' . $player['position'] . '<br>';
    echo 'Rating: ' . $player['rating'] . '<br>';
} else {
    echo 'Player not found.';
}
echo '<hr>';
echo '<hr>';
echo '<hr>';
// for read all the players in the db
$players = $crud->getAllPlayers();
if ($players) {
    foreach ($players as $player) {
        echo 'ID: ' . $player['joueurs_id'] . '<br>';
        echo 'First Name: ' . $player['first_name'] . '<br>';
        echo 'Last Name: ' . $player['last_name'] . '<br>';
        echo 'Position: ' . $player['position'] . '<br>';
        echo 'Rating: ' . $player['rating'] . '<br>';
        echo '<hr>';
    }
} else {
    echo 'No players found.<br>';
}
?>
