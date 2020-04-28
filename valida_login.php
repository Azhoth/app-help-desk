<?php
    //variável para validar login
    $validador = false;
    //Usuários válidos
    $usuarios_app = array(
        array('email' => 'adm_teste@email.com', 'senha' => '123456'),
        array('email' => 'user@email.com', 'senha' => '987654'),
    );
    foreach($usuarios_app as $user){
        
        if($user['email'] == $_POST["email"] && $user['senha'] == $_POST["senha"]){
            $validador = true;
        }
    }
    if($validador){
        echo 'Autenticando... <br>';
        echo 'Usuário válido, logando...';
        }else{
        header('Location: index.php?login=erro');
        }
    


?>