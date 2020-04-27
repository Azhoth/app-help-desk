<?php
    //Usuários válidos
    $usuarios_app = array(
        array('email' => 'adm_teste@email.com', 'senha' => '123456'),
        array('email' => 'user@email.com', 'senha' => '987654'),
    );
    echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>';

    print_r($_POST);
    echo '<br>';
    echo $_POST["email"];
    echo '<br>';
    echo $_POST["senha"];

?>