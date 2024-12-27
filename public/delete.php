<?php
require '../config/db.php';
require '../lib/crud.php';

$database = new Database();
$db = $database->getConnection();

$crud2 = new Crud($db);

$id = 1;
$crud2->deletePlayer($id);
if($crud2) {
    echo "nice";
}
?>
