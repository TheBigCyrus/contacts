<?php
    /** @var mysqli $db */
    if (isset($_GET['id'])) {
    $id = $_GET["id"];
    }
    $statment = $db->query("DELETE FROM `contacts` WHERE `id`=$id");

if ($statment) {
    header("location:/contacts/");
}else {
    echo'400';
}
    
?>