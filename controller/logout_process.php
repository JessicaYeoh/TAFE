<?php
    session_start();
//  if we destroy the session, then we lose session_id() hashing for the user's browser,
//  instead we'll unset all user-related $_SESSION values;

    session_unset();

    header('Location: ../index.php');
?>
