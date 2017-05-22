
<?php
    //Require engine PHP page
    require 'engine.php';
    session_start();
    //Prepare response for JS
    header('Content-Type: application/json');
    $data = array(
        "status" => null,
        "message" => null
    );
    //Username & Password
    $username = filter_input(INPUT_GET, "username");
    $password = md5(filter_input(INPUT_GET, "password"));

    if (!isset($_SESSION["credentials"])) {
        if(isset($username) && isset($password)) {
            if(authentication_param($username, $password)) {
                setResponse($data, TRUE, "Autenticazione riuscita");
            } else { setResponse($data, FALSE, "Username o Password non valide");}
            connection_close();
        } else { setResponse($data, FALSE, "Username o Password non impostate");}
    } else {
        if(authentication_session()) {
            setResponse($data, TRUE, "Autenticazione riuscita");
        } else { setResponse($data, FALSE, "Autenticazione fallita");}
    }
    echo json_encode($data);