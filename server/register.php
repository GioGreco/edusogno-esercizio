<?php
include __DIR__.'/../assets/partials/settings.php';

if(isset($_POST['nome']) && isset($_POST['cognome']) && isset($_POST['email']) && isset($_POST['password'])){
    register($_POST['nome'], $_POST['cognome'], $_POST['email'], $_POST['password'], $conn);
}else{
    header("Location: ../register_page.php");
    session_destroy();
}
function register($nome, $cognome, $email, $password, $conn)
    {
        $stmt = $conn->prepare("INSERT INTO `utenti` (`nome`, `cognome`, `email`, `password`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nome, $cognome, $email, $password);

        $stmt->execute();
        $stmt->close();

        $_SESSION['message'] = 'La registrazione è andata a buon fine! Reinserisci le tue credenziali per visualizzare i tuoi eventi.';
        
        header("Location: ../login_page.php");
    }