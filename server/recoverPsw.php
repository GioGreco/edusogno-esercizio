<?php
include __DIR__.'/../assets/partials/settings.php';

if(isset($_POST['email'])){
    recoverPsw($_POST['email'], $conn);
}else{
    header("Location: ../login_page.php");
    session_destroy();
}
function recoverPsw($email, $conn)
    {
        $stmt = $conn->prepare("SELECT * FROM `utenti` WHERE `email` = ?");
        $stmt->bind_param("s", $email);

        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 0) {
            echo "Email not found in the database.";
        } else {
            $newPassword = substr(md5(rand()), 0, 6);
            $to = $email;
            $subject = "Password Recovery";
            $message = "Your new password is: $newPassword";
            mail($to, $subject, $message);

            $stmt2 = $conn->prepare("UPDATE `utenti` SET `password` = ? WHERE `utenti`.`email` = ?");
            $stmt2->bind_param("ss", $newPassword, $email);
            $stmt2->execute();
            $stmt2->close();

            $_SESSION['message'] = 'La password è stata modificata con successo! La nuova password è stata inviata al tuo indirizzo email.';
        
            header("Location: ../login_page.php");
        }
    }