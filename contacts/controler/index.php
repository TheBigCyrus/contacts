<?php
    /** @var mysqli $db */
    $statment = $db->query("SELECT * from contacts");

    /** @var array $contacts */
    $contacts = [];

    if ($statment->num_rows) {
        while ($record = $statment->fetch_assoc())
        {
            $contacts[] = $record;
        } 
    }

    require_once "view/index.php";
?>