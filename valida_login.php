<?php

    session_start();
    //variável para validar login
    $validador = false;
    //Usuários válidos
    $usuarios_app = array(
        array('email' => 'adm@email.com', 'senha' => '1234'),
        array('email' => 'user@email.com', 'senha' => '1234'),
        array('email' => 'joao@email.com', 'senha' => '1234'),
        array('email' => 'maria@email.com', 'senha' => '1234'),
    );
    foreach($usuarios_app as $user){
        
        if($user['email'] == $_POST["email"] && $user['senha'] == $_POST["senha"]){
            $validador = true;
        }
    }
    if($validador){
        echo 'Autenticando... <br>';
        echo 'Usuário válido, logando...';
        header('Location: home.php');
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['x'] = '1';
        $_SESSION['y'] = '2';
        }else{
        header('Location: index.php?login=erro');
        $_SESSION['autenticado'] = 'NAO';
        }
    


?>