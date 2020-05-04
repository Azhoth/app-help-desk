<?php
    session_start();
    $arquivo = fopen('arquivo.txt', 'a');
    $chamados = str_replace('#', '-', $_POST);
    $chamados = $_SESSION['id'] . '#' . implode('#', $chamados) . PHP_EOL;
    fwrite($arquivo, $chamados);
    fclose($arquivo);

    header('Location: abrir_chamado.php');
?>