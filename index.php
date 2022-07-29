<?php 

ini_set('session.use_strict_mode',1);
session_start();
if (isset($_SESSION['session_id'])) {
    // if exist session id
} else {
    # code...
    $newSessionId = session_create_id();
    $_SESSION['session_id'] = $newSessionId;
}

require 'vendor/autoload.php';
require 'src/app.php';
?>