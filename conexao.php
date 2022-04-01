<?php
    $server = 'localhost';
    $user = 'eulzfuxx_root';
    $senha = '@senhaforte';
    $bd = 'eulzfuxx_LOGIN';
    $conexao = new mysqli($server,$user,$senha,$bd);
    if(!$conexao){
        echo "ERRO AO CONECTAR COM O BANCO DE DADOS".$conexao->error;
    }







    /* ÚTEIS */
    
    function alert($msg){
        echo '<script>alert("'.$msg.'");</script>';
    }
?>