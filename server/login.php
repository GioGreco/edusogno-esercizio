<?php
include __DIR__.'/../assets/partials/settings.php';

if(isset($_POST['email']) && isset($_POST['password'])){
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        header("Location: ../login_page.php?error=email");
    } else if (strlen($_POST['password']) < 4){
        header("Location: ../login_page.php?error=password");
    } else{
        login($_POST['email'], $_POST['password'], $conn);
    }
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

        if ($result->num_rows == 0){
            header("Location: ../login_page.php?error=not-found");
        } else{
            $user = $result->fetch_object();
            
            $_SESSION['userId'] = $user->id;
            $_SESSION['userName'] = $user->nome;
            $_SESSION['userEmail'] = $user->email;
            
            header("Location: ../index.php");
        }

    }