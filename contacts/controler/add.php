<?php
    /** @var mysqli $db */
    if (isset($_POST['sub'])) {
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    }
    $statment = $db->query("INSERT INTO `contacts`( `name`, `number`, `email`) VALUES ('$name','$number','$email')");

if ($statment) {
    header("location:/contacts/");
}else {
    echo'404';
}
    
?>