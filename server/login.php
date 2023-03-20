<?php
include __DIR__.'/../assets/partials/settings.php';

if(isset($_POST['email']) && isset($_POST['password'])){
    login($_POST['email'], $_POST['password'], $conn);
}else{
    header("Location: ../login_page.php");
    session_destroy();
}
function login($email, $password, $conn)
    {
        $stmt = $conn->prepare("SELECT * FROM `utenti` WHERE `email` = ? AND `password` = ?");
        $stmt->bind_param("ss", $email, $password);

        $stmt->execute();
        $result = $stmt->get_result();

        $user = $result->fetch_object();

        $_SESSION['userId'] = $user->id;
        $_SESSION['userName'] = $user->nome;
        $_SESSION['userEmail'] = $user->email;
        
        header("Location: ../index.php");
    }