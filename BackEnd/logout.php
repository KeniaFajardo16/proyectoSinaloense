<?php
    session_start();
    unset ($SESSION['username']);
    session_destroy();
    header('Location: ../FrontEnd/login_pass.php');
?>