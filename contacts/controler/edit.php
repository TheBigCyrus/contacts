<?php
    /** @var mysqli $db */
    if (isset($_POST['edit'])) {
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $id = $_POST["hidden"];
    }
    $statment = $db->query("UPDATE `contacts` SET `name`='$name',`number`='$number',`email`='$email' WHERE `id`=$id");

if ($statment) {
    header("location:/contacts/");
}else {
    echo'404';
}
    
?>