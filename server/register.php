<?php
include __DIR__.'/../assets/partials/settings.php';

if(isset($_POST['nome']) && isset($_POST['cognome']) && isset($_POST['email']) && isset($_POST['password'])){
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        header("Location: ../register_page.php?error=email");
    } else if (strlen($_POST['password']) < 4){
        header("Location: ../register_page.php?error=password");
    } else if (strlen($_POST['nome']) < 4){
        header("Location: ../register_page.php?error=nome");
    } else if (strlen($_POST['cognome']) < 4){
        header("Location: ../register_page.php?error=cognome");
    } else{
        register($_POST['nome'], $_POST['cognome'], $_POST['email'], $_POST['password'], $conn);
    }
}else{
    header("Location: ../register_page.php");
    session_destroy();
}
function register($nome, $cognome, $email, $password, $conn)
    {
        $stmt = $conn->prepare("SELECT * FROM `utenti` WHERE `email` = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0){
            header("Location: ../register_page.php?error=user-exist");
        } else {
            $stmt = $conn->prepare("INSERT INTO `utenti` (`nome`, `cognome`, `email`, `password`) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $nome, $cognome, $email, $password);

            $stmt->execute();
            $stmt->close();

            $_SESSION['message'] = 'La registrazione è andata a buon fine! Reinserisci le tue credenziali per visualizzare i tuoi eventi.';
            
            header("Location: ../login_page.php");
        }
    }