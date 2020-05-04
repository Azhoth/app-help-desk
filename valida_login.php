<?php

    session_start();
    //variável para validar login
    $validador = false;
    //Variável do ID do usuário
    $usuario_id = null;
    //Variável do nível de acesso do usuário
    $usuario_perfil_id = null;
    //Niveis de acesse dentro de um array
    $perfis = array(1 => 'ADM', 2 => 'user');
    //Usuários válidos
    $usuarios_app = array(
        array('id' => 1, 'email' => 'adm@email.com', 'senha' => '1234', 'perfil_id' => 1),
        array('id' => 2, 'email' => 'user@email.com', 'senha' => '1234', 'perfil_id' => 1),
        array('id' => 3, 'email' => 'joao@email.com', 'senha' => '1234', 'perfil_id' => 2),
        array('id' => 4, 'email' => 'maria@email.com', 'senha' => '1234', 'perfil_id' => 2),
    );
    foreach($usuarios_app as $user){
        
        if($user['email'] == $_POST["email"] && $user['senha'] == $_POST["senha"]){
            $validador = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }
    if($validador){
        echo 'Autenticando... <br>';
        echo 'Usuário válido, logando...';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
        }else{
        header('Location: index.php?login=erro');
        $_SESSION['autenticado'] = 'NAO';
        }
    


?>